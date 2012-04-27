<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 0.9.4
// Source: ai_activity.proto
//   Date: 2012-04-27 16:14:32

namespace  {

  class Activity extends \DrSlump\Protobuf\Enum {
    const ACT_INVALID = -1;
    const ACT_RESET = 0;
    const ACT_IDLE = 1;
    const ACT_TRANSITION = 2;
    const ACT_COVER = 3;
    const ACT_COVER_MED = 4;
    const ACT_COVER_LOW = 5;
    const ACT_WALK = 6;
    const ACT_WALK_AIM = 7;
    const ACT_WALK_CROUCH = 8;
    const ACT_WALK_CROUCH_AIM = 9;
    const ACT_RUN = 10;
    const ACT_RUN_AIM = 11;
    const ACT_RUN_CROUCH = 12;
    const ACT_RUN_CROUCH_AIM = 13;
    const ACT_RUN_PROTECTED = 14;
    const ACT_SCRIPT_CUSTOM_MOVE = 15;
    const ACT_RANGE_ATTACK1 = 16;
    const ACT_RANGE_ATTACK2 = 17;
    const ACT_RANGE_ATTACK1_LOW = 18;
    const ACT_RANGE_ATTACK2_LOW = 19;
    const ACT_DIESIMPLE = 20;
    const ACT_DIEBACKWARD = 21;
    const ACT_DIEFORWARD = 22;
    const ACT_DIEVIOLENT = 23;
    const ACT_DIERAGDOLL = 24;
    const ACT_FLY = 25;
    const ACT_HOVER = 26;
    const ACT_GLIDE = 27;
    const ACT_SWIM = 28;
    const ACT_JUMP = 29;
    const ACT_HOP = 30;
    const ACT_LEAP = 31;
    const ACT_LAND = 32;
    const ACT_CLIMB_UP = 33;
    const ACT_CLIMB_DOWN = 34;
    const ACT_CLIMB_DISMOUNT = 35;
    const ACT_SHIPLADDER_UP = 36;
    const ACT_SHIPLADDER_DOWN = 37;
    const ACT_STRAFE_LEFT = 38;
    const ACT_STRAFE_RIGHT = 39;
    const ACT_ROLL_LEFT = 40;
    const ACT_ROLL_RIGHT = 41;
    const ACT_TURN_LEFT = 42;
    const ACT_TURN_RIGHT = 43;
    const ACT_CROUCH = 44;
    const ACT_CROUCHIDLE = 45;
    const ACT_STAND = 46;
    const ACT_USE = 47;
    const ACT_ALIEN_BURROW_IDLE = 48;
    const ACT_ALIEN_BURROW_OUT = 49;
    const ACT_SIGNAL1 = 50;
    const ACT_SIGNAL2 = 51;
    const ACT_SIGNAL3 = 52;
    const ACT_SIGNAL_ADVANCE = 53;
    const ACT_SIGNAL_FORWARD = 54;
    const ACT_SIGNAL_GROUP = 55;
    const ACT_SIGNAL_HALT = 56;
    const ACT_SIGNAL_LEFT = 57;
    const ACT_SIGNAL_RIGHT = 58;
    const ACT_SIGNAL_TAKECOVER = 59;
    const ACT_LOOKBACK_RIGHT = 60;
    const ACT_LOOKBACK_LEFT = 61;
    const ACT_COWER = 62;
    const ACT_SMALL_FLINCH = 63;
    const ACT_BIG_FLINCH = 64;
    const ACT_MELEE_ATTACK1 = 65;
    const ACT_MELEE_ATTACK2 = 66;
    const ACT_RELOAD = 67;
    const ACT_RELOAD_START = 68;
    const ACT_RELOAD_FINISH = 69;
    const ACT_RELOAD_LOW = 70;
    const ACT_ARM = 71;
    const ACT_DISARM = 72;
    const ACT_DROP_WEAPON = 73;
    const ACT_DROP_WEAPON_SHOTGUN = 74;
    const ACT_PICKUP_GROUND = 75;
    const ACT_PICKUP_RACK = 76;
    const ACT_IDLE_ANGRY = 77;
    const ACT_IDLE_RELAXED = 78;
    const ACT_IDLE_STIMULATED = 79;
    const ACT_IDLE_AGITATED = 80;
    const ACT_IDLE_STEALTH = 81;
    const ACT_IDLE_HURT = 82;
    const ACT_WALK_RELAXED = 83;
    const ACT_WALK_STIMULATED = 84;
    const ACT_WALK_AGITATED = 85;
    const ACT_WALK_STEALTH = 86;
    const ACT_RUN_RELAXED = 87;
    const ACT_RUN_STIMULATED = 88;
    const ACT_RUN_AGITATED = 89;
    const ACT_RUN_STEALTH = 90;
    const ACT_IDLE_AIM_RELAXED = 91;
    const ACT_IDLE_AIM_STIMULATED = 92;
    const ACT_IDLE_AIM_AGITATED = 93;
    const ACT_IDLE_AIM_STEALTH = 94;
    const ACT_WALK_AIM_RELAXED = 95;
    const ACT_WALK_AIM_STIMULATED = 96;
    const ACT_WALK_AIM_AGITATED = 97;
    const ACT_WALK_AIM_STEALTH = 98;
    const ACT_RUN_AIM_RELAXED = 99;
    const ACT_RUN_AIM_STIMULATED = 100;
    const ACT_RUN_AIM_AGITATED = 101;
    const ACT_RUN_AIM_STEALTH = 102;
    const ACT_CROUCHIDLE_STIMULATED = 103;
    const ACT_CROUCHIDLE_AIM_STIMULATED = 104;
    const ACT_CROUCHIDLE_AGITATED = 105;
    const ACT_WALK_HURT = 106;
    const ACT_RUN_HURT = 107;
    const ACT_SPECIAL_ATTACK1 = 108;
    const ACT_SPECIAL_ATTACK2 = 109;
    const ACT_COMBAT_IDLE = 110;
    const ACT_WALK_SCARED = 111;
    const ACT_RUN_SCARED = 112;
    const ACT_VICTORY_DANCE = 113;
    const ACT_DIE_HEADSHOT = 114;
    const ACT_DIE_CHESTSHOT = 115;
    const ACT_DIE_GUTSHOT = 116;
    const ACT_DIE_BACKSHOT = 117;
    const ACT_FLINCH_HEAD = 118;
    const ACT_FLINCH_CHEST = 119;
    const ACT_FLINCH_STOMACH = 120;
    const ACT_FLINCH_LEFTARM = 121;
    const ACT_FLINCH_RIGHTARM = 122;
    const ACT_FLINCH_LEFTLEG = 123;
    const ACT_FLINCH_RIGHTLEG = 124;
    const ACT_FLINCH_PHYSICS = 125;
    const ACT_FLINCH_HEAD_BACK = 126;
    const ACT_FLINCH_CHEST_BACK = 127;
    const ACT_FLINCH_STOMACH_BACK = 128;
    const ACT_FLINCH_CROUCH_FRONT = 129;
    const ACT_FLINCH_CROUCH_BACK = 130;
    const ACT_FLINCH_CROUCH_LEFT = 131;
    const ACT_FLINCH_CROUCH_RIGHT = 132;
    const ACT_IDLE_ON_FIRE = 133;
    const ACT_WALK_ON_FIRE = 134;
    const ACT_RUN_ON_FIRE = 135;
    const ACT_RAPPEL_LOOP = 136;
    const ACT_180_LEFT = 137;
    const ACT_180_RIGHT = 138;
    const ACT_90_LEFT = 139;
    const ACT_90_RIGHT = 140;
    const ACT_STEP_LEFT = 141;
    const ACT_STEP_RIGHT = 142;
    const ACT_STEP_BACK = 143;
    const ACT_STEP_FORE = 144;
    const ACT_GESTURE_RANGE_ATTACK1 = 145;
    const ACT_GESTURE_RANGE_ATTACK2 = 146;
    const ACT_GESTURE_MELEE_ATTACK1 = 147;
    const ACT_GESTURE_MELEE_ATTACK2 = 148;
    const ACT_GESTURE_RANGE_ATTACK1_LOW = 149;
    const ACT_GESTURE_RANGE_ATTACK2_LOW = 150;
    const ACT_MELEE_ATTACK_SWING_GESTURE = 151;
    const ACT_GESTURE_SMALL_FLINCH = 152;
    const ACT_GESTURE_BIG_FLINCH = 153;
    const ACT_GESTURE_FLINCH_BLAST = 154;
    const ACT_GESTURE_FLINCH_BLAST_SHOTGUN = 155;
    const ACT_GESTURE_FLINCH_BLAST_DAMAGED = 156;
    const ACT_GESTURE_FLINCH_BLAST_DAMAGED_SHOTGUN = 157;
    const ACT_GESTURE_FLINCH_HEAD = 158;
    const ACT_GESTURE_FLINCH_CHEST = 159;
    const ACT_GESTURE_FLINCH_STOMACH = 160;
    const ACT_GESTURE_FLINCH_LEFTARM = 161;
    const ACT_GESTURE_FLINCH_RIGHTARM = 162;
    const ACT_GESTURE_FLINCH_LEFTLEG = 163;
    const ACT_GESTURE_FLINCH_RIGHTLEG = 164;
    const ACT_GESTURE_TURN_LEFT = 165;
    const ACT_GESTURE_TURN_RIGHT = 166;
    const ACT_GESTURE_TURN_LEFT45 = 167;
    const ACT_GESTURE_TURN_RIGHT45 = 168;
    const ACT_GESTURE_TURN_LEFT90 = 169;
    const ACT_GESTURE_TURN_RIGHT90 = 170;
    const ACT_GESTURE_TURN_LEFT45_FLAT = 171;
    const ACT_GESTURE_TURN_RIGHT45_FLAT = 172;
    const ACT_GESTURE_TURN_LEFT90_FLAT = 173;
    const ACT_GESTURE_TURN_RIGHT90_FLAT = 174;
    const ACT_BARNACLE_HIT = 175;
    const ACT_BARNACLE_PULL = 176;
    const ACT_BARNACLE_CHOMP = 177;
    const ACT_BARNACLE_CHEW = 178;
    const ACT_DO_NOT_DISTURB = 179;
    const ACT_SPECIFIC_SEQUENCE = 180;
    const ACT_VM_DRAW = 181;
    const ACT_VM_HOLSTER = 182;
    const ACT_VM_IDLE = 183;
    const ACT_VM_FIDGET = 184;
    const ACT_VM_PULLBACK = 185;
    const ACT_VM_PULLBACK_HIGH = 186;
    const ACT_VM_PULLBACK_LOW = 187;
    const ACT_VM_THROW = 188;
    const ACT_VM_PULLPIN = 189;
    const ACT_VM_PRIMARYATTACK = 190;
    const ACT_VM_SECONDARYATTACK = 191;
    const ACT_VM_RELOAD = 192;
    const ACT_VM_DRYFIRE = 193;
    const ACT_VM_HITLEFT = 194;
    const ACT_VM_HITLEFT2 = 195;
    const ACT_VM_HITRIGHT = 196;
    const ACT_VM_HITRIGHT2 = 197;
    const ACT_VM_HITCENTER = 198;
    const ACT_VM_HITCENTER2 = 199;
    const ACT_VM_MISSLEFT = 200;
    const ACT_VM_MISSLEFT2 = 201;
    const ACT_VM_MISSRIGHT = 202;
    const ACT_VM_MISSRIGHT2 = 203;
    const ACT_VM_MISSCENTER = 204;
    const ACT_VM_MISSCENTER2 = 205;
    const ACT_VM_HAULBACK = 206;
    const ACT_VM_SWINGHARD = 207;
    const ACT_VM_SWINGMISS = 208;
    const ACT_VM_SWINGHIT = 209;
    const ACT_VM_IDLE_TO_LOWERED = 210;
    const ACT_VM_IDLE_LOWERED = 211;
    const ACT_VM_LOWERED_TO_IDLE = 212;
    const ACT_VM_RECOIL1 = 213;
    const ACT_VM_RECOIL2 = 214;
    const ACT_VM_RECOIL3 = 215;
    const ACT_VM_PICKUP = 216;
    const ACT_VM_RELEASE = 217;
    const ACT_VM_ATTACH_SILENCER = 218;
    const ACT_VM_DETACH_SILENCER = 219;
    const ACT_SLAM_STICKWALL_IDLE = 220;
    const ACT_SLAM_STICKWALL_ND_IDLE = 221;
    const ACT_SLAM_STICKWALL_ATTACH = 222;
    const ACT_SLAM_STICKWALL_ATTACH2 = 223;
    const ACT_SLAM_STICKWALL_ND_ATTACH = 224;
    const ACT_SLAM_STICKWALL_ND_ATTACH2 = 225;
    const ACT_SLAM_STICKWALL_DETONATE = 226;
    const ACT_SLAM_STICKWALL_DETONATOR_HOLSTER = 227;
    const ACT_SLAM_STICKWALL_DRAW = 228;
    const ACT_SLAM_STICKWALL_ND_DRAW = 229;
    const ACT_SLAM_STICKWALL_TO_THROW = 230;
    const ACT_SLAM_STICKWALL_TO_THROW_ND = 231;
    const ACT_SLAM_STICKWALL_TO_TRIPMINE_ND = 232;
    const ACT_SLAM_THROW_IDLE = 233;
    const ACT_SLAM_THROW_ND_IDLE = 234;
    const ACT_SLAM_THROW_THROW = 235;
    const ACT_SLAM_THROW_THROW2 = 236;
    const ACT_SLAM_THROW_THROW_ND = 237;
    const ACT_SLAM_THROW_THROW_ND2 = 238;
    const ACT_SLAM_THROW_DRAW = 239;
    const ACT_SLAM_THROW_ND_DRAW = 240;
    const ACT_SLAM_THROW_TO_STICKWALL = 241;
    const ACT_SLAM_THROW_TO_STICKWALL_ND = 242;
    const ACT_SLAM_THROW_DETONATE = 243;
    const ACT_SLAM_THROW_DETONATOR_HOLSTER = 244;
    const ACT_SLAM_THROW_TO_TRIPMINE_ND = 245;
    const ACT_SLAM_TRIPMINE_IDLE = 246;
    const ACT_SLAM_TRIPMINE_DRAW = 247;
    const ACT_SLAM_TRIPMINE_ATTACH = 248;
    const ACT_SLAM_TRIPMINE_ATTACH2 = 249;
    const ACT_SLAM_TRIPMINE_TO_STICKWALL_ND = 250;
    const ACT_SLAM_TRIPMINE_TO_THROW_ND = 251;
    const ACT_SLAM_DETONATOR_IDLE = 252;
    const ACT_SLAM_DETONATOR_DRAW = 253;
    const ACT_SLAM_DETONATOR_DETONATE = 254;
    const ACT_SLAM_DETONATOR_HOLSTER = 255;
    const ACT_SLAM_DETONATOR_STICKWALL_DRAW = 256;
    const ACT_SLAM_DETONATOR_THROW_DRAW = 257;
    const ACT_SHOTGUN_RELOAD_START = 258;
    const ACT_SHOTGUN_RELOAD_FINISH = 259;
    const ACT_SHOTGUN_PUMP = 260;
    const ACT_SMG2_IDLE2 = 261;
    const ACT_SMG2_FIRE2 = 262;
    const ACT_SMG2_DRAW2 = 263;
    const ACT_SMG2_RELOAD2 = 264;
    const ACT_SMG2_DRYFIRE2 = 265;
    const ACT_SMG2_TOAUTO = 266;
    const ACT_SMG2_TOBURST = 267;
    const ACT_PHYSCANNON_UPGRADE = 268;
    const ACT_RANGE_ATTACK_AR1 = 269;
    const ACT_RANGE_ATTACK_AR2 = 270;
    const ACT_RANGE_ATTACK_AR2_LOW = 271;
    const ACT_RANGE_ATTACK_AR2_GRENADE = 272;
    const ACT_RANGE_ATTACK_HMG1 = 273;
    const ACT_RANGE_ATTACK_ML = 274;
    const ACT_RANGE_ATTACK_SMG1 = 275;
    const ACT_RANGE_ATTACK_SMG1_LOW = 276;
    const ACT_RANGE_ATTACK_SMG2 = 277;
    const ACT_RANGE_ATTACK_SHOTGUN = 278;
    const ACT_RANGE_ATTACK_SHOTGUN_LOW = 279;
    const ACT_RANGE_ATTACK_PISTOL = 280;
    const ACT_RANGE_ATTACK_PISTOL_LOW = 281;
    const ACT_RANGE_ATTACK_SLAM = 282;
    const ACT_RANGE_ATTACK_TRIPWIRE = 283;
    const ACT_RANGE_ATTACK_THROW = 284;
    const ACT_RANGE_ATTACK_SNIPER_RIFLE = 285;
    const ACT_RANGE_ATTACK_RPG = 286;
    const ACT_MELEE_ATTACK_SWING = 287;
    const ACT_RANGE_AIM_LOW = 288;
    const ACT_RANGE_AIM_SMG1_LOW = 289;
    const ACT_RANGE_AIM_PISTOL_LOW = 290;
    const ACT_RANGE_AIM_AR2_LOW = 291;
    const ACT_COVER_PISTOL_LOW = 292;
    const ACT_COVER_SMG1_LOW = 293;
    const ACT_GESTURE_RANGE_ATTACK_AR1 = 294;
    const ACT_GESTURE_RANGE_ATTACK_AR2 = 295;
    const ACT_GESTURE_RANGE_ATTACK_AR2_GRENADE = 296;
    const ACT_GESTURE_RANGE_ATTACK_HMG1 = 297;
    const ACT_GESTURE_RANGE_ATTACK_ML = 298;
    const ACT_GESTURE_RANGE_ATTACK_SMG1 = 299;
    const ACT_GESTURE_RANGE_ATTACK_SMG1_LOW = 300;
    const ACT_GESTURE_RANGE_ATTACK_SMG2 = 301;
    const ACT_GESTURE_RANGE_ATTACK_SHOTGUN = 302;
    const ACT_GESTURE_RANGE_ATTACK_PISTOL = 303;
    const ACT_GESTURE_RANGE_ATTACK_PISTOL_LOW = 304;
    const ACT_GESTURE_RANGE_ATTACK_SLAM = 305;
    const ACT_GESTURE_RANGE_ATTACK_TRIPWIRE = 306;
    const ACT_GESTURE_RANGE_ATTACK_THROW = 307;
    const ACT_GESTURE_RANGE_ATTACK_SNIPER_RIFLE = 308;
    const ACT_GESTURE_MELEE_ATTACK_SWING = 309;
    const ACT_IDLE_RIFLE = 310;
    const ACT_IDLE_SMG1 = 311;
    const ACT_IDLE_ANGRY_SMG1 = 312;
    const ACT_IDLE_PISTOL = 313;
    const ACT_IDLE_ANGRY_PISTOL = 314;
    const ACT_IDLE_ANGRY_SHOTGUN = 315;
    const ACT_IDLE_STEALTH_PISTOL = 316;
    const ACT_IDLE_PACKAGE = 317;
    const ACT_WALK_PACKAGE = 318;
    const ACT_IDLE_SUITCASE = 319;
    const ACT_WALK_SUITCASE = 320;
    const ACT_IDLE_SMG1_RELAXED = 321;
    const ACT_IDLE_SMG1_STIMULATED = 322;
    const ACT_WALK_RIFLE_RELAXED = 323;
    const ACT_RUN_RIFLE_RELAXED = 324;
    const ACT_WALK_RIFLE_STIMULATED = 325;
    const ACT_RUN_RIFLE_STIMULATED = 326;
    const ACT_IDLE_AIM_RIFLE_STIMULATED = 327;
    const ACT_WALK_AIM_RIFLE_STIMULATED = 328;
    const ACT_RUN_AIM_RIFLE_STIMULATED = 329;
    const ACT_IDLE_SHOTGUN_RELAXED = 330;
    const ACT_IDLE_SHOTGUN_STIMULATED = 331;
    const ACT_IDLE_SHOTGUN_AGITATED = 332;
    const ACT_WALK_ANGRY = 333;
    const ACT_POLICE_HARASS1 = 334;
    const ACT_POLICE_HARASS2 = 335;
    const ACT_IDLE_MANNEDGUN = 336;
    const ACT_IDLE_MELEE = 337;
    const ACT_IDLE_ANGRY_MELEE = 338;
    const ACT_IDLE_RPG_RELAXED = 339;
    const ACT_IDLE_RPG = 340;
    const ACT_IDLE_ANGRY_RPG = 341;
    const ACT_COVER_LOW_RPG = 342;
    const ACT_WALK_RPG = 343;
    const ACT_RUN_RPG = 344;
    const ACT_WALK_CROUCH_RPG = 345;
    const ACT_RUN_CROUCH_RPG = 346;
    const ACT_WALK_RPG_RELAXED = 347;
    const ACT_RUN_RPG_RELAXED = 348;
    const ACT_WALK_RIFLE = 349;
    const ACT_WALK_AIM_RIFLE = 350;
    const ACT_WALK_CROUCH_RIFLE = 351;
    const ACT_WALK_CROUCH_AIM_RIFLE = 352;
    const ACT_RUN_RIFLE = 353;
    const ACT_RUN_AIM_RIFLE = 354;
    const ACT_RUN_CROUCH_RIFLE = 355;
    const ACT_RUN_CROUCH_AIM_RIFLE = 356;
    const ACT_RUN_STEALTH_PISTOL = 357;
    const ACT_WALK_AIM_SHOTGUN = 358;
    const ACT_RUN_AIM_SHOTGUN = 359;
    const ACT_WALK_PISTOL = 360;
    const ACT_RUN_PISTOL = 361;
    const ACT_WALK_AIM_PISTOL = 362;
    const ACT_RUN_AIM_PISTOL = 363;
    const ACT_WALK_STEALTH_PISTOL = 364;
    const ACT_WALK_AIM_STEALTH_PISTOL = 365;
    const ACT_RUN_AIM_STEALTH_PISTOL = 366;
    const ACT_RELOAD_PISTOL = 367;
    const ACT_RELOAD_PISTOL_LOW = 368;
    const ACT_RELOAD_SMG1 = 369;
    const ACT_RELOAD_SMG1_LOW = 370;
    const ACT_RELOAD_SHOTGUN = 371;
    const ACT_RELOAD_SHOTGUN_LOW = 372;
    const ACT_GESTURE_RELOAD = 373;
    const ACT_GESTURE_RELOAD_PISTOL = 374;
    const ACT_GESTURE_RELOAD_SMG1 = 375;
    const ACT_GESTURE_RELOAD_SHOTGUN = 376;
    const ACT_BUSY_LEAN_LEFT = 377;
    const ACT_BUSY_LEAN_LEFT_ENTRY = 378;
    const ACT_BUSY_LEAN_LEFT_EXIT = 379;
    const ACT_BUSY_LEAN_BACK = 380;
    const ACT_BUSY_LEAN_BACK_ENTRY = 381;
    const ACT_BUSY_LEAN_BACK_EXIT = 382;
    const ACT_BUSY_SIT_GROUND = 383;
    const ACT_BUSY_SIT_GROUND_ENTRY = 384;
    const ACT_BUSY_SIT_GROUND_EXIT = 385;
    const ACT_BUSY_SIT_CHAIR = 386;
    const ACT_BUSY_SIT_CHAIR_ENTRY = 387;
    const ACT_BUSY_SIT_CHAIR_EXIT = 388;
    const ACT_BUSY_STAND = 389;
    const ACT_BUSY_QUEUE = 390;
    const ACT_DUCK_DODGE = 391;
    const ACT_DIE_BARNACLE_SWALLOW = 392;
    const ACT_GESTURE_BARNACLE_STRANGLE = 393;
    const ACT_PHYSCANNON_DETACH = 394;
    const ACT_PHYSCANNON_ANIMATE = 395;
    const ACT_PHYSCANNON_ANIMATE_PRE = 396;
    const ACT_PHYSCANNON_ANIMATE_POST = 397;
    const ACT_DIE_FRONTSIDE = 398;
    const ACT_DIE_RIGHTSIDE = 399;
    const ACT_DIE_BACKSIDE = 400;
    const ACT_DIE_LEFTSIDE = 401;
    const ACT_OPEN_DOOR = 402;
    const ACT_DI_ALYX_ZOMBIE_MELEE = 403;
    const ACT_DI_ALYX_ZOMBIE_TORSO_MELEE = 404;
    const ACT_DI_ALYX_HEADCRAB_MELEE = 405;
    const ACT_DI_ALYX_ANTLION = 406;
    const ACT_DI_ALYX_ZOMBIE_SHOTGUN64 = 407;
    const ACT_DI_ALYX_ZOMBIE_SHOTGUN26 = 408;
    const ACT_READINESS_RELAXED_TO_STIMULATED = 409;
    const ACT_READINESS_RELAXED_TO_STIMULATED_WALK = 410;
    const ACT_READINESS_AGITATED_TO_STIMULATED = 411;
    const ACT_READINESS_STIMULATED_TO_RELAXED = 412;
    const ACT_READINESS_PISTOL_RELAXED_TO_STIMULATED = 413;
    const ACT_READINESS_PISTOL_RELAXED_TO_STIMULATED_WALK = 414;
    const ACT_READINESS_PISTOL_AGITATED_TO_STIMULATED = 415;
    const ACT_READINESS_PISTOL_STIMULATED_TO_RELAXED = 416;
    const ACT_IDLE_CARRY = 417;
    const ACT_WALK_CARRY = 418;
    const ACT_DOTA_IDLE = 419;
    const ACT_DOTA_IDLE_RARE = 421;
    const ACT_DOTA_RUN = 422;
    const ACT_DOTA_ATTACK = 424;
    const ACT_DOTA_ATTACK2 = 425;
    const ACT_DOTA_ATTACK_EVENT = 426;
    const ACT_DOTA_DIE = 427;
    const ACT_DOTA_FLINCH = 428;
    const ACT_DOTA_FLAIL = 429;
    const ACT_DOTA_DISABLED = 430;
    const ACT_DOTA_CAST_ABILITY_1 = 431;
    const ACT_DOTA_CAST_ABILITY_2 = 432;
    const ACT_DOTA_CAST_ABILITY_3 = 433;
    const ACT_DOTA_CAST_ABILITY_4 = 434;
    const ACT_DOTA_CAST_ABILITY_5 = 435;
    const ACT_DOTA_CAST_ABILITY_6 = 436;
    const ACT_DOTA_OVERRIDE_ABILITY_1 = 437;
    const ACT_DOTA_OVERRIDE_ABILITY_2 = 438;
    const ACT_DOTA_OVERRIDE_ABILITY_3 = 439;
    const ACT_DOTA_OVERRIDE_ABILITY_4 = 440;
    const ACT_DOTA_CHANNEL_ABILITY_1 = 441;
    const ACT_DOTA_CHANNEL_ABILITY_2 = 442;
    const ACT_DOTA_CHANNEL_ABILITY_3 = 443;
    const ACT_DOTA_CHANNEL_ABILITY_4 = 444;
    const ACT_DOTA_CHANNEL_ABILITY_5 = 445;
    const ACT_DOTA_CHANNEL_ABILITY_6 = 446;
    const ACT_DOTA_CHANNEL_END_ABILITY_1 = 447;
    const ACT_DOTA_CHANNEL_END_ABILITY_2 = 448;
    const ACT_DOTA_CHANNEL_END_ABILITY_3 = 449;
    const ACT_DOTA_CHANNEL_END_ABILITY_4 = 450;
    const ACT_DOTA_CHANNEL_END_ABILITY_5 = 451;
    const ACT_DOTA_CHANNEL_END_ABILITY_6 = 452;
    const ACT_DOTA_CONSTANT_LAYER = 453;
    const ACT_DOTA_CAPTURE = 454;
    const ACT_DOTA_SPAWN = 455;
    const ACT_DOTA_KILLTAUNT = 456;
    const ACT_DOTA_TAUNT = 457;
    const ACT_DOTA_THIRST = 458;
    const ACT_DOTA_CAST_DRAGONBREATH = 459;
    const ACT_DOTA_ECHO_SLAM = 460;
    const ACT_DOTA_CAST_ABILITY_1_END = 461;
    const ACT_DOTA_CAST_ABILITY_2_END = 462;
    const ACT_DOTA_CAST_ABILITY_3_END = 463;
    const ACT_DOTA_CAST_ABILITY_4_END = 464;
    const ACT_MIRANA_LEAP_END = 465;
    const ACT_WAVEFORM_START = 466;
    const ACT_WAVEFORM_END = 467;
    const ACT_DOTA_CAST_ABILITY_ROT = 468;
    const ACT_DOTA_DIE_SPECIAL = 469;
    const ACT_DOTA_RATTLETRAP_BATTERYASSAULT = 470;
    const ACT_DOTA_RATTLETRAP_POWERCOGS = 471;
    const ACT_DOTA_RATTLETRAP_HOOKSHOT_START = 472;
    const ACT_DOTA_RATTLETRAP_HOOKSHOT_LOOP = 473;
    const ACT_DOTA_RATTLETRAP_HOOKSHOT_END = 474;
    const ACT_STORM_SPIRIT_OVERLOAD_RUN_OVERRIDE = 475;
    const ACT_DOTA_TINKER_REARM1 = 476;
    const ACT_DOTA_TINKER_REARM2 = 477;
    const ACT_DOTA_TINKER_REARM3 = 478;
    const ACT_TINY_AVALANCHE = 479;
    const ACT_TINY_TOSS = 480;
    const ACT_TINY_GROWL = 481;
    const ACT_DOTA_WEAVERBUG_ATTACH = 482;
    const ACT_DOTA_CAST_WILD_AXES_END = 483;
    const ACT_DOTA_CAST_LIFE_BREAK_START = 484;
    const ACT_DOTA_CAST_LIFE_BREAK_END = 485;
    const ACT_DOTA_NIGHTSTALKER_TRANSITION = 486;
    const ACT_DOTA_LIFESTEALER_RAGE = 487;
    const ACT_DOTA_LIFESTEALER_OPEN_WOUNDS = 488;
    const ACT_DOTA_SAND_KING_BURROW_IN = 489;
    const ACT_DOTA_SAND_KING_BURROW_OUT = 490;
    const ACT_DOTA_EARTHSHAKER_TOTEM_ATTACK = 491;
    const ACT_DOTA_WHEEL_LAYER = 492;
    const ACT_DOTA_ALCHEMIST_CHEMICAL_RAGE_START = 493;
    const ACT_DOTA_ALCHEMIST_CONCOCTION = 494;
    const ACT_DOTA_JAKIRO_LIQUIDFIRE_START = 495;
    const ACT_DOTA_JAKIRO_LIQUIDFIRE_LOOP = 496;
    const ACT_DOTA_LIFESTEALER_INFEST = 497;
    const ACT_DOTA_LIFESTEALER_INFEST_END = 498;
    const ACT_DOTA_LASSO_LOOP = 499;
    const ACT_DOTA_ALCHEMIST_CONCOCTION_THROW = 500;
    const ACT_DOTA_ALCHEMIST_CHEMICAL_RAGE_END = 501;
    const ACT_DOTA_CAST_COLD_SNAP = 502;
    const ACT_DOTA_CAST_GHOST_WALK = 503;
    const ACT_DOTA_CAST_TORNADO = 504;
    const ACT_DOTA_CAST_EMP = 505;
    const ACT_DOTA_CAST_ALACRITY = 506;
    const ACT_DOTA_CAST_CHAOS_METEOR = 507;
    const ACT_DOTA_CAST_SUN_STRIKE = 508;
    const ACT_DOTA_CAST_FORGE_SPIRIT = 509;
    const ACT_DOTA_CAST_ICE_WALL = 510;
    const ACT_DOTA_CAST_DEAFENING_BLAST = 511;
    const ACT_DOTA_VICTORY = 512;
    const ACT_DOTA_DEFEAT = 513;
    const ACT_DOTA_SPIRIT_BREAKER_CHARGE_POSE = 514;
    const ACT_DOTA_SPIRIT_BREAKER_CHARGE_END = 515;
    const ACT_DOTA_TELEPORT = 516;
    const ACT_DOTA_TELEPORT_END = 517;
  }
}
