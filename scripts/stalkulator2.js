var collectorMultiplier = .50;
var darkCollectorMultiplier = .75;
var penaltyArray;
var percentAvailableRegularArray;
var percentAvailableDarkArray;
var regularCapArray;
var darkCapArray;
var attackPenalty;
var storageMultiplier;
var darkStorageMultiplier;
var storageLootCap;
var darkStorageLootCap;
var townHallAmount = 1000;

function stalkulate(){
   //set up bonuses
   penaltyArray = setupPenalty();
   percentAvailableRegularArray = setupRegular();
   percentAvailableDarkArray = setupDark();
   regularCapArray = setupRegularCap();
   darkCapArray = setupDarkCap();

   //get town halls
   var attackingTownHallElement = document.getElementById('attackingTownHall');
   var defendingTownHallElement = document.getElementById('defendingTownHall');

   //calculate attack bonus
   var attackingTownHall = attackingTownHallElement.options[attackingTownHallElement.selectedIndex].value;
   var defendingTownHall = defendingTownHallElement.options[defendingTownHallElement.selectedIndex].value;
   var towhHallDifference = Number(attackingTownHall) - Number (defendingTownHall);

   //calculate townhall based attributes
   attackPenalty = penaltyArray[Number(attackingTownHall) - Number (defendingTownHall)];
   storageMultiplier = percentAvailableRegularArray[Number(defendingTownHall)];
   darkStorageMultiplier = percentAvailableDarkArray[Number(defendingTownHall)];
   storageLootCap = regularCapArray[Number(defendingTownHall)];
   darkStorageLootCap = darkCapArray[Number(defendingTownHall)];

   //get the detail level and call the appropriate calculation
   var detailLevels = document.getElementsByName('detailLevel');
   for(var i=0; i<detailLevels.length; i++){
      if(detailLevels[i].checked == true){
         switch(i){
            case 0:
               calculateLow();
               break;
            case 1:
               calculateMedium();
               break;
            case 2:
               calculateHigh();
               break;
         }
      }
   }
}

function calculateLow(){
   //retrieve elements
   var totalGoldElement = document.getElementById('goldTotal');
   var totalElixirElement = document.getElementById('elixirTotal');
   var totalDarkElixirElement = document.getElementById('darkElixirTotal');
   var availableDarkElixirElement = document.getElementById('availableDarkElixir');
   var availableElixirElement = document.getElementById('availableElixir');
   var availableGoldElement = document.getElementById('availableGold');

   //default storages to zero
   var totalGold = 0;
   var totalElixir = 0;
   var totalDarkElixir = 0;

   //set storages if populated
   if(totalGoldElement){
      totalGold = totalGoldElement.value;
   }
   if(totalElixirElement){
      totalElixir = totalElixirElement.value;
   }
   if(totalDarkElixirElement){
      totalDarkElixir = totalDarkElixirElement.value;
   }

   //calculate gold
   var availableGold = calculateLoot(0,totalGold,0,storageMultiplier,attackPenalty,true,storageLootCap);

   //calculate elixir
   var availableElixir = calculateLoot(0,totalElixir,0,storageMultiplier,attackPenalty,true,storageLootCap);

   //calculate dark elixir
   var availableDarkElixir = calculateLoot(0,totalDarkElixir,0,darkStorageMultiplier,attackPenalty,false,darkStorageLootCap);

   //set the results
   changeText(availableGoldElement,addCommas(availableGold));
   changeText(availableElixirElement,addCommas(availableElixir));
   changeText(availableDarkElixirElement,addCommas(availableDarkElixir));
}


function calculateMedium(){
   //retrieve elements
   var totalCollectorGoldElement = document.getElementById('totalCollectorGold');
   var totalStoragesGoldElement = document.getElementById('totalStoragesGold');
   var totalCollectorElixirElement = document.getElementById('totalCollectorElixir');
   var totalStoragesElixirElement = document.getElementById('totalStoragesElixir');
   var totalCollectorDarkElixirElement = document.getElementById('totalCollectorDarkElixir');
   var totalStoragesDarkElixirElement = document.getElementById('totalStoragesDarkElixir');
   var availableDarkElixirElement = document.getElementById('availableDarkElixir');
   var availableElixirElement = document.getElementById('availableElixir');
   var availableGoldElement = document.getElementById('availableGold');
   //default storages to zero
   var totalCollectorGold = 0;
   var totalStoragesGold = 0;
   var totalCollectorElixir = 0;
   var totalStoragesElixir = 0;
   var totalCollectorDarkElixir = 0;
   var totalStoragesDarkElixir = 0;

   //set storages if populated
   if(totalCollectorGoldElement){
      totalCollectorGold = totalCollectorGoldElement.value;
   }
   if(totalStoragesGoldElement){
      totalStoragesGold = totalStoragesGoldElement.value;
   }
   if(totalCollectorElixirElement){
      totalCollectorElixir = totalCollectorElixirElement.value;
   }
   if(totalStoragesElixirElement){
      totalStoragesElixir = totalStoragesElixirElement.value;
   }
   if(totalCollectorDarkElixirElement){
      totalCollectorDarkElixir = totalCollectorDarkElixirElement.value;
   }
   if(totalStoragesDarkElixirElement){
      totalStoragesDarkElixir = totalStoragesDarkElixirElement.value;
   }

   //calculate gold
   var availableGold = calculateLoot(totalCollectorGold,totalStoragesGold,collectorMultiplier,storageMultiplier,attackPenalty,true,storageLootCap);

   //calculate elixir
   var availableElixir = calculateLoot(totalCollectorElixir,totalStoragesElixir,collectorMultiplier,storageMultiplier,attackPenalty,true,storageLootCap);

   //calculate dark elixir
   var availableDarkElixir = calculateLoot(totalCollectorDarkElixir,totalStoragesDarkElixir,darkCollectorMultiplier,darkStorageMultiplier,attackPenalty,false,darkStorageLootCap);

   //set the results
   changeText(availableGoldElement,addCommas(availableGold));
   changeText(availableElixirElement,addCommas(availableElixir));
   changeText(availableDarkElixirElement,addCommas(availableDarkElixir));
}

