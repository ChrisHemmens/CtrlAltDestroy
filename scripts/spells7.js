   function Spell(){
      this.name = 'Parent';
      this.level = 0;
      this.range = 0;
      this.trainingTimeSeconds = 0;
      this.spellFactoryLevelRequired = 0;
      this.trainingCost = 0;
      this.quantity = 0;
      this.imagePath = '';
      this.smallImagePath = '';
      this.boostFactor = 4;
      this.boosted = false;
      this.boostDuration = 7200;
      this.resourceType = 'elixir';
      this.maxLevel = 1;

      this.calculateElixirCost = function(){
         return this.trainingCost * this.quantity;
      }
      this.calculateTrainingTime = function(building){
         var trainingTimeSeconds = building.boosted == true ?  (this.trainingTimeSeconds / building.boostFactor) : this.trainingTimeSeconds
         return trainingTimeSeconds * this.quantity;
      }
      this.setQuantity = function(quantity){
         this.quantity = quantity;
         this.setSpellCookie('quantity',quantity);
      }
      //cookie related functions
      this.setSpellCookie = function(cookieName, cookieValue){
         var fullCookieName = this.name + '_' + cookieName;
         setCookie(fullCookieName,cookieValue);
      }

      this.retrieveSpellCookie = function(cookieType, defaultValue){
         var cookieName = this.name + '_' + cookieType;
         var cookieLevel = getCookie(cookieName);
         if(isNaN(cookieLevel)){
            return defaultValue;
         }else{
            return Number(cookieLevel);
         }
      }
   }

   function LightningSpell(){
      Spell.call(this);
      //static attributes
      this.name = 'Lightning';
      this.trainingTimeSeconds = 1200;
      this.spellFactoryLevelRequired = 1;
      this.housingSpace = 2;
      this.imagePath = 'images/lightning';
      this.maxLevel = 7;

      //level based attributes
      this.setLevel = function(level){
         this.level = level;
         this.setSpellCookie('level',level);
         switch(level){
            case 1:
               this.trainingCost = 15000;
               this.smallImagePath = 'http://i.imgur.com/IW1I5m1.png';
               break;
            case 2:
               this.trainingCost = 16500;
               this.smallImagePath = 'http://i.imgur.com/6FzH2mc.png';
               break;
            case 3:
               this.trainingCost = 18000;
               this.smallImagePath = 'http://i.imgur.com/dq9fGRl.png';
               break;
            case 4:
               this.trainingCost = 20000;
               this.smallImagePath = 'http://i.imgur.com/n9TYJ7a.png';
               break;
            case 5:
               this.trainingCost = 22000;
               this.smallImagePath = 'http://i.imgur.com/GbHCJHu.png';
               break;
            case 6:
               this.trainingCost = 24000;
               this.smallImagePath = 'http://i.imgur.com/QUI4Pki.png';
               break;
            case 7:
               this.trainingCost = 26000;
               this.smallImagePath = 'http://i.imgur.com/pIG2c9m.png';
               break;
            default:
               this.trainingCost = 0;
               this.smallImagePath = 'http://i.imgur.com/IW1I5m1.png';
               break;
         }
      }
   }

   function HealSpell(){
      Spell.call(this);
      //static attributes
      this.name = 'Heal';
      this.trainingTimeSeconds = 1200;
      this.spellFactoryLevelRequired = 1;
      this.housingSpace = 2;
      this.imagePath = 'images/heal';
      this.maxLevel = 6;

      //level based attributes
      this.setLevel = function(level){
         this.level = level;
         this.setSpellCookie('level',level);
         switch(level){
            case 1:
               this.trainingCost = 15000;
               this.smallImagePath = 'http://i.imgur.com/LIh8REv.png';
               break;
            case 2:
               this.trainingCost = 16500;
               this.smallImagePath = 'http://i.imgur.com/D7JqFH1.png';
               break;
            case 3:
               this.trainingCost = 18000;
               this.smallImagePath = 'http://i.imgur.com/Nb4VnR5.png';
               break;
            case 4:
               this.trainingCost = 20000;
               this.smallImagePath = 'http://i.imgur.com/Yrw1avn.png';
               break;
            case 5:
               this.trainingCost = 22000;
               this.smallImagePath = 'http://i.imgur.com/Bov38az.png';
               break;
            case 6:
               this.trainingCost = 24000;
               this.smallImagePath = 'http://i.imgur.com/ekB8bjD.png';
               break;
            default:
               this.trainingCost = 0;
               this.smallImagePath = 'http://i.imgur.com/LIh8REv.png';
               break;
         }
      }
   }

   function RageSpell(){
      Spell.call(this);
      //static attributes
      this.name = 'Rage';
      this.trainingTimeSeconds = 1800;
      this.spellFactoryLevelRequired = 3;
      this.housingSpace = 2;
      this.imagePath = 'images/rage';
      this.maxLevel = 5;

      //level based attributes
      this.setLevel = function(level){
         this.level = level;
         this.setSpellCookie('level',level);
         switch(level){
            case 1:
               this.trainingCost = 23000;
               this.smallImagePath = 'http://i.imgur.com/9RmMoiG.png';
               break;
            case 2:
               this.trainingCost = 25000;
               this.smallImagePath = 'http://i.imgur.com/994aCRE.png';
               break;
            case 3:
               this.trainingCost = 27000;
               this.smallImagePath = 'http://i.imgur.com/OUxnlRC.png';
               break;
            case 4:
               this.trainingCost = 30000;
               this.smallImagePath = 'http://i.imgur.com/0axyfOV.png';
               break;
            case 5:
               this.trainingCost = 33000;
               this.smallImagePath = 'http://i.imgur.com/lgikabB.png';
               break;
            default:
               this.trainingCost = 0;
               this.smallImagePath = 'http://i.imgur.com/9RmMoiG.png';
               break;
         }
      }
   }


   function JumpSpell(){
      Spell.call(this);
      //static attributes
      this.name = 'Jump';
      this.trainingTimeSeconds = 1800;
      this.spellFactoryLevelRequired = 4;
      this.housingSpace = 2;
      this.imagePath = 'images/jump';
      this.maxLevel = 3;

      //level based attributes
      this.setLevel = function(level){
         this.level = level;
         this.setSpellCookie('level',level);
         switch(level){
            case 1:
               this.trainingCost = 23000;
               this.smallImagePath = 'http://i.imgur.com/LonkdV0.png';
               break;
            case 2:
               this.trainingCost = 29000;
               this.smallImagePath = 'http://i.imgur.com/a76YRmK.png';
               break;
            case 2:
               this.trainingCost = 31000;
               this.smallImagePath = 'http://i.imgur.com/rw94EvJ.png';
               break;
            default:
               this.trainingCost = 0;
               this.smallImagePath = 'http://i.imgur.com/LonkdV0.png';
               break;
         }
      }
   }

   function FreezeSpell(){
      Spell.call(this);
      //static attributes
      this.name = 'Freeze';
      this.trainingTimeSeconds = 1800;
      this.spellFactoryLevelRequired = 5;
      this.housingSpace = 2;
      this.imagePath = 'images/freeze';
      this.maxLevel = 5;

      //level based attributes
      this.setLevel = function(level){
         this.level = level;
         this.setSpellCookie('level',level);
         switch(level){
            case 1:
               this.trainingCost = 26000;
               this.smallImagePath = 'http://i.imgur.com/hFuDPpE.png';
               break;
            case 2:
               this.trainingCost = 29000;
               this.smallImagePath = 'http://i.imgur.com/U3mfNeJ.png';
               break;
            case 3:
               this.trainingCost = 31000;
               this.smallImagePath = 'http://i.imgur.com/ibIXHqO.png';
               break;
            case 4:
               this.trainingCost = 33000;
               this.smallImagePath = 'http://i.imgur.com/LFWLDYS.png';
               break;
            case 5:
               this.trainingCost = 35000;
               this.smallImagePath = 'http://i.imgur.com/hxJEVt9.png';
               break;
            default:
               this.trainingCost = 0;
               this.smallImagePath = 'http://i.imgur.com/hFuDPpE.png';
               break;
         }
      }
   }


   function PoisonSpell(){
      Spell.call(this);
      //static attributes
      this.name = 'Poison';
      this.trainingTimeSeconds = 900;
      this.spellFactoryLevelRequired = 1;
      this.housingSpace = 1;
      this.imagePath = 'images/poison';
      this.resourceType = 'darkElixir';
      this.maxLevel = 4;
      
      //level based attributes
      this.setLevel = function(level){
         this.level = level;
         this.setSpellCookie('level',level);
         switch(level){
            case 1:
               this.trainingCost = 95;
               this.smallImagePath = ''
               break;
            case 2:
               this.trainingCost = 110;
               this.smallImagePath = '';
               break;
            case 3:
               this.trainingCost = 125;
               this.smallImagePath = '';
               break;
            case 4:
               this.trainingCost = 140;
               this.smallImagePath = '';
               break;
            default:
               this.trainingCost = 0;
               this.smallImagePath = '';
               break;
         }
      }
   }
   
   
   function EarthquakeSpell(){
      Spell.call(this);
      //static attributes
      this.name = 'Earthquake';
      this.trainingTimeSeconds = 900;
      this.spellFactoryLevelRequired = 2;
      this.housingSpace = 1;
      this.imagePath = 'images/earthquake';
      this.resourceType = 'darkElixir';
      this.maxLevel = 4;
      
      //level based attributes
      this.setLevel = function(level){
         this.level = level;
         this.setSpellCookie('level',level);
         switch(level){
            case 1:
               this.trainingCost = 125;
               this.smallImagePath = ''
               break;
            case 2:
               this.trainingCost = 140;
               this.smallImagePath = '';
               break;
            case 3:
               this.trainingCost = 160;
               this.smallImagePath = '';
               break;
            case 4:
               this.trainingCost = 180;
               this.smallImagePath = '';
               break;
            default:
               this.trainingCost = 0;
               this.smallImagePath = '';
               break;
         }
      }
   }
   
   function HasteSpell(){
      Spell.call(this);
      //static attributes
      this.name = 'Haste';
      this.trainingTimeSeconds = 900;
      this.spellFactoryLevelRequired = 2;
      this.housingSpace = 1;
      this.imagePath = 'images/haste';
      this.resourceType = 'darkElixir';
      this.maxLevel = 4;
      
      //level based attributes
      this.setLevel = function(level){
         this.level = level;
         this.setSpellCookie('level',level);
         switch(level){
            case 1:
               this.trainingCost = 80;
               this.smallImagePath = ''
               break;
            case 2:
               this.trainingCost = 85;
               this.smallImagePath = '';
               break;
            case 3:
               this.trainingCost = 90;
               this.smallImagePath = '';
               break;
            case 4:
               this.trainingCost = 95;
               this.smallImagePath = '';
               break;
            default:
               this.trainingCost = 0;
               this.smallImagePath = '';
               break;
         }
      }
   }

   function calculateSingleSpell(spellType,inputQuantity) {
   	  var elixirCost;
   	  var building;
      if(!inputQuantity){
         inputQuantity = 0;
      }
      spellType.setQuantity(inputQuantity);
      //set the appropriate elixir field
	  trainingTime = document.getElementById(spellType.name + '_TrainingTime');
      if(spellType.resourceType == 'elixir'){
		elixirCost = document.getElementById(spellType.name + '_ElixirCost');
		building = spellBuildingArray[0];
      }else{
		elixirCost = document.getElementById(spellType.name + '_DarkElixirCost');
		building = spellBuildingArray[1];
      }
      if (!spellType.quantity || spellType.quantity == 0){
         changeText(elixirCost,'0');
         changeText(trainingTime,'00:00:00');
      }else{
         changeText(elixirCost,addCommas(spellType.calculateElixirCost()));
         changeText(trainingTime,addCommas(secondstotime(spellType.calculateTrainingTime(building))));
      }
      changeImageLevel(spellType.name,spellType.level,spellType.maxLevel);
      setSpellTotals();
   }

   function setSpellTotals(){
      var spanElements = document.getElementsByTagName('span');
      var spellsUsed = document.getElementById('spellsUsed');
      var spellsTotalCapacity = document.getElementById('spellsTotal');
      var totalElixir = document.getElementById('totalSpellElixir');
      var totalDarkElixir = document.getElementById('totalSpellDarkElixir');
      var totalTime = document.getElementById('totalSpellTime');
      var totalElixirTime = document.getElementById('SpellFactory_TrainingTime');
      var totalDarkElixirTime = document.getElementById('DarkSpellFactory_TrainingTime');
      var spells = 0;
      var elixir = 0;
      var darkElixir = 0;
      var time = 0;
      var elixirTime = 0;
      var darkTime = 0;
      var spellCapacity = 0;
      //loop through spell buildings
      for(var j=0;j<spellBuildingArray.length;j++){
      	spellCapacity = spellCapacity + spellBuildingArray[j].capacity;
      }
      
      var building;
      for(var n=0;n<spellsArray.length;n++){
     	if(spellsArray[n].resourceType == 'elixir'){
     		building = spellBuildingArray[0];
		}else{
     		building = spellBuildingArray[1];
		}
         if(spellsArray[n].quantity > 0){
            spells = Number(spells) + (Number(spellsArray[n].quantity * Number(spellsArray[n].housingSpace)));
         }
         if(spellsArray[n].calculateElixirCost() > 0){
         	if(spellsArray[n].resourceType == 'elixir'){
         		elixir = elixir + spellsArray[n].calculateElixirCost();
			}else{
         		darkElixir = darkElixir + spellsArray[n].calculateElixirCost();
			}
         }
         if(spellsArray[n].calculateTrainingTime(building) > 0){
         	if(spellsArray[n].resourceType == 'elixir'){
            	elixirTime = elixirTime + spellsArray[n].calculateTrainingTime(building);
			}else{
            	darkTime = darkTime + spellsArray[n].calculateTrainingTime(building);
            }
         }
      }
      //set the time to the factory that has the highest amount of time
      if(darkTime > elixirTime){
      	time = darkTime;
      }else{
      	time = elixirTime;
      }
      changeText(spellsUsed,addCommas(spells));
      changeText(spellsTotalCapacity,addCommas(spellCapacity));
      changeText(totalElixir,addCommas(elixir));
      changeText(totalDarkElixir,addCommas(darkElixir));
      changeText(totalTime,addCommas(secondstotime(time)));
      changeText(totalElixirTime,addCommas(secondstotime(elixirTime)));
      changeText(totalDarkElixirTime,addCommas(secondstotime(darkTime)));
      setTroopSpellTotalElixir();
   }

      function changeSpellBoost(building){
         //set the new boosted value
         building.boosted = building.boosted ? false : true;
         for(i=0;i < spellsArray.length;i++){
            //recalculate the training time for the spell
            var spellQuantity = document.getElementById(spellsArray[i].name + '_Quantity');
            if(spellQuantity){
               calculateSingleSpell(spellsArray[i],spellQuantity.value);
            }
         }
      }