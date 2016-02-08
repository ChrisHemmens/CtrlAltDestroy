   function Hero(){
      this.name = 'Parent';
      this.level = 0;
      this.specialDpa = 0;
      this.attackSpeed = 0;
      this.movementSpeed = 0;
      this.range = 0;
      this.trainingTimeSeconds = 0;
      this.dpa = 0;
      this.dps = 0;
      this.hp = 0;
      this.recoveredHp = 0;
      this.summonedTroops = 0;
      this.summonedTroopsLevel = 0;
      this.imagePath = '';
      this.attackAir = false;
      this.boostFactor = 4;
      this.boosted = false;
      this.boostDuration = 7200;
      this.maxLevel = 0;

      this.calculateDpa = function(){
         this.dpa = Math.round(this.dps * this.attackSpeed);
      }

      this.calculateHp = function(){
         return this.hp + this.recoveredHp;
      }

      this.calculateTrainingTime = function(){
         var trainingTimeSeconds = this.boosted == true ?  (this.trainingTimeSeconds / this.boostFactor) : this.trainingTimeSeconds
         return trainingTimeSeconds;
      }
      //cookie related functions
      this.setArmyCookie = function(cookieName, cookieValue){
         var fullCookieName = this.name + '_' + cookieName;
         setCookie(fullCookieName,cookieValue);
      }

      this.retrieveArmyCookie = function(cookieType, defaultValue){
         var cookieName = this.name + '_' + cookieType;
         var cookieLevel = getCookie(cookieName);
         if(isNaN(cookieLevel)){
            return defaultValue;
         }else{
            return Number(cookieLevel);
         }
      }
   }

   function BurgerKingHero(){
      Hero.call(this);
      //static attributes
      this.name = 'BurgerKing';
      this.attackSpeed = 1.2;
      this.movementSpeed = 16;
      this.range = 1;
      this.imagePath = 'images/burgerKing';
      this.maxLevel = 40;

      //level based attributes
      this.setLevel = function(level){
         this.level = level;
         this.setArmyCookie('level',level);
         switch(level){
            case 1:
               this.dps = 120;
               this.hp = 1700;
               this.trainingTimeSeconds = 1800;
               this.summonedTroops = 0;
               this.recoveredHp = 0;
               break;
            case 2:
               this.dps = 122;
               this.hp = 1742;
               this.trainingTimeSeconds = 1920;
               this.summonedTroops = 0;
               this.recoveredHp = 0;
               break;
            case 3:
               this.dps = 124;
               this.hp = 1786;
               this.trainingTimeSeconds = 2040;
               this.summonedTroops = 0;
               this.recoveredHp = 0;
               break;
            case 4:
               this.dps = 127;
               this.hp = 1830;
               this.trainingTimeSeconds = 2160;
               this.summonedTroops = 0;
               this.recoveredHp = 0;
               break;
            case 5:
               this.dps = 129;
               this.hp = 1876;
               this.trainingTimeSeconds = 2280;
               this.summonedTroops = 6;
               this.recoveredHp = 500;
               break;
            case 6:
               this.dps = 132;
               this.hp = 1923;
               this.trainingTimeSeconds = 2400;
               this.summonedTroops = 6;
               this.recoveredHp = 500;
               break;
            case 7:
               this.dps = 135;
               this.hp = 1971;
               this.trainingTimeSeconds = 2520;
               this.summonedTroops = 6;
               this.recoveredHp = 500;
               break;
            case 8:
               this.dps = 137;
               this.hp = 2020;
               this.trainingTimeSeconds = 2640;
               this.summonedTroops = 6;
               this.recoveredHp = 500;
               break;
            case 9:
               this.dps = 140;
               this.hp = 2071;
               this.trainingTimeSeconds = 2760;
               this.summonedTroops = 6;
               this.recoveredHp = 500;
               break;
            case 10:
               this.dps = 143;
               this.hp = 2123;
               this.trainingTimeSeconds = 2880;
               this.summonedTroops = 8;
               this.recoveredHp = 620;
               break;
            case 11:
               this.dps = 146;
               this.hp = 2176;
               this.trainingTimeSeconds = 3000;
               this.summonedTroops = 8;
               this.recoveredHp = 620;
               break;
            case 12:
               this.dps = 149;
               this.hp = 2230;
               this.trainingTimeSeconds = 3120;
               this.summonedTroops = 8;
               this.recoveredHp = 620;
               break;
            case 13:
               this.dps = 152;
               this.hp = 2286;
               this.trainingTimeSeconds = 3240;
               this.summonedTroops = 8;
               this.recoveredHp = 620;
               break;
            case 14:
               this.dps = 155;
               this.hp = 2343;
               this.trainingTimeSeconds = 3360;
               this.summonedTroops = 8;
               this.recoveredHp = 620;
               break;
            case 15:
               this.dps = 158;
               this.hp = 2402;
               this.trainingTimeSeconds = 3480;
               this.summonedTroops = 10;
               this.recoveredHp = 752;
               break;
            case 16:
               this.dps = 161;
               this.hp = 2462;
               this.trainingTimeSeconds = 3600;
               this.summonedTroops = 10;
               this.recoveredHp = 752;
               break;
            case 17:
               this.dps = 164;
               this.hp = 2523;
               this.trainingTimeSeconds = 3720;
               this.summonedTroops = 10;
               this.recoveredHp = 752;
               break;
            case 18:
               this.dps = 168;
               this.hp = 2586;
               this.trainingTimeSeconds = 3840;
               this.summonedTroops = 10;
               this.recoveredHp = 752;
               break;
            case 19:
               this.dps = 171;
               this.hp = 2651;
               this.trainingTimeSeconds = 3960;
               this.summonedTroops = 10;
               this.recoveredHp = 752;
               break;
            case 20:
               this.dps = 174;
               this.hp = 2717;
               this.trainingTimeSeconds = 4080;
               this.summonedTroops = 12;
               this.recoveredHp = 899;
               break;
            case 21:
               this.dps = 178;
               this.hp = 2785;
               this.trainingTimeSeconds = 4200;
               this.summonedTroops = 12;
               this.recoveredHp = 899;
               break;
            case 22:
               this.dps = 181;
               this.hp = 2855;
               this.trainingTimeSeconds = 4320;
               this.summonedTroops = 12;
               this.recoveredHp = 899;
               break;
            case 23:
               this.dps = 185;
               this.hp = 2926;
               this.trainingTimeSeconds = 4440;
               this.summonedTroops = 12;
               this.recoveredHp = 899;
               break;
            case 24:
               this.dps = 189;
               this.hp = 2999;
               this.trainingTimeSeconds = 4560;
               this.summonedTroops = 12;
               this.recoveredHp = 899;
               break;
            case 25:
               this.dps = 193;
               this.hp = 3074;
               this.trainingTimeSeconds = 4680;
               this.summonedTroops = 14;
               this.recoveredHp = 1063;
               break;
            case 26:
               this.dps = 196;
               this.hp = 3151;
               this.trainingTimeSeconds = 4800;
               this.summonedTroops = 14;
               this.recoveredHp = 1063;
               break;
            case 27:
               this.dps = 200;
               this.hp = 3230;
               this.trainingTimeSeconds = 4920;
               this.summonedTroops = 14;
               this.recoveredHp = 1063;
               break;
            case 28:
               this.dps = 204;
               this.hp = 3311;
               this.trainingTimeSeconds = 5040;
               this.summonedTroops = 14;
               this.recoveredHp = 1063;
               break;
            case 29:
               this.dps = 208;
               this.hp = 3394;
               this.trainingTimeSeconds = 5160;
               this.summonedTroops = 14;
               this.recoveredHp = 1063;
               break;
            case 30:
               this.dps = 213;
               this.hp = 3478;
               this.trainingTimeSeconds = 5280;
               this.summonedTroops = 16;
               this.recoveredHp = 1247;
               break;
            case 31:
               this.dps = 217;
               this.hp = 3565;
               this.trainingTimeSeconds = 5400;
               this.summonedTroops = 16;
               this.recoveredHp = 1247;
               break;
            case 32:
               this.dps = 221;
               this.hp = 3655;
               this.trainingTimeSeconds = 5520;
               this.summonedTroops = 16;
               this.recoveredHp = 1247;
               break;
            case 33:
               this.dps = 226;
               this.hp = 3746;
               this.trainingTimeSeconds = 5640;
               this.summonedTroops = 16;
               this.recoveredHp = 1247;
               break;
            case 34:
               this.dps = 230;
               this.hp = 3840;
               this.trainingTimeSeconds = 5760;
               this.summonedTroops = 16;
               this.recoveredHp = 1247;
               break;
            case 35:
               this.dps = 235;
               this.hp = 3936;
               this.trainingTimeSeconds = 5880;
               this.summonedTroops = 18;
               this.recoveredHp = 1455;
               break;
            case 36:
               this.dps = 239;
               this.hp = 4034;
               this.trainingTimeSeconds = 6000;
               this.summonedTroops = 18;
               this.recoveredHp = 1455;
               break;
            case 37:
               this.dps = 244;
               this.hp = 4135;
               this.trainingTimeSeconds = 6120;
               this.summonedTroops = 18;
               this.recoveredHp = 1455;
               break;
            case 38:
               this.dps = 249;
               this.hp = 4238;
               this.trainingTimeSeconds = 6240;
               this.summonedTroops = 18;
               this.recoveredHp = 1455;
               break;
            case 39:
               this.dps = 254;
               this.hp = 4344;
               this.trainingTimeSeconds = 6360;
               this.summonedTroops = 18;
               this.recoveredHp = 1455;
               break;
            case 40:
               this.dps = 259;
               this.hp = 4453;
               this.trainingTimeSeconds = 6480;
               this.summonedTroops = 20;
               this.recoveredHp = 1692;
               break;
            default:
               this.dps = 0;
               this.hp = 0;
               this.trainingTimeSeconds = 0;
               this.summonedTroops = 0;
               this.recoveredHp = 0;
               break;
         }
         this.calculateDpa();
      }
   }

   function ArcherQueenHero(){ 
      Hero.call(this);
      //static attributes
      this.name = 'ArcherQueen';
      this.attackSpeed = .75;
      this.movementSpeed = 24;
      this.range = 5;
      this.attackAir = true;
      this.imagePath = 'images/archerQueen';
      this.maxLevel = 40;

      //level based attributes
      this.setLevel = function(level){
         this.level = level;
         this.setArmyCookie('level',level);
         switch(level){
            case 1:
               this.dps = 160;
               this.hp = 725;
               this.trainingTimeSeconds = 1800;
               this.summonedTroops = 0;
               this.recoveredHp = 0;
               break;
            case 2:
               this.dps = 164;
               this.hp = 740;
               this.trainingTimeSeconds = 1920;
               this.summonedTroops = 0;
               this.recoveredHp = 0;
               break;
            case 3:
               this.dps = 168;
               this.hp = 755;
               this.trainingTimeSeconds = 2040;
               this.summonedTroops = 0;
               this.recoveredHp = 0;
               break;
            case 4:
               this.dps = 172;
               this.hp = 771;
               this.trainingTimeSeconds = 2160;
               this.summonedTroops = 0;
               this.recoveredHp = 0;
               break;
            case 5:
               this.dps = 176;
               this.hp = 787;
               this.trainingTimeSeconds = 2280;
               this.summonedTroops = 5;
               this.recoveredHp = 150;
               break;
            case 6:
               this.dps = 181;
               this.hp = 804;
               this.trainingTimeSeconds = 2400;
               this.summonedTroops = 5;
               this.recoveredHp = 150;
               break;
            case 7:
               this.dps = 185;
               this.hp = 821;
               this.trainingTimeSeconds = 2520;
               this.summonedTroops = 5;
               this.recoveredHp = 150;
               break;
            case 8:
               this.dps = 190;
               this.hp = 838;
               this.trainingTimeSeconds = 2640;
               this.summonedTroops = 5;
               this.recoveredHp = 150;
               break;
            case 9:
               this.dps = 194;
               this.hp = 856;
               this.trainingTimeSeconds = 2760;
               this.summonedTroops = 5;
               this.recoveredHp = 150;
               break;
            case 10:
               this.dps = 199;
               this.hp = 874;
               this.trainingTimeSeconds = 2880;
               this.summonedTroops = 6;
               this.recoveredHp = 175;
               break;
            case 11:
               this.dps = 204;
               this.hp = 892;
               this.trainingTimeSeconds = 3000;
               this.summonedTroops = 6;
               this.recoveredHp = 175;
               break;
            case 12:
               this.dps = 209;
               this.hp = 911;
               this.trainingTimeSeconds = 3120;
               this.summonedTroops = 6;
               this.recoveredHp = 175;
               break;
            case 13:
               this.dps = 215;
               this.hp = 930;
               this.trainingTimeSeconds = 3240;
               this.summonedTroops = 6;
               this.recoveredHp = 175;
               break;
            case 14:
               this.dps = 220;
               this.hp = 949;
               this.trainingTimeSeconds = 3360;
               this.summonedTroops = 6;
               this.recoveredHp = 175;
               break;
            case 15:
               this.dps = 226;
               this.hp = 969;
               this.trainingTimeSeconds = 3480;
               this.summonedTroops = 7;
               this.recoveredHp = 200;
               break;
            case 16:
               this.dps = 231;
               this.hp = 990;
               this.trainingTimeSeconds = 3600;
               this.summonedTroops = 7;
               this.recoveredHp = 200;
               break;
            case 17:
               this.dps = 237;
               this.hp = 1010;
               this.trainingTimeSeconds = 3720;
               this.summonedTroops = 7;
               this.recoveredHp = 200;
               break;
            case 18:
               this.dps = 243;
               this.hp = 1032;
               this.trainingTimeSeconds = 3840;
               this.summonedTroops = 7;
               this.recoveredHp = 200;
               break;
            case 19:
               this.dps = 249;
               this.hp = 1053;
               this.trainingTimeSeconds = 3960;
               this.summonedTroops = 7;
               this.recoveredHp = 200;
               break;
            case 20:
               this.dps = 255;
               this.hp = 1076;
               this.trainingTimeSeconds = 4080;
               this.summonedTroops = 8;
               this.recoveredHp = 225;
               break;
            case 21:
               this.dps = 262;
               this.hp = 1098;
               this.trainingTimeSeconds = 4200;
               this.summonedTroops = 8;
               this.recoveredHp = 225;
               break;
            case 22:
               this.dps = 268;
               this.hp = 1121;
               this.trainingTimeSeconds = 4320;
               this.summonedTroops = 8;
               this.recoveredHp = 225;
               break;
            case 23:
               this.dps = 275;
               this.hp = 1145;
               this.trainingTimeSeconds = 4440;
               this.summonedTroops = 8;
               this.recoveredHp = 225;
               break;
            case 24:
               this.dps = 282;
               this.hp = 1169;
               this.trainingTimeSeconds = 4560;
               this.summonedTroops = 8;
               this.recoveredHp = 225;
               break;
            case 25:
               this.dps = 289;
               this.hp = 1193;
               this.trainingTimeSeconds = 4680;
               this.summonedTroops = 9;
               this.recoveredHp = 250;
               break;
            case 26:
               this.dps = 296;
               this.hp = 1218;
               this.trainingTimeSeconds = 4800;
               this.summonedTroops = 9;
               this.recoveredHp = 250;
               break;
            case 27:
               this.dps = 304;
               this.hp = 1244;
               this.trainingTimeSeconds = 4920;
               this.summonedTroops = 9;
               this.recoveredHp = 250;
               break;
            case 28:
               this.dps = 311;
               this.hp = 1270;
               this.trainingTimeSeconds = 5040;
               this.summonedTroops = 9;
               this.recoveredHp = 250;
               break;
            case 29:
               this.dps = 319;
               this.hp = 1297;
               this.trainingTimeSeconds = 5160;
               this.summonedTroops = 9;
               this.recoveredHp = 250;
               break;
            case 30:
               this.dps = 327;
               this.hp = 1324;
               this.trainingTimeSeconds = 5280;
               this.summonedTroops = 10;
               this.recoveredHp = 275;
               break;
            case 31:
               this.dps = 335;
               this.hp = 1352;
               this.trainingTimeSeconds = 5400;
               this.summonedTroops = 10;
               this.recoveredHp = 275;
               break;
            case 32:
               this.dps = 344;
               this.hp = 1380;
               this.trainingTimeSeconds = 5520;
               this.summonedTroops = 10;
               this.recoveredHp = 275;
               break;
            case 33:
               this.dps = 352;
               this.hp = 1409;
               this.trainingTimeSeconds = 5640;
               this.summonedTroops = 10;
               this.recoveredHp = 275;
               break;
            case 34:
               this.dps = 361;
               this.hp = 1439;
               this.trainingTimeSeconds = 5760;
               this.summonedTroops = 10;
               this.recoveredHp = 275;
               break;
            case 35:
               this.dps = 370;
               this.hp = 1469;
               this.trainingTimeSeconds = 5880;
               this.summonedTroops = 11;
               this.recoveredHp = 300;
               break;
            case 36:
               this.dps = 379;
               this.hp = 1500;
               this.trainingTimeSeconds = 6000;
               this.summonedTroops = 11;
               this.recoveredHp = 300;
               break;
            case 37:
               this.dps = 389;
               this.hp = 1532;
               this.trainingTimeSeconds = 6120;
               this.summonedTroops = 11;
               this.recoveredHp = 300;
               break;
            case 38:
               this.dps = 398;
               this.hp = 1564;
               this.trainingTimeSeconds = 6240;
               this.summonedTroops = 11;
               this.recoveredHp = 300;
               break;
            case 39:
               this.dps = 408;
               this.hp = 1597;
               this.trainingTimeSeconds = 6360;
               this.summonedTroops = 11;
               this.recoveredHp = 300;
               break;
            case 40:
               this.dps = 419;
               this.hp = 1630;
               this.trainingTimeSeconds = 6480;
               this.summonedTroops = 12;
               this.recoveredHp = 325;
               break;
            default:
               this.dps = 0;
               this.hp = 0;
               this.trainingTimeSeconds = 0;
               this.summonedTroops = 0;
               this.recoveredHp = 0;
               break;
         }
         this.calculateDpa();
      }
   }
   
   function GrandWardenHero(){
      Hero.call(this);
      //static attributes
      this.name = 'GrandWarden';
      this.attackSpeed = 1.8;
      this.movementSpeed = 16;
      this.range = 7;
      this.imagePath = 'images/grandWarden';
      this.maxLevel = 20;

      //level based attributes
      this.setLevel = function(level){
         this.level = level;
         this.setArmyCookie('level',level);
         switch(level){
            case 1:
               this.dps = 50;
               this.hp = 1000;
               this.trainingTimeSeconds = 1800;
               this.recoveredHp = 0;
               break;
            case 2:
               this.dps = 52;
               this.hp = 1021;
               this.trainingTimeSeconds = 1920;
               this.recoveredHp = 0;
               break;
            case 3:
               this.dps = 54;
               this.hp = 1042;
               this.trainingTimeSeconds = 2040;
               this.recoveredHp = 0;
               break;
            case 4:
               this.dps = 56;
               this.hp = 1064;
               this.trainingTimeSeconds = 2160;
               this.recoveredHp = 0;
               break;
            case 5:
               this.dps = 58;
               this.hp = 1086;
               this.trainingTimeSeconds = 2280;
               this.recoveredHp = 0;
               break;
            case 6:
               this.dps = 60;
               this.hp = 1108;
               this.trainingTimeSeconds = 2400;
               this.recoveredHp = 0;
               break;
            case 7:
               this.dps = 63;
               this.hp = 1131;
               this.trainingTimeSeconds = 2520;
               this.recoveredHp = 0;
               break;
            case 8:
               this.dps = 66;
               this.hp = 1155;
               this.trainingTimeSeconds = 2640;
               this.recoveredHp = 0;
               break;
            case 9:
               this.dps = 69;
               this.hp = 1180;
               this.trainingTimeSeconds = 2760;
               this.recoveredHp = 0;
               break;
            case 10:
               this.dps = 72;
               this.hp = 1206;
               this.trainingTimeSeconds = 2880;
               this.recoveredHp = 0;
               break;
            case 11:
               this.dps = 75;
               this.hp = 1233;
               this.trainingTimeSeconds = 3000;
               this.recoveredHp = 0;
               break;
            case 12:
               this.dps = 78;
               this.hp = 1261;
               this.trainingTimeSeconds = 3120;
               this.recoveredHp = 0;
               break;
            case 13:
               this.dps = 82;
               this.hp = 1290;
               this.trainingTimeSeconds = 3240;
               this.recoveredHp = 0;
               break;
            case 14:
               this.dps = 86;
               this.hp = 1320;
               this.trainingTimeSeconds = 3360;
               this.recoveredHp = 0;
               break;
            case 15:
               this.dps = 90;
               this.hp = 1350;
               this.trainingTimeSeconds = 3480;
               this.recoveredHp = 0;
               break;
            case 16:
               this.dps = 94;
               this.hp = 1380;
               this.trainingTimeSeconds = 3600;
               this.recoveredHp = 0;
               break;
            case 17:
               this.dps = 98;
               this.hp = 1410;
               this.trainingTimeSeconds = 3720;
               this.recoveredHp = 0;
               break;
            case 18:
               this.dps = 102;
               this.hp = 1440;
               this.trainingTimeSeconds = 3840;
               this.recoveredHp = 0;
               break;
            case 19:
               this.dps = 106;
               this.hp = 1470;
               this.trainingTimeSeconds = 3960;
               this.recoveredHp = 0;
               break;
            case 20:
               this.dps = 110;
               this.hp = 1500;
               this.trainingTimeSeconds = 4080;
               this.recoveredHp = 0;
               break;
            default:
               this.dps = 0;
               this.hp = 0;
               this.trainingTimeSeconds = 0;
               this.summonedTroops = 0;
               this.recoveredHp = 0;
               break;
         }
         this.calculateDpa();
      }
   }


   function calculateSingleHero(heroType) {
      //set the appropriate training time field
      trainingTime = document.getElementById(heroType.name + '_TrainingTime');

      changeText(trainingTime,addCommas(secondstotime(heroType.calculateTrainingTime())));
      
      changeImageLevel(heroType.name,heroType.level,heroType.maxLevel);

      setHeroTotals();
   }

   function setHeroTotals(){
      var totalHeroTime = document.getElementById('totalHeroTime');
      
      var totalHeroTrainingTime = 0;
      for(var x = 0;x < heroesArray.length;x++){
      	if(heroesArray[x].calculateTrainingTime() > totalHeroTrainingTime){
      		totalHeroTrainingTime = heroesArray[x].calculateTrainingTime();
      	}
      }
      
      changeText(totalHeroTime,addCommas(secondstotime(totalHeroTrainingTime)));
   }