function calculateHigh(){
   var availableDarkElixirElement = document.getElementById('availableDarkElixir');
   var availableElixirElement = document.getElementById('availableElixir');
   var availableGoldElement = document.getElementById('availableGold');
   //default storages to zero
   var totalCollectorGold = 0;
   var totalStoragesGold = 0;
   var totalCollectorElixir = 0;
   var totalStoragesElixir = 0;
   var totalCollectorDarkElixir = 0;
   var totalStoragesDarkElixir = 0;

   //get gold and elixir storage/collectors
   for(var i=1; i < 7; i++){
      //gold
      var currentGoldStorage = document.getElementById('goldStorage'+String(i));
      if(currentGoldStorage){
         if(currentGoldStorage.value){
            totalStoragesGold = Number(totalStoragesGold) + Number(currentGoldStorage.value);
         }
      }

      var currentGoldCollector = document.getElementById('goldCollector'+String(i));
      if(currentGoldCollector){
         if(currentGoldCollector.value){
            totalCollectorGold = Number(totalCollectorGold) + Number(currentGoldCollector.value);
         }
      }
      //elixir
      var currentElixirStorage = document.getElementById('elixirStorage'+String(i));
      if(currentElixirStorage){
         if(currentElixirStorage.value){
            totalStoragesElixir = Number(totalStoragesElixir) + Number(currentElixirStorage.value);
         }
      }

      var currentElixirCollector = document.getElementById('elixirCollector'+String(i));
      if(currentElixirCollector){
         if(currentElixirCollector.value){
            totalCollectorElixir = Number(totalCollectorElixir) + Number(currentElixirCollector.value);
         }
      }
      //dark elixir (note there aren't 6 of either of these but the if statement should
      //take care of that
      var currentDarkElixirStorage = document.getElementById('darkElixirStorage'+String(i));
      if(currentDarkElixirStorage){
         if(currentDarkElixirStorage.value){
            totalStoragesDarkElixir = Number(totalStoragesDarkElixir) + Number(currentDarkElixirStorage.value);
         }
      }

      var currentDarkElixirCollector = document.getElementById('darkElixirCollector'+String(i));
      if(currentDarkElixirCollector){
         if(currentDarkElixirCollector.value){
            totalCollectorDarkElixir = Number(totalCollectorDarkElixir) + Number(currentDarkElixirCollector.value);
         }
      }
   }

   //calculate gold
   var availableGold = calculateLoot(totalCollectorGold,totalStoragesGold,collectorMultiplier,storageMultiplier,attackPenalty,true,storageLootCap);

   //calculate elixir
   var availableElixir = calculateLoot(totalCollectorElixir,totalStoragesElixir,collectorMultiplier,storageMultiplier,attackPenalty,true,storageLootCap);

   //calculate dark elixir
   var availableDarkElixir = calculateLoot(totalCollectorDarkElixir,totalStoragesDarkElixir,darkCollectorMultiplier,darkStorageMultiplier,attackPenalty,false,darkStorageLootCap);

   //set the results
   changeText(availableGoldElement,addCommas(availableGold));
   changeText(availableElixirElement,addCommas(availableElixir));
   changeText(availableDarkElixirElement,addCommas(availableDarkElixir));
}

function setupPenalty(){
   var localPenaltyArray = new Array(17);
   localPenaltyArray[9] = 0.05
   localPenaltyArray[8] = 0.05
   localPenaltyArray[7] = 0.05
   localPenaltyArray[6] = 0.05
   localPenaltyArray[5] = 0.05
   localPenaltyArray[4] = 0.05
   localPenaltyArray[3] = 0.25
   localPenaltyArray[2] = 0.5
   localPenaltyArray[1] = 0.9
   localPenaltyArray[0] = 1
   localPenaltyArray[-1] = 1
   localPenaltyArray[-2] = 1
   localPenaltyArray[-3] = 1
   localPenaltyArray[-4] = 1
   localPenaltyArray[-5] = 1
   localPenaltyArray[-6] = 1
   localPenaltyArray[-7] = 1
   localPenaltyArray[-8] = 1
   localPenaltyArray[-9] = 1

   return localPenaltyArray;
}

