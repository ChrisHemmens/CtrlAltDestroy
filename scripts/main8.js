      var troopsArray = new Array();

      var darkTroopsArray = new Array();
      var barracksArray = new Array();
      var darkBarracksArray = new Array();
      var armyCampsArray = new Array();
      var spellsArray = new Array();
      var heroesArray = new Array();
      var spellBuildingArray = new Array();
      var activeBarracks = 0;
      var regularTroopTotal = 0;
      var disableDistribution = false;
      var lastTab = 'lastTab';
      var lastDetailLevel = 'lastDetailLevel';

      function initializeArmy(){
         disableDistribution = true;
         //initializes regular troops
         troopsArray[0] = new BarbarianTroop();
         troopsArray[1] = new ArcherTroop();
         troopsArray[2] = new GoblinTroop();
         troopsArray[3] = new GiantTroop();
         troopsArray[4] = new WallBreakerTroop(1);
         troopsArray[5] = new BalloonTroop();
         troopsArray[6] = new WizardTroop();
         troopsArray[7] = new HealerTroop();
         troopsArray[8] = new DragonTroop();
         troopsArray[9] = new PekkaTroop();
         darkTroopsArray[0] = new MinionTroop();
         darkTroopsArray[1] = new MrTTroop();
         darkTroopsArray[2] = new ValkyrieTroop();
         darkTroopsArray[3] = new GolemTroop();
         darkTroopsArray[4] = new WarlockTroop();
         darkTroopsArray[5] = new LavaHoundTroop();
         spellsArray[0] = new LightningSpell();
         spellsArray[1] = new HealSpell();
         spellsArray[2] = new RageSpell();
         spellsArray[3] = new JumpSpell();
         spellsArray[4] = new FreezeSpell();
         spellsArray[5] = new PoisonSpell();
         spellsArray[6] = new EarthquakeSpell();
         spellsArray[7] = new HasteSpell();
         heroesArray[0] = new BurgerKingHero();
         heroesArray[1] = new ArcherQueenHero();
         heroesArray[2] = new GrandWardenHero();
         spellBuildingArray[0] = new SpellFactory();
         spellBuildingArray[1] = new DarkSpellFactory();

         //initiatlize the army total
         var armyCampTotalElement = document.getElementById('armyCampTotal');
         if(armyCampTotalElement){
            var armyCampTotalValue = getCookie(armyCampTotalElement.id);
            if(armyCampTotalValue){
               armyCampTotalElement.value = armyCampTotalValue;
            }else{
               armyCampTotalElement.value = 240;
            }
            fireEvent(armyCampTotalElement,'blur');
         }

         //initiatlize the spell factory level based on the old cookie for quantity
         
         if(spellBuildingArray[0].retrieveCookie('level',101) == 101){
            var spellsTotalValue = getCookie('spellsTotalElement.id');
            if(spellsTotalValue){
            	if(spellsTotalValue > 5){
            		spellsTotalValue = 5;
            	}
            	if(spellsTotalValue < 0){
            		spellsTotalValue = 0;
            	}
            	spellBuildingArray[i].retrieveCookie('level',spellsTotalValue);
            }
         }
		

         //retrieve cookies and set level/quantity for regular troops
         for(var i=0; i<troopsArray.length; i++){
            //retrieve quantity element
            var troopQuantityElement = document.getElementById(troopsArray[i].name + '_Quantity');
            var troopQuantity = troopsArray[i].retrieveArmyCookie('quantity','');
            if(troopQuantity > 0){
               troopQuantityElement.value = troopQuantity;
            }

            //retrieve level select
            var troopLevelElement = document.getElementById(troopsArray[i].name + '_level');
            var troopLevel = troopsArray[i].retrieveArmyCookie('level',1);
            //set the select element to the right index
            //since the index is off from level by one
            //no action necessary if the troop level is one
            if(troopLevel > 1){
               troopLevelElement.selectedIndex = Number(troopLevel) - 1;
            }
            fireEvent(troopLevelElement,'change');
         }

         //retrieve cookies and set level/quantity for dark troops
         for(var j=0; j<darkTroopsArray.length; j++){
            //retrieve quantity element
            var troopQuantityElement = document.getElementById(darkTroopsArray[j].name + '_Quantity');
            var troopQuantity = darkTroopsArray[j].retrieveArmyCookie('quantity','');
            if(troopQuantity > 0){
               troopQuantityElement.value = troopQuantity;
            }

            //retrieve level select
            var troopLevelElement = document.getElementById(darkTroopsArray[j].name + '_level');
            var troopLevel = darkTroopsArray[j].retrieveArmyCookie('level',1);
            //set the select element to the right index
            //since the index is off from level by one
            //no action necessary if the troop level is one
            if(troopLevel > 1){
               troopLevelElement.selectedIndex = Number(troopLevel) - 1;
            }
            fireEvent(troopLevelElement,'change');
         }

         //retrieve cookies and set level/quantity for heroes
         for(var j=0; j<heroesArray.length; j++){
            //retrieve level select
            var troopLevelElement = document.getElementById(heroesArray[j].name + '_level');
            var troopLevel = heroesArray[j].retrieveArmyCookie('level',1);
            //set the select element to the right index
            //since the index is off from level by one
            //no action necessary if the troop level is one
            if(troopLevel > 1){
               troopLevelElement.selectedIndex = Number(troopLevel);
            }
            fireEvent(troopLevelElement,'change');
         }

         //retrieve cookies and set level/quantity for spells
         for(var j=0; j<spellsArray.length; j++){
            //retrieve quantity element
            var spellQuantityElement = document.getElementById(spellsArray[j].name + '_Quantity');
            var spellQuantity = spellsArray[j].retrieveSpellCookie('quantity','');
            if(spellQuantity > 0){
               spellQuantityElement.value = spellQuantity;
            }

            //retrieve level select
            var spellLevelElement = document.getElementById(spellsArray[j].name + '_level');
            var spellLevel = spellsArray[j].retrieveSpellCookie('level',1);
            //set the select element to the right index
            //since the index is off from level by one
            //no action necessary if the troop level is one
            if(spellLevel > 1){
               spellLevelElement.selectedIndex = Number(spellLevel) - 1;
            }
            fireEvent(spellLevelElement,'change');
         }
         

         //retrieve cookies and set spell building level
         for(var i=0; i<spellBuildingArray.length; i++){
            //retrieve level select
            var spellBuildingLevelElement = document.getElementById('spellBuildingLevelSelect' + i);
            var defaultValue = 0;

            var spellBuildingLevel = spellBuildingArray[i].retrieveCookie('level',defaultValue);

            spellBuildingLevelElement.selectedIndex = Number(spellBuildingLevel);
            
            fireEvent(spellBuildingLevelElement,'change');
         }

         //initialize barracks
         barracksArray[0] = new Barracks();
         barracksArray[1] = new Barracks();
         barracksArray[2] = new Barracks();
         barracksArray[3] = new Barracks();

         //retrieve cookies and set barracks level
         for(var i=0; i<barracksArray.length; i++){
            //retrieve level select
            var barracksLevelElement = document.getElementById('barracksLevelSelect' + i);
            var defaultValue = 0;
            if(i == 0){
               defaultValue = 1;
            }
            var barracksLevel = barracksArray[i].retrieveCookie('level',i,defaultValue);

            barracksLevelElement.selectedIndex = Number(barracksLevel);
            
            fireEvent(barracksLevelElement,'change');
         }

         //initialize dark barracks
         darkBarracksArray[0] = new DarkBarracks();
         darkBarracksArray[1] = new DarkBarracks();
         //retrieve cookies and set barracks level
         for(var i=0; i<darkBarracksArray.length; i++){
            //retrieve level select
            var darkBarracksLevelElement = document.getElementById('darkBarracksLevelSelect' + i);
            var defaultValue = 0;
            if(i == 0){
               defaultValue = 1;
            }
            var darkBarracksLevel = darkBarracksArray[i].retrieveCookie('level',i,defaultValue);

            darkBarracksLevelElement.selectedIndex = Number(darkBarracksLevel);
            
            fireEvent(darkBarracksLevelElement,'change');
         }

         disableDistribution = false;
         distributeTroops();

         attachTouchEvents();
      }

      function collapseExpand(hide,show,tr,displayValue){
         hide.style.display = 'none';
         show.style.display = 'inline';
         tr.style.display = displayValue;
      }

      function setTroopSpellTotalElixir(){
         var totalSpellElixirElement = document.getElementById('totalSpellElixir');
         var totalSpellDarkElixirElement = document.getElementById('totalSpellDarkElixir');
         var totalTroopElixirElement = document.getElementById('totalElixir');
         var totalTroopDarkElixirElement = document.getElementById('totalDarkElixir');
         var totalElixirElement = document.getElementById('troopSpellElixirUsed');
         var totalDarkElixirElement = document.getElementById('troopSpellDarkElixirUsed');
         var totalSpellElixir = 0;
         var totalSpellDarkElixir = 0;
         var totalTroopElixir = 0;
         var totalTroopDarkElixir = 0;
         var totalDarkElixir = 0;
         var totalElixir = 0;

         if (totalSpellElixirElement){
            totalSpellElixir = getText(totalSpellElixirElement).replace(',','');
         }
         if (totalSpellDarkElixirElement){
            totalSpellDarkElixir = getText(totalSpellDarkElixirElement).replace(',','');
         }
         if (totalTroopElixirElement){
            totalTroopElixir = getText(totalTroopElixirElement).replace(',','');
         }
         if (totalTroopDarkElixirElement){
            totalTroopDarkElixir = getText(totalTroopDarkElixirElement).replace(',','');
         }

         totalElixir = Number(totalSpellElixir) +  Number(totalTroopElixir);

         totalDarkElixir =  Number(totalTroopDarkElixir) + Number(totalSpellDarkElixir);

         changeText(totalElixirElement,addCommas(totalElixir));
         changeText(totalDarkElixirElement,addCommas(totalDarkElixir));
      }

      function clearLevel(clearDark){
         if(clearDark){
            //clear level for dark troops
            for(var i=0; i<darkTroopsArray.length; i++){
               //retrieve level select
               var troopLevelElement = document.getElementById(darkTroopsArray[i].name + '_level');
               troopLevelElement.selectedIndex = 0;
               fireEvent(troopLevelElement,'change');
            }
         }else{
            //clear level for regular troops
            for(var i=0; i<troopsArray.length; i++){
               //retrieve level select
               var troopLevelElement = document.getElementById(troopsArray[i].name + '_level');
               troopLevelElement.selectedIndex = 0;
               fireEvent(troopLevelElement,'change');
            }
         }
      }

      function clearQuantity(clearDark){
         if(clearDark){
            //clear quantity for dark troops
            for(var i=0; i<darkTroopsArray.length; i++){
               //retrieve quantity element
               var troopQuantityElement = document.getElementById(darkTroopsArray[i].name + '_Quantity');
               troopQuantityElement.value = '0';
               fireEvent(troopQuantityElement,'blur');
            }
         }else{
            //clear quantity for regular troops
            for(var i=0; i<troopsArray.length; i++){
               //retrieve quantity element
               var troopQuantityElement = document.getElementById(troopsArray[i].name + '_Quantity');
               troopQuantityElement.value = '0';
               fireEvent(troopQuantityElement,'blur');
            }
         }
      }

      function clearLevelSpells(){
         //clear level for spells
         for(var i=0; i<spellsArray.length; i++){
            //retrieve level select
            var spellLevelElement = document.getElementById(spellsArray[i].name + '_level');
            spellLevelElement.selectedIndex = 0;
            fireEvent(spellLevelElement,'change');
         }
      }

      function clearQuantitySpells(){
         //clear quantity for spells
         for(var i=0; i<spellsArray.length; i++){
            //retrieve quantity element
            var spellQuantityElement = document.getElementById(spellsArray[i].name + '_Quantity');
            spellQuantityElement.value = '0';
            fireEvent(spellQuantityElement,'blur');
         }
      }

      function changeImage(imageElement,baseImageSourceText,level){
         //change image
         if(imageElement){
            imageElement.src = baseImageSourceText + level + '.png';
         }
      }
      
      function changeImageLevel(elementBaseName,level, maxLevel){
      	nonMaxBadge = document.getElementById(elementBaseName + 'NonMaxBadge');
      	maxBadge = document.getElementById(elementBaseName + 'MaxBadge');
      	levelText = document.getElementById(elementBaseName + 'LevelText');
      	
      	if(level == maxLevel){
      		nonMaxBadge.style.display = 'none';
      		maxBadge.style.display = 'inline';
      	}else{
      		nonMaxBadge.style.display = 'inline';
      		maxBadge.style.display = 'none';
      	}
      	changeText(levelText,level);
      }

      function changeArmyTotal (armyTotalElement){
         //set the mirrored army total values to the new value
         var armyCampTotalRegularElement = document.getElementById('armyCampTotalRegular');
         var armyCampTotalDarkElement = document.getElementById('armyCampTotalDark');
         if(armyCampTotalRegularElement){
            changeText(armyCampTotalRegularElement,armyTotalElement.value);
         }
         if(armyCampTotalDarkElement){
            changeText(armyCampTotalDarkElement,armyTotalElement.value);
         }
         //set the cookie to the new value
         setCookie(armyTotalElement.id,armyTotalElement.value);
      }

      /****HELPER FUNCTIONS*****/
      function tabTo(tabNumber){
         //get tab parts
         var leftMostTab = document.getElementById('leftTab1');
         var distMidTab = document.getElementById('midTab1');
         var tabJoin = document.getElementById('tabJoin1');
         var stalkMidTab = document.getElementById('midTab2');
         //var stalkRightTab = document.getElementById('rightTab2');
         var tabJoin2 = document.getElementById('tabJoin2');
         var linksMidTab = document.getElementById('midTab3');
         var rightMostTab = document.getElementById('rightTab3');

         //get content panes
         var barracksDistributor = document.getElementById('barracksDistributor');
         var revengeStalkulator = document.getElementById('revengeStalkulator');
         var linksPane = document.getElementById('linksPane');
         switch (tabNumber){
            case 1:
               //switch middle format
               distMidTab.className ='midTabActive';
               stalkMidTab.className ='midTabInactive';
               linksMidTab.className ='midTabInactive';
               //switch left most format
               leftMostTab.src = 'images/leftActive.png';
               //switch join format
               tabJoin.src = 'images/tabJoinLeftActive.png';
               tabJoin2.src = 'images/tabJoinBothInactive.png';
               //switch right most format
               rightMostTab.src = 'images/rightInactive.png';
               //change panges
               barracksDistributor.style.display='inline';
               revengeStalkulator.style.display='none';
               linksPane.style.display='none';
               break;
            case 2:
               distMidTab.className ='midTabInactive';
               stalkMidTab.className ='midTabActive';
               linksMidTab.className ='midTabInactive';
               //switch left most format
               leftMostTab.src = 'images/leftInactive.png';
               //switch join format
               tabJoin.src = 'images/tabJoinLeftInactive.png';
               tabJoin2.src = 'images/tabJoinLeftActive.png';
               //switch right most format
               rightMostTab.src = 'images/rightInactive.png';
               //change panges
               barracksDistributor.style.display='none';
               revengeStalkulator.style.display='inline';
               linksPane.style.display='none';
               break;
            case 3:
               distMidTab.className ='midTabInactive';
               stalkMidTab.className ='midTabInactive';
               linksMidTab.className ='midTabActive';
               //switch left most format
               leftMostTab.src = 'images/leftInactive.png';
               //switch join format
               tabJoin.src = 'images/tabJoinBothInactive.png';
               tabJoin2.src = 'images/tabJoinLeftInactive.png';
               //switch right most format
               rightMostTab.src = 'images/rightActive.png';
               //change panges
               barracksDistributor.style.display='none';
               revengeStalkulator.style.display='none';
               linksPane.style.display='inline';
               break;
         
         }
         //set the cookie to the new tab
         setCookie(lastTab,tabNumber);
      }

      function fireEvent(element,event){
          if (document.createEventObject){
          // dispatch for IE
          var evt = document.createEventObject();
          return element.fireEvent('on'+event,evt)
          }
          else{
          // dispatch for firefox + others
          var evt = document.createEvent("HTMLEvents");
          evt.initEvent(event, true, true ); // event type,bubbling,cancelable
          return !element.dispatchEvent(evt);
          }
      }

      function setError(errorMessage){
         var errorField = document.getElementById("errorText");
         changeText(errorField,errorMessage);
         errorField.style.display = 'inline';
      }

      function clearError(){
         var error = document.getElementById("errorText");
         changeText(error,'');
         error.style.display = 'none';
      }

      function changeText(elem, changeVal) {  
         if (document.all) {
            elem.innerText = changeVal;
         } else {
            elem.textContent = changeVal;
         }
      }

      function getText(elem){
         if (document.all) {
            return elem.innerText;
         } else {
            return elem.textContent;
         }
      }

      function addCommas(nStr){
         nStr += '';
         x = nStr.split('.');
         x1 = x[0];
         x2 = x.length > 1 ? '.' + x[1] : '';
         var rgx = /(\d+)(\d{3})/;
         while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
         }
         return x1 + x2;
      }

      function secondstotime(secs){
          var t = new Date(1970,0,1);
          t.setSeconds(secs);
          var s = t.toTimeString().substr(0,8);
          if(secs > 86399)
            s = Math.floor((t - Date.parse("1/1/70")) / 3600000) + s.substr(2);
          return s;
      }

      function hideCounter(){
         var imgs = document.getElementsByTagName('img');
         var lnks = document.getElementsByTagName('a');

         if(imgs){
            hide(imgs);
         }
         if(lnks){
            hide(lnks);
         }
      }

      function hide(elements){
         for(var z= 0; z < elements.length; z++){
            if(!elements[z].id){
               elements[z].style.display = 'none';
            }
         }
      }

      /******Cookie Functions*******/
      function setCookie(c_name,value,exdays){
         var exdate=new Date();
         if(!exdays){
            exdays = 30;
         }
         exdate.setDate(exdate.getDate() + exdays);
         var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
         document.cookie=c_name + "=" + c_value;
      }

      function getCookie(c_name){
         var i,x,y,ARRcookies=document.cookie.split(";");
         for (i=0;i<ARRcookies.length;i++){
            x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
            y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
            x=x.replace(/^\s+|\s+$/g,"");
            if (x==c_name){
               return unescape(y);
            }
         }
      }

      function shareArmy(){
         //loop through troops and build the image TR
         var text = '[TABLE="class: cms_table_grid"][TR]';
         var darkTroops = false;
         var regularTroops = false;
         var queueTime = 0;
         //add regular troops images
         for(var i=0; i<troopsArray.length; i++){
            //retrieve quantity element
            if(troopsArray[i].quantity > 0){
               regularTroops = true;
               text = text + '[TD="align: center"][IMG]' + troopsArray[i].smallImagePath + '[/IMG][/TD]';
            }
         }
         //add dark troops images
         for(var i=0; i<darkTroopsArray.length; i++){
            //retrieve quantity element
            if(darkTroopsArray[i].quantity > 0){
               darkTroops = true;
               text = text + '[TD="align: center"][IMG]' + darkTroopsArray[i].smallImagePath + '[/IMG][/TD]';
            }
         }

         //add spells images
         for(var i=0; i<spellsArray.length; i++){
            //retrieve quantity element
            if(spellsArray[i].quantity > 0){
               regularTroops = true;
               text = text + '[TD="align: center"][IMG]' + spellsArray[i].smallImagePath + '[/IMG][/TD]';
            }
         }

         //add elixir image
         if(regularTroops){
            text = text + '[TD="align: center"][IMG]http://i.imgur.com/mJKShCh.png[/IMG][/TD]';
         }
         //add dark elixir image
         if(darkTroops){
            text = text + '[TD="align: center"][IMG]http://i.imgur.com/rEhpJv1.png[/IMG][/TD]';
         }
         //add time image
         text = text + '[TD="align: center"][IMG]http://i.imgur.com/NdLMSdO.png[/IMG][/TD]';

         //end TR and start TR
         text = text + "[/TR][TR]";

         //add regular troops quantity
         for(var i=0; i<troopsArray.length; i++){
            //retrieve quantity element
            if(troopsArray[i].quantity > 0){
               text = text + '[TD="align: center"]' + String(troopsArray[i].quantity) + '[/TD]';
            }
         }
         //add dark troops quantity
         for(var i=0; i<darkTroopsArray.length; i++){
            //retrieve quantity element
            if(darkTroopsArray[i].quantity > 0){
               text = text + '[TD="align: center"]' + String(darkTroopsArray[i].quantity) + '[/TD]';
            }
         }
         //add spells quantities
         for(var i=0; i<spellsArray.length; i++){
            //retrieve quantity element
            if(spellsArray[i].quantity > 0){
               text = text + '[TD="align: center"]' + String(spellsArray[i].quantity) + '[/TD]';
            }
         }
         //retrieve the elixir cost
         if(regularTroops){
            var totalElixir = document.getElementById('troopSpellElixirUsed');
            text = text + '[TD="align: center"]' + getText(totalElixir) + '[/TD]';
         }
         //retrieve the dark elixir cost
         if(darkTroops){
            var totalDarkElixir = document.getElementById('totalDarkElixir');
            text = text + '[TD="align: center"]' + getText(totalDarkElixir) + '[/TD]';
         }

         //retrieve the maximum queue time
         for(var i=0; i<barracksArray.length; i++){
            //retrieve quantity element
            if(barracksArray[i].queueTrainingTime > queueTime){
               queueTime = barracksArray[i].queueTrainingTime;
            }
         }
         for(var i=0; i<darkBarracksArray.length; i++){
            //retrieve quantity element
            if(darkBarracksArray[i].queueTrainingTime > queueTime){
               queueTime = darkBarracksArray[i].queueTrainingTime;
            }
         }
         text = text + '[TD="align: center"]' + secondstotime(queueTime) + '[/TD]';

         //end TR and TABLE
         text = text + '[/TR][/TABLE][CENTER][SIZE=1][URL="http://clashingTools.com"]generated by clashingTools[/URL][/SIZE][/CENTER]';
         copyToClipboard(text);
      }
      function copyToClipboard(text) {
        window.prompt("Copy to clipboard: Ctrl+C, Enter\nShare your army with your forum buddies with this BBCode!", text);
      }

      function boostBuilding(building){
         building.boosted = building.boosted ? false : true;
      }

      function setBoostBackground(tableCell, boostField, overrideImage){
         var imageText;
         if(overrideImage){
            imageText = overrideImage;
         }else{
            imageText = 'images/boosted.png';
         }
         if(boostField.boosted){
            tableCell.style.backgroundImage  = 'url(' + imageText + ')';
            tableCell.style.backgroundPosition  = 'center';
            tableCell.style.backgroundRepeat = 'no-repeat';
         }else{
            tableCell.style.backgroundImage  = '';
         }
      }
      
      function setHeroBackground(boostField){
      	 var heroImage = document.getElementById(boostField.name+'Image');
         if(boostField.boosted){
            heroImage.className="heroImageBoosted";
         }else{
            heroImage.className="heroImageNotBoosted";
         }
      }

      function attachTouchEvents(){
         //barracks
            document.getElementById('barracksBoostDiv0').addEventListener('touchstart', 
                  function() {
                    document.getElementById('barracksBoost0').src='images/boostButtonPressed.png';
                  });

            document.getElementById('barracksBoostDiv0').addEventListener('touchend', 
                  function() {
                     document.getElementById('barracksBoost0').src='images/boostButton.png';
                  });
                  
            document.getElementById('barracksBoostDiv1').addEventListener('touchstart', 
                  function() {
                    document.getElementById('barracksBoost1').src='images/boostButtonPressed.png';
                  });

            document.getElementById('barracksBoostDiv1').addEventListener('touchend', 
                  function() {
                     document.getElementById('barracksBoost1').src='images/boostButton.png';
                  });
                  
            document.getElementById('barracksBoostDiv2').addEventListener('touchstart', 
                  function() {
                    document.getElementById('barracksBoost2').src='images/boostButtonPressed.png';
                  });

            document.getElementById('barracksBoostDiv2').addEventListener('touchend', 
                  function() {
                     document.getElementById('barracksBoost2').src='images/boostButton.png';
                  });
                  
            document.getElementById('barracksBoostDiv3').addEventListener('touchstart', 
                  function() {
                    document.getElementById('barracksBoost3').src='images/boostButtonPressed.png';
                  });

            document.getElementById('barracksBoostDiv3').addEventListener('touchend', 
                  function() {
                     document.getElementById('barracksBoost3').src='images/boostButton.png';
                  });

        //darkbarrakcs
            document.getElementById('darkBarracksBoostDiv0').addEventListener('touchstart', 
                  function() {
                    document.getElementById('darkBarracksBoost0').src='images/boostButtonPressed.png';
                  });

            document.getElementById('darkBarracksBoostDiv0').addEventListener('touchend', 
                  function() {
                     document.getElementById('darkBarracksBoost0').src='images/boostButton.png';
                  });
                  
            document.getElementById('darkBarracksBoostDiv1').addEventListener('touchstart', 
                  function() {
                    document.getElementById('darkBarracksBoost1').src='images/boostButtonPressed.png';
                  });

            document.getElementById('darkBarracksBoostDiv1').addEventListener('touchend', 
                  function() {
                     document.getElementById('darkBarracksBoost1').src='images/boostButton.png';
                  });

         //spell factory
        document.getElementById('spellBoostDiv').addEventListener('touchstart', 
                  function() {
                    document.getElementById('spellFactoryBoost').src='images/boostButtonPressed.png';
                  });

        document.getElementById('spellBoostDiv').addEventListener('touchend', 
                  function() {
                     document.getElementById('spellFactoryBoost').src='images/boostButton.png';
                  });

         //heroes
        document.getElementById('heroesBoostDiv0').addEventListener('touchstart', 
                  function() {
                    document.getElementById('burgerKingBoost').src='images/boostButtonPressed.png';
                  });

        document.getElementById('heroesBoostDiv0').addEventListener('touchend', 
                  function() {
                     document.getElementById('burgerKingBoost').src='images/boostButton.png';
                  });

        document.getElementById('heroesBoostDiv1').addEventListener('touchstart', 
                  function() {
                    document.getElementById('archerQueenBoost').src='images/boostButtonPressed.png';
                  });

        document.getElementById('heroesBoostDiv1').addEventListener('touchend', 
                  function() {
                     document.getElementById('archerQueenBoost').src='images/boostButton.png';
                  });
      }