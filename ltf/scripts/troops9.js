   function ArmyTroop(){
      this.name = 'Parent';
      this.level = 0;
      this.specialDpa = 0;
      this.attackSpeed = 0;
      this.movementSpeed = 0;
      this.range = 0;
      this.trainingTimeSeconds = 0;
      this.housingSpace = 0;
      this.barracksLevelRequired = 0;
      this.dpa = 0;
      this.dps = 0;
      this.hp = 0;
      this.trainingCost = 0;
      this.quantity = 0;
      this.distributedQuantity = 0;
      this.smallImagePath = '';
      this.imagePath = '';
      this.costsDarkElixir = false;
      this.flying = false;
      this.attackAir = false;
      this.maxLevel = 1;
      this.calculateDpa = function(){
         this.dpa = Math.round(this.dps * this.attackSpeed);
      }
      this.calculateElixirCost = function(){
         return this.trainingCost * this.quantity;
      }
      this.calculateTrainingTime = function(){
         var trainingTimeSeconds = this.boosted == true ?  (this.trainingTimeSeconds / this.boostFactor) : this.trainingTimeSeconds
         return trainingTimeSeconds * this.quantity;
      }
      this.calculateTotalHousingSpace = function(){
         return this.housingSpace * this.quantity;
      }
      this.setQuantity = function(quantity){
         this.quantity = quantity;
         this.setArmyCookie('quantity',quantity);
      }
      //cookie related functions
      this.setArmyCookie = function(cookieName, cookieValue){
         var fullCookieName = this.name + '_' + cookieName;
         setCookie(fullCookieName,cookieValue);
      }

      this.trainingTimePerHousingSpace = function () {
         return Number(this.trainingTimeSeconds) / Number(this.housingSpace);
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

   function BarbarianTroop(level, attackSpeed, movementSpeed, range, trainingTimeSeconds, housingSpace, barracksLevelRequired, dps, hp, trainingCost){
      ArmyTroop.call(this);
      //static attributes
      this.name = 'Barbarian';
      this.imagePath = 'images/barbarian';
      this.maxLevel = 7;
      if(level){
      	this.level = level;
      }else{
      	this.level = 1;
      }
      if(attackSpeed){
      	this.attackSpeed = attackSpeed;
      }else{
      	this.attackSpeed = 1;
      }
      if(movementSpeed){
      	this.movementSpeed = movementSpeed;
      }else{
      	this.movementSpeed = 16;
      }
      if(range){
      	this.range = range;
      }else{
      	this.range = .4;
      }
      if(trainingTimeSeconds){
      	this.trainingTimeSeconds = trainingTimeSeconds;
      }else{
      	this.trainingTimeSeconds = 20;
      }
      if(housingSpace){
      	this.housingSpace = housingSpace;
      }else{
      	this.housingSpace = 1;
      }
      if(barracksLevelRequired){
      	this.barracksLevelRequired = barracksLevelRequired;
      }else{
      	this.barracksLevelRequired = 1;
      }
      
      if(dps){
      	this.dps = dps;
      }
      
      if(hp){
      	this.hp = hp;
      }
      
      if(trainingCost){
      	this.trainingCost = trainingCost;
      }

      //level based attributes
      this.setLevel = function(level){
         this.level = level;
         this.setArmyCookie('level',level);
         switch(level){
            case 1:
               this.dps = 8;
               this.hp = 45;
               this.trainingCost = 25;
               this.smallImagePath = 'http://i.imgur.com/DaoDLPg.png';
               break;
            case 2:
               this.dps = 11;
               this.hp = 54;
               this.trainingCost = 40;
               this.smallImagePath = 'http://i.imgur.com/vzxW2As.png';
               break;
            case 3:
               this.dps = 14;
               this.hp = 65;
               this.trainingCost = 60;
               this.smallImagePath = 'http://i.imgur.com/JtP7CIV.png';
               break;
            case 4:
               this.dps = 18;
               this.hp = 78;
               this.trainingCost = 100;
               this.smallImagePath = 'http://i.imgur.com/V72x8o1.png';
               break;
            case 5:
               this.dps = 23;
               this.hp = 95;
               this.trainingCost = 150;
               this.smallImagePath = 'http://i.imgur.com/cGPuinA.png';
               break;
            case 6:
               this.dps = 26;
               this.hp = 110;
               this.trainingCost = 200;
               this.smallImagePath = 'http://i.imgur.com/tiFj3xI.png';
               break;
            case 7:
               this.dps = 30;
               this.hp = 125;
               this.trainingCost = 250;
               this.smallImagePath = 'http://i.imgur.com/H9tXzfT.png';
               break;
            default:
               this.dps = 0;
               this.hp = 0;
               this.trainingCost = 0;
               this.smallImagePath = 'http://i.imgur.com/DaoDLPg.png';
               break;
         }
         this.calculateDpa();
      }
   }

   function ArcherTroop(){ 
      ArmyTroop.call(this);
      //static attributes
      this.name = 'Archer';
      this.attackSpeed = 1;
      this.movementSpeed = 24;
      this.range = 3.5;
      this.trainingTimeSeconds = 25;
      this.housingSpace = 1;
      this.barracksLevelRequired = 2;
      this.attackAir = true;
      this.imagePath = 'images/archer';
      this.maxLevel = 7;

      //level based attributes
      this.setLevel = function(level){
         this.level = level;
         this.setArmyCookie('level',level);
         switch(level){
            case 1:
               this.dps = 7;
               this.hp = 20;
               this.trainingCost = 50;
               this.smallImagePath = 'http://i.imgur.com/6ID0l1c.png';
               break;
            case 2:
               this.dps = 9;
               this.hp = 23;
               this.trainingCost = 80;
               this.smallImagePath = 'http://i.imgur.com/KzfZjs4.png';
               break;
            case 3:
               this.dps = 12;
               this.hp = 28;
               this.trainingCost = 120;
               this.smallImagePath = 'http://i.imgur.com/KvvUtog.png';
               break;
            case 4:
               this.dps = 16;
               this.hp = 33;
               this.trainingCost = 200;
               this.smallImagePath = 'http://i.imgur.com/H8GR5Xn.png';
               break;
            case 5:
               this.dps = 20;
               this.hp = 40;
               this.trainingCost = 300;
               this.smallImagePath = 'http://i.imgur.com/LPu09rP.png';
               break;
            case 6:
               this.dps = 22;
               this.hp = 44;
               this.trainingCost = 400;
               this.smallImagePath = 'http://i.imgur.com/JR2Wayf.png';
               break;
            case 7:
               this.dps = 25;
               this.hp = 48;
               this.trainingCost = 500;
               this.smallImagePath = 'http://i.imgur.com/TgsX4OF.png';
               break;
            default:
               this.hp = 0;
               this.dps = 0;
               this.trainingCost = 0;
               this.smallImagePath = 'http://i.imgur.com/6ID0l1c.png';
               break;
         }
         this.calculateDpa();
      }
   }

   function GoblinTroop(level){ 
      ArmyTroop.call(this);
      //static attributes
      this.name = 'Goblin';
      this.attackSpeed = 1;
      this.movementSpeed = 32;
      this.range = .4;
      this.trainingTimeSeconds = 30;
      this.housingSpace = 1;
      this.barracksLevelRequired = 3;
      this.imagePath = 'images/goblin';
      this.maxLevel = 6;

      //level based attributes
      this.setLevel = function(level){
         this.level = level;
         this.setArmyCookie('level',level);
         switch(level){
            case 1:
               this.dps =  11;
               this.specialDps = 22;
               this.hp = 25;
               this.trainingCost = 25;
               this.smallImagePath = 'http://i.imgur.com/fdD6tiG.png';
               break;
            case 2:
               this.dps = 14;
               this.specialDps = 28;
               this.hp = 30;
               this.trainingCost = 40;
               this.smallImagePath = 'http://i.imgur.com/cHPYrjy.png';
               break;
            case 3:
               this.dps = 19;
               this.specialDps = 38;
               this.hp = 36;
               this.trainingCost = 60;
               this.smallImagePath = 'http://i.imgur.com/9jCzCpQ.png';
               break;
            case 4:
               this.dps = 24;
               this.specialDps = 48;
               this.hp = 43;
               this.trainingCost = 80;
               this.smallImagePath = 'http://i.imgur.com/ZcbBhpQ.png';
               break;
            case 5:
               this.dps = 32;
               this.specialDps = 64;
               this.hp = 52;
               this.trainingCost = 100;
               this.smallImagePath = 'http://i.imgur.com/3kOk9cK.png';
               break;
            case 6:
               this.dps = 42;
               this.specialDps = 84;
               this.hp = 68;
               this.trainingCost = 150;
               this.smallImagePath = 'http://i.imgur.com/2fuxyeN.png';
               break;
            default:
               this.specialDps = 0;
               this.dps = 0;
               this.hp = 0;
               this.trainingCost = 0;
               this.smallImagePath = 'http://i.imgur.com/fdD6tiG.png';
               break;
         }
         this.calculateDpa();
      }
   }

   function GiantTroop(level){ 
      ArmyTroop.call(this);
      //static attributes
      this.name = 'Giant';
      this.level = level;
      this.specialDpa = 0;
      this.attackSpeed = 2;
      this.movementSpeed = 12;
      this.range = 1;
      this.trainingTimeSeconds = 120;
      this.housingSpace = 5;
      this.barracksLevelRequired = 4;
      this.imagePath = 'images/giant';
      this.maxLevel = 7;

      //level based attributes
      this.setLevel = function(level){
         this.level = level;
         this.setArmyCookie('level',level);
         switch(level){
            case 1:
               this.dps = 11;
               this.trainingCost = 250;
               this.hp = 300;
               this.smallImagePath = 'http://i.imgur.com/mIbXMlh.png';
               break;
            case 2:
               this.dps = 14;
               this.trainingCost = 750;
               this.hp = 360;
               this.smallImagePath = 'http://i.imgur.com/qrpUDBw.png';
               break;
            case 3:
               this.dps = 19;
               this.trainingCost = 1250;
               this.hp = 430;
               this.smallImagePath = 'http://i.imgur.com/NFwOzvO.png';
               break;
            case 4:
               this.dps = 24;
               this.trainingCost = 1750;
               this.hp = 520;
               this.smallImagePath = 'http://i.imgur.com/jKP4KAQ.png';
               break;
            case 5:
               this.dps = 31;
               this.trainingCost = 2250;
               this.hp = 620;
               this.smallImagePath = 'http://i.imgur.com/MQHvKgd.png';
               break;
            case 6:
               this.dps = 43;
               this.hp = 940;
               this.trainingCost = 3000;
               this.smallImagePath = 'http://i.imgur.com/G5B4Rqd.png';
               break;
            case 7:
               this.dps = 50;
               this.hp = 1100;
               this.trainingCost = 3500;
               this.smallImagePath = 'http://i.imgur.com/G5B4Rqd.png';
               break;
            default:
               this.dps = 0;
               this.trainingCost = 0;
               this.hp = 0;
               this.smallImagePath = 'http://i.imgur.com/2YR58Ey.png';
               break;
         }
         this.calculateDpa();
      }
   }

   function WallBreakerTroop(level){ 
      ArmyTroop.call(this);
      this.name = 'WallBreaker';
      //static attributes
      this.level = level;
      this.attackSpeed = 1;
      this.movementSpeed = 24;
      this.range = .5;
      this.trainingTimeSeconds = 120;
      this.housingSpace = 2;
      this.barracksLevelRequired = 5;
      this.imagePath = 'images/wallBreaker';
      this.maxLevel = 6;

      //level based attributes
      this.setLevel = function(level){
         this.level = level;
         this.setArmyCookie('level',level);
         switch(level){
            case 1:
               this.specialDps = 480;
               this.hp = 20;
               this.trainingCost = 1000;
               this.smallImagePath = 'http://i.imgur.com/zinhHOy.png';
               //this.dps = 12;
               break;
            case 2:
               this.specialDps = 640;
               this.hp = 24;
               this.trainingCost = 1500;
               this.smallImagePath = 'http://i.imgur.com/Ojzymq3.png';
               //this.dps = 16;
               break;
            case 3:
               this.specialDps = 960;
               this.hp = 29;
               this.trainingCost = 2000;
               this.smallImagePath = 'http://i.imgur.com/EShqRln.png';
               //this.dps = 24;
               break;
            case 4:
               this.specialDps = 1280;
               this.hp = 35;
               this.trainingCost = 2500;
               this.smallImagePath = 'http://i.imgur.com/F3Cv87M.png';
               //this.dps = 32;
               break;
            case 5:
               this.hp = 42;
               this.trainingCost = 3000;
               this.specialDps = 1840;
               this.smallImagePath = 'http://i.imgur.com/499EqBu.png';
               //this.dps = 46;
               break;
            case 6:
               this.hp = 54;
               this.trainingCost = 3500;
               this.specialDps = 2400;
               this.smallImagePath = 'http://i.imgur.com/ifMfRlk.png';
               //this.dps = 46;
               break;
            default:
               this.trainingCost = 0;
               this.specialDps = 0;
               this.hp = 0;
               this.dps = 0;
               this.smallImagePath = 'http://i.imgur.com/zinhHOy.png';
               break;
         }
         this.calculateDpa();
      }
   }

   function BalloonTroop(level){ 
      ArmyTroop.call(this);
      this.name = 'Balloon';
      //static attributes
      this.level = level;
      this.specialDpa = 0;
      this.attackSpeed = 4;
      this.movementSpeed = 10;
      this.range = 1;
      this.trainingTimeSeconds = 480;
      this.housingSpace = 5;
      this.barracksLevelRequired = 6;
      this.flying = true;
      this.imagePath = 'images/balloon';
      this.maxLevel = 6;

      //level based attributes
      this.setLevel = function(level){
         this.level = level;
         this.setArmyCookie('level',level);
         switch(level){
            case 1:
               this.dps = 25;
               this.hp = 150;
               this.trainingCost = 2000;
               this.smallImagePath = 'http://i.imgur.com/xJQI3PP.png';
               break;
            case 2:
               this.dps = 32 ;
               this.hp = 180;
               this.trainingCost = 2500;
               this.smallImagePath = 'http://i.imgur.com/PBEyDyr.png';
               break;
            case 3:
               this.dps = 48;
               this.hp = 216;
               this.trainingCost = 3000;
               this.smallImagePath = 'http://i.imgur.com/KKGUvyX.png';
               break;
            case 4:
               this.dps = 72;
               this.hp = 280;
               this.trainingCost = 3500;
               this.smallImagePath = 'http://i.imgur.com/VoEs8zc.png';
               break;
            case 5:
               this.dps = 108;
               this.hp = 390;
               this.trainingCost = 4000;
               this.smallImagePath = 'http://i.imgur.com/yQ61OT0.png';
               break;
            case 6:
               this.dps = 162;
               this.hp = 545;
               this.trainingCost = 4500;
               this.smallImagePath = 'http://i.imgur.com/a3uWDwl.png';
               break;
            default:
               this.dps = 0;
               this.hp = 0;
               this.trainingCost = 0;
               this.smallImagePath = 'http://i.imgur.com/xJQI3PP.png';
               break;
         }
         this.calculateDpa();
      }
   }

   function WizardTroop(level){ 
      ArmyTroop.call(this);
      this.name = 'Wizard';
      //static attributes
      this.level = level;
      this.specialDpa = 0;
      this.attackSpeed = 1.5;
      this.movementSpeed = 16;
      this.range = 3;
      this.trainingTimeSeconds = 480;
      this.housingSpace = 4;
      this.barracksLevelRequired = 7;
      this.attackAir = true;
      this.imagePath = 'images/wizard';
      this.maxLevel = 6;

      //level based attributes
      this.setLevel = function(level){
         this.level = level;
         this.setArmyCookie('level',level);
         switch(level){
            case 1:
               this.dps = 50;
               this.hp = 75;
               this.trainingCost = 1500;
               this.smallImagePath = 'http://i.imgur.com/NkPANrv.png';
               break;
            case 2:
               this.dps = 70;
               this.hp = 90;
               this.trainingCost = 2000;
               this.smallImagePath = 'http://i.imgur.com/PsE2c1k.png';
               break;
            case 3:
               this.dps = 90;
               this.hp = 108;
               this.trainingCost = 2500;
               this.smallImagePath = 'http://i.imgur.com/TBpIwaY.png';
               break;
            case 4:
               this.dps = 125;
               this.hp = 130;
               this.trainingCost = 3000;
               this.smallImagePath = 'http://i.imgur.com/4yXx2Hn.png';
               break;
            case 5:
               this.dps = 170;
               this.hp = 156;
               this.trainingCost = 3500;
               this.smallImagePath = 'http://i.imgur.com/HhTK7s8.png';
               break;
            case 6:
               this.dps = 180;
               this.hp = 164;
               this.trainingCost = 4000;
               this.smallImagePath = 'http://i.imgur.com/d6MPpuX.png';
               break;
            default:
               this.trainingCost = 0;
               this.dps = 0;
               this.hp = 0;
               this.smallImagePath = 'http://i.imgur.com/NkPANrv.png';
               break;
         }
         this.calculateDpa();
      }
   }

   function HealerTroop(level){ 
      ArmyTroop.call(this);
      this.name = 'Healer';
      //static attributes
      this.level = level;
      this.specialDpa = 0;
      //this.attackSpeed = .7;
      this.movementSpeed = 16;
      this.range = 5;
      this.trainingTimeSeconds = 900;
      this.housingSpace = 14;
      this.barracksLevelRequired = 8;
      this.flying = true;
      this.imagePath = 'images/healer';
      this.maxLevel = 4;

      //level based attributes
      this.setLevel = function(level){
         this.level = level;
         this.setArmyCookie('level',level);
         switch(level){
            case 1:
               this.hp = 500;
               this.trainingCost = 5000;
               //this.dps = 21;
               this.smallImagePath = 'http://i.imgur.com/IJh4nZE.png';
               break;
            case 2:
               this.hp = 600;
               this.trainingCost = 6000;
               //this.dps = 28;
               this.smallImagePath = 'http://i.imgur.com/h7nXzBG.png';
               break;
            case 3:
               this.hp = 840;
               this.trainingCost = 8000;
               //this.dps = 35;
               this.smallImagePath = 'http://i.imgur.com/r7HaZDO.png';
               break;
            case 4:
               this.hp = 1176;
               this.trainingCost = 10000;
               //this.dps = 59;
               this.smallImagePath = 'http://i.imgur.com/MRHfgUJ.png';
               break;
            default:
               this.trainingCost = 0;
               this.hp = 0;
               this.dps = 0;
               this.smallImagePath = 'http://i.imgur.com/IJh4nZE.png';
               break;
         }
         this.calculateDpa();
      }
   }

   function DragonTroop(level){ 
      ArmyTroop.call(this);
      //static attributes
      this.name = 'Dragon';
      this.level = level;
      this.specialDpa = 0;
      this.attackSpeed = 1.5;
      this.movementSpeed = 16;
      this.range = 3;
      this.trainingTimeSeconds = 1800;
      this.housingSpace = 20;
      this.barracksLevelRequired = 9;
      this.flying = true;
      this.attackAir = true;
      this.imagePath = 'images/dragon';
      this.maxLevel = 5;

      //level based attributes
      this.setLevel = function(level){
         this.level = level;
         this.setArmyCookie('level',level);
         switch(level){
            case 1:
               this.dps = 140;
               this.hp = 1900;
               this.trainingCost = 25000;
               this.smallImagePath = 'http://i.imgur.com/uPRNtUF.png';
               break;
            case 2:
               this.dps = 160;
               this.hp = 2100;
               this.trainingCost = 29000;
               this.smallImagePath = 'http://i.imgur.com/IvonJ5g.png';
               break;
            case 3:
               this.dps = 180;
               this.hp = 2300;
               this.trainingCost = 33000;
               this.smallImagePath = 'http://i.imgur.com/IQu4acC.png';
               break;
            case 4:
               this.dps = 200;
               this.hp = 2500;
               this.trainingCost = 37000;
               this.smallImagePath = 'http://i.imgur.com/TnHd35Z.png';
               break;
            case 5:
               this.dps = 220;
               this.hp = 2700;
               this.trainingCost = 41000;
               this.smallImagePath = 'http://i.imgur.com/5f6tj3U.png';
               break;
            default:
               this.trainingCost = 0;
               this.dps = 0;
               this.hp = 0;
               this.smallImagePath = 'http://i.imgur.com/uPRNtUF.png';
               break;
         }
         this.calculateDpa();
      }
   }

   function PekkaTroop(level){ 
      ArmyTroop.call(this);
      //static attributes
      this.name = 'Pekka';
      this.level = level;
      this.specialDpa = 0;
      this.attackSpeed = 2.5;
      this.movementSpeed = 16;
      this.range = .8;
      this.trainingTimeSeconds = 2700;
      this.housingSpace = 25;
      this.barracksLevelRequired = 10;
      this.imagePath = 'images/pekka';
      this.maxLevel = 5;

      //level based attributes
      this.setLevel = function(level){
         this.level = level;
         this.setArmyCookie('level',level);
         switch(level){
            case 1:
               this.dps = 240;
               this.hp = 2800;
               this.trainingCost = 30000;
               this.smallImagePath = 'http://i.imgur.com/pSTJEU3.png';
               break;
            case 2:
               this.dps = 270;
               this.hp = 3100;
               this.trainingCost = 35000;
               this.smallImagePath = 'http://i.imgur.com/uZAsRM9.png';
               break;
            case 3:
               this.dps = 300;
               this.hp = 3500;
               this.trainingCost = 36000;
               this.smallImagePath = 'http://i.imgur.com/hiDsDF8.png';
               break;
            case 4:
               this.dps = 340;
               this.hp = 4000;
               this.trainingCost = 40000;
               this.smallImagePath = 'http://i.imgur.com/9DESzPh.png';
               break;
            case 5:
               this.dps = 380;
               this.hp = 4500;
               this.trainingCost = 45000;
               this.smallImagePath = 'http://i.imgur.com/hGFv4t6.png';
               break;
            default:
               this.trainingCost = 0;
               this.hp = 0;
               this.dps = 0;
               this.smallImagePath = 'http://i.imgur.com/pSTJEU3.png';
               break;
         }
         this.calculateDpa();
      }
   }

   function MinionTroop(level){ 
      ArmyTroop.call(this);
      this.name = 'Minion';
      //static attributes
      this.costsDarkElixir = true;
      this.level = level;
      this.specialDpa = 0;
      this.attackSpeed = 1;
      this.movementSpeed = 32;
      this.range = 2.75;
      this.trainingTimeSeconds = 45;
      this.housingSpace = 2;
      this.barracksLevelRequired = 1;
      this.flying = true;
      this.attackAir = true;
      this.imagePath = 'images/minion';
      this.maxLevel = 7;

      //level based attributes
      this.setLevel = function(level){
         this.level = level;
         this.setArmyCookie('level',level);
         switch(level){
            case 1:
               this.dps = 35;
               this.hp = 55;
               this.trainingCost = 6;
               this.smallImagePath = 'http://i.imgur.com/x8MFD1l.png';
               break;
            case 2:
               this.dps = 38 ;
               this.hp = 60;
               this.trainingCost = 7;
               this.smallImagePath = 'http://i.imgur.com/X0j1vc3.png';
               break;
            case 3:
               this.dps = 42;
               this.hp = 66;
               this.trainingCost = 8;
               this.smallImagePath = 'http://i.imgur.com/htPrHdW.png';
               break;
            case 4:
               this.dps = 46;
               this.hp = 72;
               this.trainingCost = 9;
               this.smallImagePath = 'http://i.imgur.com/OT4C92E.png';
               break;
            case 5:
               this.dps = 50;
               this.hp = 78;
               this.trainingCost = 10;
               this.smallImagePath = 'http://i.imgur.com/WSamsj2.png';
               break;
            case 6:
               this.dps = 54;
               this.hp = 84;
               this.trainingCost = 11;
               this.smallImagePath = 'http://i.imgur.com/sEHYSw3.png';
               break;
            case 7:
               this.dps = 57;
               this.hp = 90;
               this.trainingCost = 12;
               this.smallImagePath = 'http://i.imgur.com/sEHYSw3.png';
               break;
            default:
               this.dps = 0;
               this.hp = 0;
               this.trainingCost = 0;
               this.smallImagePath = 'http://i.imgur.com/x8MFD1l.png';
               break;
         }
         this.calculateDpa();
      }
   }

   function MrTTroop(level){ 
      ArmyTroop.call(this);
      this.name = 'MrT';
      //static attributes
      this.costsDarkElixir = true;
      this.level = level;
      this.specialDpa = 0;
      this.attackSpeed = 1;
      this.movementSpeed = 24;
      this.range = .6;
      this.trainingTimeSeconds = 120;
      this.housingSpace = 5;
      this.barracksLevelRequired = 2;
      this.imagePath = 'images/mrT';
      this.maxLevel = 5;

      //level based attributes
      this.setLevel = function(level){
         this.level = level;
         this.setArmyCookie('level',level);
         switch(level){
            case 1:
               this.dps = 60;
               this.hp = 270;
               this.trainingCost = 40;
               this.smallImagePath = 'http://i.imgur.com/bBu88c9.png';
               break;
            case 2:
               this.dps = 70 ;
               this.hp = 312;
               this.trainingCost = 45;
               this.smallImagePath = 'http://i.imgur.com/GqR0iOJ.png';
               break;
            case 3:
               this.dps = 80;
               this.hp = 360;
               this.trainingCost = 52;
               this.smallImagePath = 'http://i.imgur.com/CnHh0cp.png';
               break;
            case 4:
               this.dps = 92;
               this.hp = 415;
               this.trainingCost = 58;
               this.smallImagePath = 'http://i.imgur.com/WAEZGts.png';
               break;
            case 5:
               this.dps = 105;
               this.hp = 415;
               this.trainingCost = 65;
               this.smallImagePath = 'http://i.imgur.com/juXXYFp.png';
               break;
            default:
               this.dps = 0;
               this.hp = 0;
               this.trainingCost = 0;
               this.smallImagePath = 'http://i.imgur.com/bBu88c9.png';
               break;
         }
         this.calculateDpa();
      }
   }

   function ValkyrieTroop(level){ 
      ArmyTroop.call(this);
      this.name = 'Valkyrie';
      //static attributes
      this.costsDarkElixir = true;
      this.level = level;
      this.specialDpa = 0;
      this.attackSpeed = 1.8;
      this.movementSpeed = 24;
      this.range = .5;
      this.trainingTimeSeconds = 480;
      this.housingSpace = 8;
      this.barracksLevelRequired = 3;
      this.imagePath = 'images/valkyrie';
      this.maxLevel = 4;

      //level based attributes
      this.setLevel = function(level){
         this.level = level;
         this.setArmyCookie('level',level);
         switch(level){
            case 1:
               this.dps = 88;
               this.hp = 900;
               this.trainingCost = 70;
               this.smallImagePath = 'http://i.imgur.com/sEw7czH.png';
               break;
            case 2:
               this.dps = 99;
               this.hp = 1000;
               this.trainingCost = 100;
               this.smallImagePath = 'http://i.imgur.com/g4ZPCka.png';
               break;
            case 3:
               this.dps = 111;
               this.hp = 1100;
               this.trainingCost = 130;
               this.smallImagePath = 'http://i.imgur.com/rEvdxlm.png';
               break;
            case 4:
               this.dps = 124;
               this.hp = 1200;
               this.trainingCost = 160;
               this.smallImagePath = 'http://i.imgur.com/9R0zMc8.png';
               break;
            default:
               this.dps = 0;
               this.hp = 0;
               this.trainingCost = 0;
               this.smallImagePath = 'http://i.imgur.com/sEw7czH.png';
               break;
         }
         this.calculateDpa();
      }
   }

   function GolemTroop(level){ 
      ArmyTroop.call(this);
      this.name = 'Golem';
      //static attributes
      this.costsDarkElixir = true;
      this.level = level;
      this.specialDpa = 0;
      this.attackSpeed = 2.4;
      this.movementSpeed = 12;
      this.range = .5;
      this.trainingTimeSeconds = 2700;
      this.housingSpace = 30;
      this.barracksLevelRequired = 4;
      this.imagePath = 'images/golem';
      this.maxLevel = 5;

      //level based attributes
      this.setLevel = function(level){
         this.level = level;
         this.setArmyCookie('level',level);
         switch(level){
            case 1:
               //38 + 7 (golemite)
               this.dps = 45;
               //4500 + 900 (golemite)
               this.hp = 5400;
               this.trainingCost = 450;
               this.smallImagePath = 'http://i.imgur.com/ngswRwo.png';
               break;
            case 2:
               //42 + 8 (golemite)
               this.dps = 50;
               //5000 + 1000 (golemite)
               this.hp = 6000;
               this.trainingCost = 525;
               this.smallImagePath = 'http://i.imgur.com/7RZBgVn.png';
               break;
            case 3:
               //46 + 9 (golemite)
               this.dps = 55;
               //5500 + 1100 (golemite)
               this.hp = 6600;
               this.trainingCost = 600;
               this.smallImagePath = 'http://i.imgur.com/30wMgUw.png';
               break;
            case 4:
               //50 + 10 (golemite)
               this.dps = 60;
               //6000 + 1200 (golemite)
               this.hp = 6200;
               this.trainingCost = 675;
               this.smallImagePath = 'http://i.imgur.com/ACq8lyi.png';
               break;
            case 5:
               //54 + 11 (golemite)
               this.dps = 65;
               //6300 + 1260 (golemite)
               this.hp = 7560;
               this.trainingCost = 750;
               this.smallImagePath = 'http://i.imgur.com/DDNikpE.png';
               break;
            default:
               this.dps = 0;
               this.hp = 0;
               this.trainingCost = 0;
               this.smallImagePath = 'http://i.imgur.com/ngswRwo.png';
               break;
         }
         this.calculateDpa();
      }
   }

   function WarlockTroop(level){ 
      ArmyTroop.call(this);
      this.name = 'Warlock';
      //static attributes
      this.costsDarkElixir = true;
      this.level = level;
      this.specialDpa = 0;
      this.attackSpeed = .7;
      this.movementSpeed = 12;
      this.range = 3;
      this.trainingTimeSeconds = 1200;
      this.housingSpace = 12;
      this.barracksLevelRequired = 5;
      this.imagePath = 'images/warlock';
      this.maxLevel = 3;

      //level based attributes
      this.setLevel = function(level){
         this.level = level;
         this.setArmyCookie('level',level);
         switch(level){
            case 1:
               this.dps = 25;
               this.hp = 75;
               this.trainingCost = 250;
               this.smallImagePath = 'http://i.imgur.com/Ys7dQKX.png';
               break;
            case 2:
               this.dps = 30;
               this.hp = 100;
               this.trainingCost = 350;
               this.smallImagePath = 'http://i.imgur.com/kLMmHMZ.png';
               break;
            case 3:
               this.dps = 35;
               this.hp = 125;
               this.trainingCost = 450;
               this.smallImagePath = 'http://i.imgur.com/kLMmHMZ.png';
               break;
            default:
               this.dps = 0;
               this.hp = 0;
               this.trainingCost = 0;
               this.smallImagePath = 'http://i.imgur.com/Ys7dQKX.png';
               break;
         }
         this.calculateDpa();
      }
   }


   function LavaHoundTroop(level){ 
      ArmyTroop.call(this);
      this.name = 'LavaHound';
      //static attributes
      this.costsDarkElixir = true;
      this.level = level;
      this.specialDpa = 0;
      this.attackSpeed = 2;
      this.movementSpeed = 20;
      this.range = 1;
      this.trainingTimeSeconds = 2700;
      this.housingSpace = 30;
      this.barracksLevelRequired = 6;
      this.flying = true;
      this.imagePath = 'images/lavaHound';
      this.maxLevel = 3;

      //level based attributes
      this.setLevel = function(level){
         this.level = level;
         this.setArmyCookie('level',level);
         switch(level){
            case 1:
               //8 pups
               //10 + 280 (little lava thingies)
               this.dps = 10;
               //5700 + 400 (little lava thingies)
               this.hp = 6100;
               this.trainingCost = 390;
               this.smallImagePath = 'http://i.imgur.com/ZDYHJHp.png';
               break;
            case 2:
               //10 pups
               //12 + 350 (little lava thingies)
               this.dps = 362;
               //6200 + 500 (little lava thingies)
               this.hp = 6750;
               this.trainingCost = 450;
               this.smallImagePath = 'http://i.imgur.com/tuNvbLH.png';
               break;
            case 3:
               //12 pups
               //14 + 420 (little lava thingies)
               this.dps = 434;
               //6700 + 600 (little lava thingies)
               this.hp = 7300;
               this.trainingCost = 510;
               this.smallImagePath = 'http://i.imgur.com/efy2jn1.png';
               break;
            default:
               this.dps = 0;
               this.hp = 0;
               this.trainingCost = 0;
               this.smallImagePath = 'http://i.imgur.com/ZDYHJHp.png';
               break;
         }
         this.calculateDpa();
      }
   }

   function calculateSingle(troopType,inputQuantity) {
      if(!inputQuantity){
         inputQuantity = 0;
      }
      troopType.setQuantity(inputQuantity);
      //set the appropriate elixir field
      if(troopType.costsDarkElixir){
         elixirCost = document.getElementById(troopType.name + '_DarkElixirCost');
      }else{
         elixirCost = document.getElementById(troopType.name + '_ElixirCost');
      }
      trainingTime = document.getElementById(troopType.name + '_TrainingTime');
      if (!troopType.quantity || troopType.quantity == 0){
         changeText(elixirCost,'0');
         changeText(trainingTime,'00:00:00');
      }else{
         changeText(elixirCost,addCommas(troopType.calculateElixirCost()));
         changeText(trainingTime,addCommas(secondstotime(troopType.calculateTrainingTime())));
      }
      
      changeImageLevel(troopType.name,troopType.level,troopType.maxLevel);
      setTotals();
      resetTroopStats();
      setTroopStats();
   }

   function setTotals(){
      var spanElements = document.getElementsByTagName('span');
      var armyCampUsed = document.getElementById('armyCampUsed');
      var armyCampUsedRegular = document.getElementById('armyCampUsedRegular');
      var armyCampUsedDark = document.getElementById('armyCampUsedDark');
      var totalElixir = document.getElementById('totalElixir');
      var totalDarkElixir = document.getElementById('totalDarkElixir');
      var army = 0;
      var elixir = 0;
      var darkElixir = 0;
      //loop through regular troops
      for(var n=0;n<troopsArray.length;n++){
         if(troopsArray[n].calculateTotalHousingSpace() > 0){
            army = army + troopsArray[n].calculateTotalHousingSpace();
         }
         if(troopsArray[n].calculateElixirCost() > 0){
            elixir = elixir + troopsArray[n].calculateElixirCost();
         }
      }
      regularTroopTotal = army;
      //loop through dark troops
      for(var n=0;n<darkTroopsArray.length;n++){
         if(darkTroopsArray[n].calculateTotalHousingSpace() > 0){
            army = army + darkTroopsArray[n].calculateTotalHousingSpace();
         }
         if(darkTroopsArray[n].costsDarkElixir){
            darkElixir = darkElixir + darkTroopsArray[n].calculateElixirCost();
         }
      }
      changeText(armyCampUsed,addCommas(army));
      changeText(armyCampUsedRegular,addCommas(army));
      changeText(armyCampUsedDark,addCommas(army));
      changeText(totalElixir,addCommas(elixir));
      changeText(totalDarkElixir,addCommas(darkElixir));
      setTroopSpellTotalElixir();
   }

   function setTroopStats(){  
      var totalHPElement = document.getElementById('totalHP');
      var groundHPElement = document.getElementById('groundHP');
      var airHPElement = document.getElementById('airHP');
      var averageHPElement = document.getElementById('averageHP');
      var averageSpeedElement = document.getElementById('averageSpeed');
      var averageAttackSpeedElement = document.getElementById('averageAttackSpeed');
      var averageDPSElement = document.getElementById('averageDPS');
      var averageDPAElement = document.getElementById('averageDPA');
      var averageCampDPSElement = document.getElementById('averageCampDPS');
      var averageCampDPAElement = document.getElementById('averageCampDPA');
      var totalDPSElement = document.getElementById('totalDPS');
      var totalDPAElement = document.getElementById('totalDPA');
      var groundDPSElement = document.getElementById('groundDPS');
      var groundDPAElement = document.getElementById('groundDPA');
      var airDPSElement = document.getElementById('airDPS');
      var airDPAElement = document.getElementById('airDPA');
      var armyCampUsed = Number(getText(document.getElementById('armyCampUsed')));

      var totalHP = 0;
      var groundHP = 0;
      var airHP = 0;
      var totalSpeed = 0;
      var totalAttackSpeed = 0;
      var totalDPS = 0;
      var totalDPA = 0;
      var airDPS = 0;
      var airDPA = 0;
      var groundDPS = 0;
      var groundDPA = 0;


      var totalTroops = 0;
      //loop through regular troops
      for(var p=0;p<troopsArray.length;p++){
         
         totalHP = totalHP + (troopsArray[p].hp * troopsArray[p].quantity);
         if(troopsArray[p].flying){
            airHP = airHP + (troopsArray[p].hp * troopsArray[p].quantity);
         }else{
            groundHP = groundHP + (troopsArray[p].hp * troopsArray[p].quantity);
         }
         totalSpeed = totalSpeed + (troopsArray[p].movementSpeed * troopsArray[p].quantity);
         totalAttackSpeed = totalAttackSpeed + (troopsArray[p].attackSpeed * troopsArray[p].quantity);
         totalDPA = totalDPA + (troopsArray[p].dpa * troopsArray[p].quantity);
         totalDPS = totalDPS + (troopsArray[p].dps * troopsArray[p].quantity);
         if(troopsArray[p].attackAir){
            airDPA = airDPA + (troopsArray[p].dpa * troopsArray[p].quantity);
            airDPS = airDPS + (troopsArray[p].dps * troopsArray[p].quantity);
            groundDPA = groundDPA + (troopsArray[p].dpa * troopsArray[p].quantity);
            groundDPS = groundDPS + (troopsArray[p].dps * troopsArray[p].quantity);
         }else{
            groundDPA = groundDPA + (troopsArray[p].dpa * troopsArray[p].quantity);
            groundDPS = groundDPS + (troopsArray[p].dps * troopsArray[p].quantity);
         }
         totalTroops = totalTroops + Number(troopsArray[p].quantity);
      }
      //loop through dark troops
      for(var q=0;q<darkTroopsArray.length;q++){
         totalHP = totalHP + (darkTroopsArray[q].hp * darkTroopsArray[q].quantity);
         
         if(darkTroopsArray[q].flying){
            airHP = airHP + (darkTroopsArray[q].hp * darkTroopsArray[q].quantity);
         }else{
            groundHP = groundHP + (darkTroopsArray[q].hp * darkTroopsArray[q].quantity);
         }

         totalSpeed = totalSpeed + (darkTroopsArray[q].movementSpeed * darkTroopsArray[q].quantity);
         totalAttackSpeed = totalAttackSpeed + (darkTroopsArray[q].attackSpeed * darkTroopsArray[q].quantity);
         totalDPA = totalDPA + (darkTroopsArray[q].dpa * darkTroopsArray[q].quantity);
         totalDPS = totalDPS + (darkTroopsArray[q].dps * darkTroopsArray[q].quantity);
         
         if(darkTroopsArray[q].attackAir){
            airDPA = airDPA + (darkTroopsArray[q].dpa * darkTroopsArray[q].quantity);
            airDPS = airDPS + (darkTroopsArray[q].dps * darkTroopsArray[q].quantity);
            groundDPA = groundDPA + (darkTroopsArray[q].dpa * darkTroopsArray[q].quantity);
            groundDPS = groundDPS + (darkTroopsArray[q].dps * darkTroopsArray[q].quantity);
         }else{
            groundDPA = groundDPA + (darkTroopsArray[q].dpa * darkTroopsArray[q].quantity);
            groundDPS = groundDPS + (darkTroopsArray[q].dps * darkTroopsArray[q].quantity);
         }

         totalTroops = totalTroops + Number(darkTroopsArray[q].quantity);
      }

      //calculate averages without heroes added
      if(totalTroops > 0){
         changeText(averageHPElement,Math.round(totalHP/totalTroops));
         changeText(averageSpeedElement,Math.round(totalSpeed/totalTroops));
         changeText(averageAttackSpeedElement,Math.round(totalAttackSpeed/totalTroops));
         changeText(averageDPSElement,Math.round(totalDPS/totalTroops));
         changeText(averageDPAElement,Math.round(totalDPA/totalTroops));

         changeText(averageCampDPSElement,Math.round(totalDPS/armyCampUsed));
         changeText(averageCampDPAElement,Math.round(totalDPA/armyCampUsed));
      }
      //add heroes to totals
      for(var h=0;h<heroesArray.length;h++){
         
         totalHP = totalHP + heroesArray[h].calculateHp();
         if(heroesArray[h].flying){
            airHP = airHP + heroesArray[h].calculateHp();
         }else{
            groundHP = groundHP + heroesArray[h].calculateHp();
         }
         totalSpeed = totalSpeed + heroesArray[h].movementSpeed;
         totalAttackSpeed = totalAttackSpeed + heroesArray[h].attackSpeed;
         totalDPA = totalDPA + heroesArray[h].dpa;
         totalDPS = totalDPS + heroesArray[h].dps;
         if(heroesArray[h].attackAir){
            airDPA = airDPA + heroesArray[h].dpa;
            airDPS = airDPS + heroesArray[h].dps;
            groundDPA = groundDPA + heroesArray[h].dpa;
            groundDPS = groundDPS + heroesArray[h].dps;
         }else{
            groundDPA = groundDPA + heroesArray[h].dpa;
            groundDPS = groundDPS + heroesArray[h].dps;
         }
      }
      //update total fields
      changeText(totalHPElement,addCommas(totalHP));
      changeText(groundHPElement,addCommas(groundHP));
      changeText(airHPElement,addCommas(airHP));
      changeText(totalDPSElement,addCommas(totalDPS));
      changeText(totalDPAElement,addCommas(totalDPA));
      changeText(groundDPSElement,addCommas(groundDPS));
      changeText(groundDPAElement,addCommas(groundDPA));
      changeText(airDPSElement,addCommas(airDPS));
      changeText(airDPAElement,addCommas(airDPA));
   }

   function resetTroopStats(){
      var totalHPElement = document.getElementById('totalHP');
      var averageHPElement = document.getElementById('averageHP');
      var averageSpeedElement = document.getElementById('averageSpeed');
      var averageAttackSpeedElement = document.getElementById('averageAttackSpeed');
      var averageDPSElement = document.getElementById('averageDPS');
      var averageDPAElement = document.getElementById('averageDPA');
      var averageCampDPSElement = document.getElementById('averageCampDPS');
      var averageCampDPAElement = document.getElementById('averageCampDPA');
      var totalDPSElement = document.getElementById('totalDPS');
      var totalDPAElement = document.getElementById('totalDPA');
      var groundDPSElement = document.getElementById('groundDPS');
      var groundDPAElement = document.getElementById('groundDPA');
      var airDPSElement = document.getElementById('airDPS');
      var airDPAElement = document.getElementById('airDPA');


      changeText(totalHPElement,'0');
      changeText(averageHPElement,'0');
      changeText(averageSpeedElement,'0');
      changeText(averageAttackSpeedElement,'0');
      changeText(averageDPSElement,'0');
      changeText(averageDPAElement,'0');
      changeText(totalDPSElement,'0');
      changeText(totalDPAElement,'0');
      changeText(averageCampDPSElement,'0');
      changeText(averageCampDPAElement,'0');
      changeText(groundDPSElement,'0');
      changeText(groundDPAElement,'0');
      changeText(airDPSElement,'0');
      changeText(airDPAElement,'0');
   }

   function resetDistributedQuantity(){
      for(var i=0; i<troopsArray.length; i++){
         troopsArray[i].distributedQuantity = 0;
      }
   }