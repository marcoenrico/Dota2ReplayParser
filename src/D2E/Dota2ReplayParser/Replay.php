<?php

namespace D2E\Dota2ReplayParser;

use D2E\Dota2ReplayParser\IO\StringInputStream;

use D2E\Dota2ReplayParser\IO\FileInputStream;
use D2E\Dota2ReplayParser\IO\LittleEndianStreamReader;

class Replay
{
    private static $protoBuildInit = array();

    private $streamReader;
    private $codec;
    private $eventlist = array();
    private $skipFullPacket = false;

    public function __construct($filename, $skipFullPacket = false, $build = "build1")
    {
        if (!file_exists($filename)) {
            throw new \RuntimeException(sprintf("File %s does not exist", $filename));
        }

        self::loadProtoLib($build);

        $this->streamReader = new LittleEndianStreamReader(new FileInputStream($filename));
        $this->codec = new \DrSlump\Protobuf\Codec\Binary();
        $this->skipFullPacket = $skipFullPacket;

        $header = $this->streamReader->readString(8);

        if ($header != "PBUFDEM\0") {
            throw new \RuntimeException(sprintf("File %s is not a valid dem file", $filename));
        }

        //Skip offset
        $this->streamReader->readInt32();
    }

    public static function loadProtoLib($build = "build1")
    {
        if (!isset($protoBuildInit[$build])) {
            $protoBuildInit[$build] = true;

            include_once __DIR__.'/../../proto/'.$build.'/ai_activity.php';
            include_once __DIR__.'/../../proto/'.$build.'/demo.php';
            include_once __DIR__.'/../../proto/'.$build.'/descriptor.php';
            include_once __DIR__.'/../../proto/'.$build.'/dota_commonmessages.php';
            include_once __DIR__.'/../../proto/'.$build.'/dota_modifiers.php';
            include_once __DIR__.'/../../proto/'.$build.'/dota_usermessages.php';
            include_once __DIR__.'/../../proto/'.$build.'/generated_proto.php';
            include_once __DIR__.'/../../proto/'.$build.'/netmessages.php';
            include_once __DIR__.'/../../proto/'.$build.'/usermessages.php';
        }
    }

    public function getMessageOfType($type)
    {

    }

    public function parse()
    {
        $continue = true;

        while($continue && $this->streamReader->available()) {
        	$cmd = $this->streamReader->readInt32D2();
        	$tick = $this->streamReader->readInt32D2();
        	$compressed = false;

        	if ($cmd & \EDemoCommands::DEM_IsCompressed) {
        		$compressed = true;
        		$cmd = $cmd & ~\EDemoCommands::DEM_IsCompressed;
        	}

        	$refls = new \ReflectionClass('EDemoCommands');
        	$messages = $refls->getConstants();

        	if (!in_array($cmd, $messages)) {
        		throw new \RuntimeException(sprintf("Invalid message type %s", $cmd));
        	}

        	$type = array_search($cmd, $messages);
        	$type = preg_replace("/DEM_(.*)/", "CDemo$1", $type);

        	$size = $this->streamReader->readInt32D2();
        	$bytes = $this->streamReader->readString($size);

        	if ($compressed) {
        		$bytes = snappy_uncompress($bytes);
        	}

        	if ($type == "CDemoSignonPacket") {
        		continue;
        	}
            //echo "[$type] size: $size cmd : $cmd \n";

        	$object = $this->codec->decode(new $type, $bytes);
        	$object = $this->parseObject($object, $tick);
        }
    }

    public function track($class, $closure)
    {
        $this->trackedClass[$class] = $closure;
    }

    private function parseObject($object, $tick)
    {
        $class = get_class($object);

        if (isset($this->trackedClass[$class])) {
            $closure = $this->trackedClass[$class];
            $closure($object, $tick);
        }

        switch ($class) {
            case 'CDemoPacket':
                return $this->parseDemoPacket($object, $tick);
                break;
            case 'CDemoFullPacket':
                if (!$this->skipFullPacket) {
                    return $this->parseDemoPacket($object, $tick, true);
                }
                break;
            case 'CSVCMsg_UserMessage':
                return $this->parseUserMessage($object, $tick);
                break;
            case 'CSVCMsg_GameEvent':
                return $this->parseGameEvent($object);
                break;
            case 'CSVCMsg_GameEventList':
                return $this->parseGameEventList($object);
                break;
            default:
                return $object;
                break;
        }
    }

    private function parseDemoPacket($object, $tick, $full = false)
    {
        if ($full) {
            if ($object->getPacket() == null) {
                return null;
            }

            if ($object->getStringTable() != null) {
                $this->parseObject($object->getStringTable());
            }

            $data = $object->getPacket()->getData();
        } else {
            $data = $object->getData();
        }

        $streamReader = new LittleEndianStreamReader(new StringInputStream($data));

        while ($streamReader->available()) {
            $cmd = $streamReader->readInt32D2();

            $refls = new \ReflectionClass('NET_Messages');
            $messagesNet = $refls->getConstants();

            $refls = new \ReflectionClass('SVC_Messages');
            $messagesSvc = $refls->getConstants();

            if (in_array($cmd, $messagesNet)) {
                $type = array_search($cmd, $messagesNet);
                $type = preg_replace("/net_(.*)/", "CNETMsg_$1", $type);
            } elseif (in_array($cmd, $messagesSvc)) {
                $type = array_search($cmd, $messagesSvc);
                $type = preg_replace("/svc_(.*)/", "CSVCMsg_$1", $type);
            } else {
                throw new \RuntimeException(sprintf("Invalid message type %s", $cmd));
            }

            $size = $streamReader->readInt32D2();
            $bytes = $streamReader->readString($size);

            $object = $this->codec->decode(new $type, $bytes);
        	$object = $this->parseObject($object, $tick);
        }
    }

    private function parseUserMessage($object, $tick)
    {
        $cmd = $object->getMsgType();

        $refls = new \ReflectionClass('EBaseUserMessages');
        $messagesUser = $refls->getConstants();

        $refls = new \ReflectionClass('EDotaUserMessages');
        $messagesDotaUser = $refls->getConstants();

        if (in_array($cmd, $messagesUser)) {
            $type = array_search($cmd, $messagesUser);
            $type = preg_replace("/UM_(.*)/", "CUserMsg_$1", $type);
        } elseif (in_array($cmd, $messagesDotaUser)) {
            $type = array_search($cmd, $messagesDotaUser);
            $type = preg_replace("/DOTA_UM_(.*)/", "CDOTAUserMsg_$1", $type);
        } else {
            throw new \RuntimeException(sprintf("Invalid message type %s", $cmd));
        }

        $object = $this->codec->decode(new $type, $object->getMsgData());
        $object = $this->parseObject($object, $tick);
    }

    private function parseGameEvent($object)
    {
        if (isset($this->evenlist[$object->getEventId()])) {
            $descriptor = $this->evenlist[$object->getEventId()];
            $gameevent = array(
                'name' => $descriptor->getName(),
                'keys' => array()
            );

            foreach ($object->getKeysList() as $id => $key) {
                $key_type = $descriptor->getKeys($id);
                $gameevent[$key_type->getName()] = $key;
            }
        }
    }

    private function parseGameEventList($object)
    {
        foreach ($object->getDescriptorsList() as $descriptor) {
            $this->eventlist[$descriptor->getEventId()] = $descriptor;
        }
    }
}