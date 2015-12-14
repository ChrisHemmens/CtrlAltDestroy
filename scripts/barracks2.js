   function Barracks(level){ 
      //static attributes
      this.name = 'Barracks';
      this.level = 0;
      this.hp = 0;
      this.availableTroopQueue = 0
      this.maxTroopQueue = 0;
      this.buildingCost = 0;
      this.queueTrainingTime = 0;
      this.boostFactor = 4;
      this.boosted = false;
      this.boostDuration = 7200;

      this.averageHousingSpaceForAverageTime = function(trainingTimePerBarracks){
         return Number(trainingTimePerBarracks) / Number(this.maxTroopQueue);
      }

      //level base function
      this.setLevel = function(level, index){
         this.level = level;
         this.setCookie('level',index,level);
         switch(level){
            case 1:
               this.availableTroopQueue = 20;
               this.maxTroopQueue = 20;
               this.hp = 250;
		         this.buildingCost = 200;
               break;
            case 2:
               this.hp = 270;
               this.availableTroopQueue = 25;
               this.maxTroopQueue = 25;
               this.buildingCost = 1000;
               break;
            case 3:
               this.hp = 280;
               this.availableTroopQueue = 30;
               this.maxTroopQueue = 30;
               this.buildingCost = 2500;
               break;
            case 4:
                this.hp = 290;
               this.availableTroopQueue = 35;
               this.maxTroopQueue = 35;
               this.buildingCost = 5000;
               break;
            case 5:
               this.hp = 310;
               this.availableTroopQueue = 40;
               this.maxTroopQueue = 40;
               this.buildingCost = 10000;
               break;
            case 6:
               this.hp = 320;
               this.availableTroopQueue = 45;
               this.maxTroopQueue = 45;
               this.buildingCost = 80000;
               break;
            case 7:
               this.hp = 340;
               this.availableTroopQueue = 50;
               this.maxTroopQueue = 50;
               this.buildingCost = 240000;
               break;
            case 8:
               this.hp = 350;
               this.availableTroopQueue = 55;
               this.maxTroopQueue = 55;
               this.buildingCost = 700000;
               break;
            case 9:
               this.hp = 390;
               this.availableTroopQueue = 60;
               this.maxTroopQueue = 60;
               this.buildingCost = 1500000;
               break;
            case 10:
               this.hp = 420;
               this.availableTroopQueue = 75
               this.maxTroopQueue = 75;
               this.buildingCost = 2000000;
               break;
            default:
               this.hp = 0;
               this.availableTroopQueue = 0
               this.maxTroopQueue = 0;
               this.buildingCost = 0;
               break;
         }

      }
      //maintenance functions
      this.initializeTroopQueue = function(){
         //reset available troop queue
         this.availableTroopQueue = this.maxTroopQueue;
         //reset queue training time
         this.queueTrainingTime = 0;
         //reset the troop array
         this.troopQueue = new Array(10);
         this.troopQueue[0] = new Array(2);
         this.troopQueue[0][0] = 'Barbarian';
         this.troopQueue[0][1] = 0;
         this.troopQueue[1] = new Array(2);
         this.troopQueue[1][0] = 'Archer';
         this.troopQueue[1][1] = 0;
         this.troopQueue[2] = new Array(2);
         this.troopQueue[2][0] = 'Goblin';
         this.troopQueue[2][1] = 0;
         this.troopQueue[3] = new Array(2);
         this.troopQueue[3][0] = 'Giant';
         this.troopQueue[3][1] = 0;
         this.troopQueue[4] = new Array(2);
         this.troopQueue[4][0] = 'WallBreaker';
         this.troopQueue[4][1] = 0;
         this.troopQueue[5] = new Array(2);
         this.troopQueue[5][0] = 'Balloon';
         this.troopQueue[5][1] = 0;
         this.troopQueue[6] = new Array(2);
         this.troopQueue[6][0] = 'Wizard';
         this.troopQueue[6][1] = 0;
         this.troopQueue[7] = new Array(2);
         this.troopQueue[7][0] = 'Healer';
         this.troopQueue[7][1] = 0;
         this.troopQueue[8] = new Array(2);
         this.troopQueue[8][0] = 'Dragon';
         this.troopQueue[8][1] = 0;
         this.troopQueue[9] = new Array(2);
         this.troopQueue[9][0] = 'Pekka';
         this.troopQueue[9][1] = 0;
      }   

      this.addTroopToQueue = function(troop){
         var trainingTimeSeconds = this.boosted == true ? (troop.trainingTimeSeconds / this.boostFactor) : troop.trainingTimeSeconds
         if(this.availableTroopQueue >= troop.housingSpace){
            this.availableTroopQueue = this.availableTroopQueue - troop.housingSpace;
            this.queueTrainingTime = this.queueTrainingTime + trainingTimeSeconds;
            for(var k=0; k < this.troopQueue.length; k++){
               if(this.troopQueue[k][0] == troop.name){
                  this.troopQueue[k][1] = this.troopQueue[k][1] + 1;
               }
            }
            return true;
         }else{
            return false;
         }
      }

      //cookie related functions
      this.setCookie = function(cookieName, index, cookieValue){
         var fullCookieName = this.name + String(index) + '_' + cookieName;
         setCookie(fullCookieName,cookieValue);
      }

      this.retrieveCookie = function(cookieName, index, defaultValue){
         var fullCookieName = this.name + String(index) + '_' + cookieName;
         var cookieValue = getCookie(fullCookieName);
         if(isNaN(cookieValue)){
            return defaultValue;
         }else{
            return Number(cookieValue);
         }
      }
   }

   function DarkBarracks(level){ 
      //static attributes
      this.name = 'DarkBarracks';
      this.level = 0;
      this.hp = 0;
      this.availableTroopQueue = 0
      this.maxTroopQueue = 0;
      this.buildingCost = 0;
      this.queueTrainingTime = 0;
      this.boosted = false;
      this.boostFactor = 4;
      this.boostDuration = 7200;

      //level base function
      this.setLevel = function(level, index){
         this.level = level;
         this.setCookie('level',index,level);
         switch(level){
            case 1:
               this.availableTroopQueue = 40;
               this.maxTroopQueue = 40;
               this.hp = 250;
               break;
            case 2:
               this.hp = 300;
               this.availableTroopQueue = 50;
               this.maxTroopQueue = 50;
               break;
            case 3:
               this.hp = 350;
               this.availableTroopQueue = 60;
               this.maxTroopQueue = 60;
               break;
            case 4:
               this.hp = 400;
               this.availableTroopQueue = 70;
               this.maxTroopQueue = 70;
               break;
            case 5:
               this.hp = 450;
               this.availableTroopQueue = 80;
               this.maxTroopQueue = 80;
               break;
            case 6:
               this.hp = 500;
               this.availableTroopQueue = 90;
               this.maxTroopQueue = 90;
               break;
            default:
               this.hp = 0;
               this.availableTroopQueue = 0
               this.maxTroopQueue = 0;
               this.buildingCost = 0;
               break;
         }

      }
      //maintenance functions
      this.initializeTroopQueue = function(){
         //reset available troop queue
         this.availableTroopQueue = this.maxTroopQueue;
         //reset queue training time
         this.queueTrainingTime = 0;
         //reset the troop array
         this.troopQueue = new Array(3);
         this.troopQueue[0] = new Array(2);
         this.troopQueue[0][0] = 'Minion';
         this.troopQueue[0][1] = 0;
         this.troopQueue[1] = new Array(2);
         this.troopQueue[1][0] = 'MrT';
         this.troopQueue[1][1] = 0;
         this.troopQueue[2] = new Array(2);
         this.troopQueue[2][0] = 'Valkyrie';
         this.troopQueue[2][1] = 0;
         this.troopQueue[3] = new Array(2);
         this.troopQueue[3][0] = 'Golem';
         this.troopQueue[3][1] = 0;
         this.troopQueue[4] = new Array(2);
         this.troopQueue[4][0] = 'Warlock';
         this.troopQueue[4][1] = 0;
         this.troopQueue[5] = new Array(2);
         this.troopQueue[5][0] = 'LavaHound';
         this.troopQueue[5][1] = 0;
      }   

      this.addTroopToQueue = function(troop){
         var trainingTimeSeconds = this.boosted == true ?  (troop.trainingTimeSeconds / this.boostFactor) : troop.trainingTimeSeconds
         if(this.availableTroopQueue >= troop.housingSpace){
            this.availableTroopQueue = this.availableTroopQueue - troop.housingSpace;
            this.queueTrainingTime = this.queueTrainingTime + trainingTimeSeconds;
            for(var k=0; k < this.troopQueue.length; k++){
               if(this.troopQueue[k][0] == troop.name){
                  this.troopQueue[k][1] = this.troopQueue[k][1] + 1;
               }
            }
            return true;
         }else{
            return false;
         }
      }

      //cookie related functions
      this.setCookie = function(cookieName, index, cookieValue){
         var fullCookieName = this.name + String(index) + '_' + cookieName;
         setCookie(fullCookieName,cookieValue);
      }

      this.retrieveCookie = function(cookieName, index, defaultValue){
         var fullCookieName = this.name + String(index) + '_' + cookieName;
         var cookieValue = getCookie(fullCookieName);
         if(isNaN(cookieValue)){
            return defaultValue;
         }else{
            return Number(cookieValue);
         }
      }
   }