function setupRegular(){
   var storageMultiplierArray = new Array(10);
   storageMultiplierArray[1] = 0.2;
   storageMultiplierArray[2] = 0.2;
   storageMultiplierArray[3] = 0.2;
   storageMultiplierArray[4] = 0.2;
   storageMultiplierArray[5] = 0.2;
   storageMultiplierArray[6] = 0.18;
   storageMultiplierArray[7] = 0.16;
   storageMultiplierArray[8] = 0.14;
   storageMultiplierArray[9] = 0.12;
   storageMultiplierArray[10] = 0.1;

   return storageMultiplierArray;
}

function setupRegularCap(){
   var lootCapArray = new Array(10);
   lootCapArray[1] = 200000;
   lootCapArray[2] = 200000;
   lootCapArray[3] = 200000;
   lootCapArray[4] = 200000;
   lootCapArray[5] = 200000;
   lootCapArray[6] = 200000;
   lootCapArray[7] = 250000;
   lootCapArray[8] = 300000;
   lootCapArray[9] = 350000;
   lootCapArray[10] = 400000;

   return lootCapArray;
}

function setupDark(){
   var storageMultiplierArray = new Array(17);
   storageMultiplierArray[1] = 0.06;
   storageMultiplierArray[2] = 0.06;
   storageMultiplierArray[3] = 0.06;
   storageMultiplierArray[4] = 0.06;
   storageMultiplierArray[5] = 0.06;
   storageMultiplierArray[6] = 0.06;
   storageMultiplierArray[7] = 0.06;
   storageMultiplierArray[8] = 0.06;
   storageMultiplierArray[9] = 0.05;
   storageMultiplierArray[10] = 0.04;

   return storageMultiplierArray;
}

function setupDarkCap(){
   var lootCapArray = new Array(17);
   lootCapArray[1] = 2000;
   lootCapArray[2] = 2000;
   lootCapArray[3] = 2000;
   lootCapArray[4] = 2000;
   lootCapArray[5] = 2000;
   lootCapArray[6] = 2000;
   lootCapArray[7] = 2000;
   lootCapArray[8] = 2000;
   lootCapArray[9] = 2500;
   lootCapArray[10] = 3000;

   return lootCapArray;
}

function calculateLoot(collector,storage,collectorMulti,storageMulti,attackPenalty,useTownHallStorage,storageLootCap){
   var townHallStorage = townHallAmount;
   //calculate available storage
   var storageAvailable = Number(storage) * Number(storageMulti);
   if(storageLootCap && storageAvailable > storageLootCap){
      storageAvailable = storageLootCap;
   }

   //apply attack bonus
   var storageAvailable = Number(storageAvailable) * Number(attackPenalty);

   //reapply the town hall amount
   if(useTownHallStorage && Number(storageAvailable) > 0){
      storageAvailable = Number(storageAvailable) + townHallStorage;
   }

   //calculate available collector
   var collectorAvailable = Number(collector) * Number(collectorMulti);
   //apply attack bonus
   collectorAvailable = Number(collectorAvailable) * Number(attackPenalty);

   return Math.floor(Number(storageAvailable) + Number(collectorAvailable));
}

function changeDetailLevel(detailLevel){
   switch (detailLevel){
      case 'low':
         document.getElementById('low').style.display='inline';
         document.getElementById('medium').style.display='none';
         document.getElementById('high').style.display='none';
         break;
      case 'medium':
         document.getElementById('low').style.display='none';
         document.getElementById('medium').style.display='inline';
         document.getElementById('high').style.display='none';
         break;
      case 'high':    
         document.getElementById('low').style.display='none';   
         document.getElementById('medium').style.display='none';
         document.getElementById('high').style.display='inline';    
         break;
   }
   //set the detail level cookie
   setCookie(lastDetailLevel,detailLevel);
   stalkulate();
}

function initializeStalkulator(){       
   //default to the last detail level
   var detailLevel = getCookie(lastDetailLevel);
   if(lastDetailLevel != 'low' && lastDetailLevel != 'medium' && lastDetailLevel != 'high'){
      //no cookie means use low detail
      detailLevel = 'medium';
   }

   var detailLevels = document.getElementsByName('detailLevel');
   
   switch(detailLevel){
      case 'low':
         detailLevels[0].checked = true;
         break;
      case 'medium':
         detailLevels[1].checked = true;
         break;
      case 'high':
         detailLevels[2].checked = true;
         break;
   }
   
   changeDetailLevel(detailLevel);
}