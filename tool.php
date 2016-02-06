<html>
<head>
    <title>CtrlAltDestroy - Tool</title>
	<meta charset="utf-8"  />
	<link rel="shortcut icon" type="image/jpg" href="image/awhyeah2.jpg">
	<link href="DitIsStyle.css" rel="stylesheet" type="text/css" />
			  
    <!-- <link href="tablecloth/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
	<script type="text/javascript" src="tablecloth/tablecloth.js"></script>-->
	<link rel="stylesheet" type="text/css" href="scripts/armyPlanner2.css"/>
	<script language="JavaScript" src="scripts/troops9.js"></script>
	<script language="JavaScript" src="scripts/barracks2.js"></script>
	<script language="JavaScript" src="scripts/main8.js"></script>
	<script language="JavaScript" src="scripts/distribution3.js"></script>
	<script language="JavaScript" src="scripts/stalkulator2.js"></script>
	<script language="JavaScript" src="scripts/spells7.js"></script>
	<script language="JavaScript" src="scripts/heroes4.js"></script>
	<script language="JavaScript" src="scripts/spellBuildings.js"></script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71479321-1', 'auto');
  ga('send', 'pageview');

</script>
	<style>
</style>
</head>
 <body onLoad="initializeArmy();">
<div id="menu">
   <ul>
      <li><a href="/coc/index.php" title="Home">Home</a></li>
      <li><a href="/coc/claninfo.php" title="Chat">Claninfo</a><li>
      <li><a href="/coc/walloffame.php" title="Chat">Wall of fame</a><li>
      <li><a href="/coc/stats.php" title="Stats">Stats</a></li>
      <li><a href="/coc/tool.php" title="Tool">Tool</a><li>
   </ul>
</div>
</br></br></br></br>
   <!--Tabulation-->
   <div id="navcontainer">
   </div>
   <div id="barracksDistributor">
      <div id="errorText" class="errorText">test</div>
      <table class="dataTable">
         <tr>
            <td class="sectionHeader">
               <span>
                  <img src="http://clashingtools.com/images/expandNode.gif" id="barracksExpand"  style="display:none;" onClick="collapseExpand(this,document.getElementById('barracksCollapse'),document.getElementById('barracks'),'block');">
                  <img src="http://clashingtools.com/images/collapseNode.gif" id="barracksCollapse" onClick="collapseExpand(this,document.getElementById('barracksExpand'),document.getElementById('barracks'),'none');">
                  Barracks + Camp Capacity
               </span>
            </td>
         </tr>
         <tr id="barracks" class="section">
            <td>
               <table>
                  <tr>                  
                     <!--barracks one-->
                     <td rowspan="2" id="barracksTd0">
                        <img id='barracksImage0' src="http://clashingtools.com/images/barracks10.png"/>
                     </td> 
                     <td>
                        <select onChange="barracksArray[0].setLevel(this.selectedIndex,0); changeText(document.getElementById('barracksMaxQueue0'),barracksArray[0].maxTroopQueue); changeText(document.getElementById('barracksAvailableQueue0'),barracksArray[0].availableTroopQueue); distributeTroops(); changeImage(document.getElementById('barracksImage0'),'http://clashingtools.com/images/barracks',this.selectedIndex);
                        changeImage(document.getElementById('barracksDistroImage0'),'http://clashingtools.com/images/barracksSmall',this.selectedIndex);" id="barracksLevelSelect0">
                           <option>0</option>
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                           <option>6</option>
                           <option>7</option>
                           <option>8</option>
                           <option>9</option>
                           <option>10</option>
                        </select>
                     </td>
                     <td rowspan="2" style="width:43px">
                       <div onmousedown="document.getElementById('barracksBoost0').src='http://clashingtools.com/images/boostButtonPressed.png';" onmouseout="document.getElementById('barracksBoost0').src='http://clashingtools.com/images/boostButton.png';" onmouseup="document.getElementById('barracksBoost0').src='http://clashingtools.com/images/boostButton.png';" onClick="boostBuilding(barracksArray[0]);distributeTroops();setBoostBackground(document.getElementById('barracksTd0'),barracksArray[0]);setBoostBackground(document.getElementById('barracksDistro0'),barracksArray[0],'http://clashingtools.com/images/boostedSmall.png');" id="barracksBoostDiv0"><img src="http://clashingtools.com/images/boostButton.png" id="barracksBoost0"></img></div>
                     </td>
                     <!--barracks two-->
                     <td rowspan="2" id="barracksTd1">
                        <img id='barracksImage1' src="http://clashingtools.com/images/barracks10.png"/>
                     </td>
                     <td >
                        <select onChange="barracksArray[1].setLevel(this.selectedIndex,1); changeText(document.getElementById('barracksMaxQueue1'),barracksArray[1].maxTroopQueue); changeText(document.getElementById('barracksAvailableQueue1'),barracksArray[1].availableTroopQueue); distributeTroops(); changeImage(document.getElementById('barracksImage1'),'http://clashingtools.com/images/barracks',this.selectedIndex);
                        changeImage(document.getElementById('barracksDistroImage1'),'http://clashingtools.com/images/barracksSmall',this.selectedIndex);" id="barracksLevelSelect1">
                           <option>0</option>
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                           <option>6</option>
                           <option>7</option>
                           <option>8</option>
                           <option>9</option>
                           <option>10</option>
                        </select>
                     </td>
                     <td rowspan="2" style="width:43px">
                       <div onmousedown="document.getElementById('barracksBoost1').src='http://clashingtools.com/images/boostButtonPressed.png';" onmouseout="document.getElementById('barracksBoost1').src='http://clashingtools.com/images/boostButton.png';" onmouseup="document.getElementById('barracksBoost1').src='http://clashingtools.com/images/boostButton.png';" onClick="boostBuilding(barracksArray[1]);distributeTroops();setBoostBackground(document.getElementById('barracksTd1'),barracksArray[1]);setBoostBackground(document.getElementById('barracksDistro1'),barracksArray[1],'http://clashingtools.com/images/boostedSmall.png');" id="barracksBoostDiv1"><img src="http://clashingtools.com/images/boostButton.png" id="barracksBoost1"></img></div>
                     </td>
                     <!--barracks three-->
                     <td rowspan="2" id="barracksTd2">
                        <img id='barracksImage2' src="http://clashingtools.com/images/barracks10.png"/>
                     </td>
                     <td >
                        <select onChange="barracksArray[2].setLevel(this.selectedIndex,2); changeText(document.getElementById('barracksMaxQueue2'),barracksArray[2].maxTroopQueue); changeText(document.getElementById('barracksAvailableQueue0'),barracksArray[2].availableTroopQueue); distributeTroops(); changeImage(document.getElementById('barracksImage2'),'http://clashingtools.com/images/barracks',this.selectedIndex);
                        changeImage(document.getElementById('barracksDistroImage2'),'http://clashingtools.com/images/barracksSmall',this.selectedIndex);" id="barracksLevelSelect2">
                           <option>0</option>
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                           <option>6</option>
                           <option>7</option>
                           <option>8</option>
                           <option>9</option>
                           <option>10</option>
                        </select>
                     </td>
                     <td rowspan="2" style="width:43px">
                       <div onmousedown="document.getElementById('barracksBoost2').src='http://clashingtools.com/images/boostButtonPressed.png';" onmouseout="document.getElementById('barracksBoost2').src='http://clashingtools.com/images/boostButton.png';" onmouseup="document.getElementById('barracksBoost2').src='http://clashingtools.com/images/boostButton.png';" onClick="boostBuilding(barracksArray[2]);distributeTroops();setBoostBackground(document.getElementById('barracksTd2'),barracksArray[2]);setBoostBackground(document.getElementById('barracksDistro2'),barracksArray[2],'http://clashingtools.com/images/boostedSmall.png');" id="barracksBoostDiv2"><img src="http://clashingtools.com/images/boostButton.png" id="barracksBoost2"></img></div>
                     </td>
                     <!--barracks four-->
                     <td rowspan="2" id="barracksTd3">
                        <img id='barracksImage3' src="http://clashingtools.com/images/barracks10.png"/>
                     </td>
                     <td >
                        <select onChange="barracksArray[3].setLevel(this.selectedIndex,3); changeText(document.getElementById('barracksMaxQueue3'),barracksArray[3].maxTroopQueue); changeText(document.getElementById('barracksAvailableQueue3'),barracksArray[3].availableTroopQueue); distributeTroops(); changeImage(document.getElementById('barracksImage3'),'http://clashingtools.com/images/barracks',this.selectedIndex);
                        changeImage(document.getElementById('barracksDistroImage3'),'http://clashingtools.com/images/barracksSmall',this.selectedIndex);" id="barracksLevelSelect3">
                           <option>0</option>
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                           <option>6</option>
                           <option>7</option>
                           <option>8</option>
                           <option>9</option>
                           <option>10</option>
                        </select>
                     </td>
                     <td rowspan="2" style="width:43px">
                       <div onmousedown="document.getElementById('barracksBoost3').src='http://clashingtools.com/images/boostButtonPressed.png';" onmouseout="document.getElementById('barracksBoost3').src='http://clashingtools.com/images/boostButton.png';" onmouseup="document.getElementById('barracksBoost3').src='http://clashingtools.com/images/boostButton.png';" onClick="boostBuilding(barracksArray[3]);distributeTroops();setBoostBackground(document.getElementById('barracksTd3'),barracksArray[3]);setBoostBackground(document.getElementById('barracksDistro3'),barracksArray[3],'http://clashingtools.com/images/boostedSmall.png');" id="barracksBoostDiv3"><img src="http://clashingtools.com/images/boostButton.png" id="barracksBoost3"></img></div>
                     </td>
                     <!--army camp-->
                     <td rowspan="2">
                        <img id='armyCampImage' src="http://clashingtools.com/images/armyCamp.png"/>
                     </td>
                     <td  style="padding-right:10px" rowspan="2">
                        <span class="text" name="armyCampUsed" id="armyCampUsed" tabIndex="-1">0</span>
                        <span class="text" tabIndex="-1">/</span>
                        <input type="number" class="armyQuantity" onBlur="changeArmyTotal(this);" id="armyCampTotal"/>
                     </td>
                  </tr>
                  <tr>
                     <!--barracks one-->
                     <td>
                        <span class="text" id="barracksAvailableQueue0" tabIndex="-1">0</span>
                        <span class="text" tabIndex="-1">/</span>
                        <span class="text" id="barracksMaxQueue0" tabIndex="-1">0</span>
                     </td>
                     <!--barracks two-->
                     <td>
                        <span class="text" id="barracksAvailableQueue1" tabIndex="-1"></span>
                        <span class="text" tabIndex="-1">/</span>
                        <span class="text" id="barracksMaxQueue1" tabIndex="-1"></span>
                     </td>
                     <!--barracks three-->
                     <td>
                        <span class="text" id="barracksAvailableQueue2" tabIndex="-1"></span>
                        <span class="text" tabIndex="-1">/</span>
                        <span class="text" id="barracksMaxQueue2" tabIndex="-1"></span>
                     </td>
                     <!--barracks four-->
                     <td>
                        <span class="text" id="barracksAvailableQueue3" tabIndex="-1"></span>
                        <span class="text" tabIndex="-1">/</span>
                        <span class="text" id="barracksMaxQueue3" tabIndex="-1"></span>
                     </td>
                  </tr>
               </table>
            </td>
         </tr>
      </table>
      <div class="divider"></div>
      <table class="dataTable">
         <tr>
            <td class="sectionHeader">
               <span>
                  <img src="http://clashingtools.com/images/expandNode.gif" id="troopsExpand"  style="display:none;" onClick="collapseExpand(this,document.getElementById('troopsCollapse'),document.getElementById('troops'),'block');">
                  <img src="http://clashingtools.com/images/collapseNode.gif" id="troopsCollapse" onClick="collapseExpand(this,document.getElementById('troopsExpand'),document.getElementById('troops'),'none');">
                  Troops
               </span>
            </td>
         </tr>
         <!--new version-->
         <tr id="troops" class="section">
            <td>
               <table>
                  <!--Regular Troops Part 1a-->
                  <tr>
                     <!--barbarian-->
                     <td rowspan="2" style="position:relative;" align="center"> 
                         <img id='BarbarianImage' src="http://clashingtools.com/images/barbarian1.png" class="troopSpellImage"/>
                         <img id="BarbarianNonMaxBadge" src="http://clashingtools.com/images/nonMaxBadge.png" class="troopSpellNonMaxBadge"/>
                         <img id="BarbarianMaxBadge" src="http://clashingtools.com/images/maxBadge.png" class="troopSpellMaxBadge"/>
                         <div id="BarbarianLevelText" class="troopSpellLevelText"></div>
                     </td>
                     <td>
                        <select onChange="troopsArray[0].setLevel(this.selectedIndex + 1); calculateSingle(troopsArray[0], document.getElementById('Barbarian_Quantity').value);" id="Barbarian_level">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                           <option>6</option>
                           <option>7</option>
                        </select>
                     </td>
                     <td><img id='barbarianElixirImage' src="http://clashingtools.com/images/dropElixir.png"/></td>
                     <td class="elixir"><span id="Barbarian_ElixirCost" tabIndex="-1"/></td>
                     <!--archer-->
                     <td rowspan="2" style="position:relative;padding-left:5px" align="center"> 
                         <img id='ArcherImage' src="http://clashingtools.com/images/archer1.png" class="troopSpellImage"/>
                         <img id="ArcherNonMaxBadge" src="http://clashingtools.com/images/nonMaxBadge.png" class="troopSpellNonMaxBadge"/>
                         <img id="ArcherMaxBadge" src="http://clashingtools.com/images/maxBadge.png" class="troopSpellMaxBadge"/>
                         <div id="ArcherLevelText" class="troopSpellLevelText"></div>
                     </td>
                     <td>
                        <select onChange="troopsArray[1].setLevel(this.selectedIndex + 1); calculateSingle(troopsArray[1], document.getElementById('Archer_Quantity').value);" id="Archer_level">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                           <option>6</option>
                           <option>7</option>
                        </select>
                     </td>
                     <td><img id='archerElixirImage' src="http://clashingtools.com/images/dropElixir.png"/></td>
                     <td class="elixir"><span id="Archer_ElixirCost" tabIndex="-1"/></td>
                     <!--giant-->
                     <td rowspan="2" style="position:relative;padding-left:5px" align="center"> 
                         <img id='GiantImage' src="http://clashingtools.com/images/giant1.png" class="troopSpellImage"/>
                         <img id="GiantNonMaxBadge" src="http://clashingtools.com/images/nonMaxBadge.png" class="troopSpellNonMaxBadge"/>
                         <img id="GiantMaxBadge" src="http://clashingtools.com/images/maxBadge.png" class="troopSpellMaxBadge"/>
                         <div id="GiantLevelText" class="troopSpellLevelText"></div>
                     </td>
                     <td>
                        <select onChange="troopsArray[3].setLevel(this.selectedIndex + 1); calculateSingle(troopsArray[3],document.getElementById('Giant_Quantity').value);" id="Giant_level">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                           <option>6</option>
                           <option>7</option>
                        </select>
                     </td>
                     <td><img id='giantElixirImage' src="http://clashingtools.com/images/dropElixir.png"/></td>
                     <td class="elixir"><span id="Giant_ElixirCost" tabIndex="-1"/></td>
                     <!--goblin-->
                     <td rowspan="2" style="position:relative;padding-left:5px" align="center"> 
                         <img id='GoblinImage' src="http://clashingtools.com/images/goblin1.png" class="troopSpellImage"/>
                         <img id="GoblinNonMaxBadge" src="http://clashingtools.com/images/nonMaxBadge.png" class="troopSpellNonMaxBadge"/>
                         <img id="GoblinMaxBadge" src="http://clashingtools.com/images/maxBadge.png" class="troopSpellMaxBadge"/>
                         <div id="GoblinLevelText" class="troopSpellLevelText"></div>
                     </td>
                     <td>
                        <select onChange="troopsArray[2].setLevel(this.selectedIndex + 1); calculateSingle(troopsArray[2],document.getElementById('Goblin_Quantity').value);" id="Goblin_level">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                           <option>6</option>
                        </select>
                     </td>
                     <td><img id='goblinElixirImage' src="http://clashingtools.com/images/dropElixir.png"/></td>
                     <td class="elixir"><span id="Goblin_ElixirCost" tabIndex="-1"/></td>
                     <!--wall breaker-->
                     <td rowspan="2" style="position:relative;padding-left:5px" align="center"> 
                         <img id='WallBreakerImage' src="http://clashingtools.com/images/wallBreaker1.png" class="troopSpellImage"/>
                         <img id="WallBreakerNonMaxBadge" src="http://clashingtools.com/images/nonMaxBadge.png" class="troopSpellNonMaxBadge"/>
                         <img id="WallBreakerMaxBadge" src="http://clashingtools.com/images/maxBadge.png" class="troopSpellMaxBadge"/>
                         <div id="WallBreakerLevelText" class="troopSpellLevelText"></div>
                     </td>
                     <td><select onChange="troopsArray[4].setLevel(this.selectedIndex + 1); calculateSingle(troopsArray[4],document.getElementById('WallBreaker_Quantity').value);" id="WallBreaker_level">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                           <option>6</option>
                        </select>
                     </td>
                     <td><img id='wallBreakerElixirImage' src="http://clashingtools.com/images/dropElixir.png"/></td>
                     <td class="elixir"><span id="WallBreaker_ElixirCost" tabIndex="-1"/></td>
                  </tr>
                  <!--Regular Troops Part 1b-->
                  <tr style="padding-bottom:10px;">
                     <!--barbarian-->
                     <td><input type="number" class="quantity" onBlur="calculateSingle(troopsArray[0],this.value);distributeTroops();" id="Barbarian_Quantity"/></td>
                     <td><img id='barbarianClockImage' src="http://clashingtools.com/images/clock.png"/></td>
                     <td class="time"><span id="Barbarian_TrainingTime" tabIndex="-1"></td>
                     <!--archer-->
                     <td><input type="number" class="quantity" onBlur="calculateSingle(troopsArray[1],this.value);distributeTroops();" id="Archer_Quantity"/></td>
                     <td><img id='archerClockImage' src="http://clashingtools.com/images/clock.png"/></td>
                     <td class="time"><span id="Archer_TrainingTime" tabIndex="-1"/></td>
                     <!--giant-->
                     <td><input type="number" class="quantity" onBlur="calculateSingle(troopsArray[3],this.value);distributeTroops();" id="Giant_Quantity"/></td>
                     <td><img id='giantClockImage' src="http://clashingtools.com/images/clock.png"/></td>
                     <td class="time"><span id="Giant_TrainingTime" tabIndex="-1"/></td>
                     <!--goblin-->
                     <td><input type="number" class="quantity" onBlur="calculateSingle(troopsArray[2],this.value);distributeTroops();" id="Goblin_Quantity"/></td>
                     <td><img id='goblinClockImage' src="http://clashingtools.com/images/clock.png"/></td>
                     <td class="time"><span id="Goblin_TrainingTime" tabIndex="-1"/></td>
                     <!--wall breaker-->
                     <td><input type="number" class="quantity" onBlur="calculateSingle(troopsArray[4],this.value);distributeTroops();" id="WallBreaker_Quantity"/></td>
                     <td><img id='wallBreakerClockImage' src="http://clashingtools.com/images/clock.png"/></td>
                     <td class="time"><span id="WallBreaker_TrainingTime" tabIndex="-1"/></td>
                  </tr>
                  <tr><td style="padding-bottom:10px;"></td></tr>
                  <!--Regular Troops Part 2a-->
                  <tr>
                     <!--balloon-->
                     <td rowspan="2" style="position:relative" align="center"> 
                         <img id='BalloonImage' src="http://clashingtools.com/images/balloon1.png" class="troopSpellImage"/>
                         <img id="BalloonNonMaxBadge" src="http://clashingtools.com/images/nonMaxBadge.png" class="troopSpellNonMaxBadge"/>
                         <img id="BalloonMaxBadge" src="http://clashingtools.com/images/maxBadge.png" class="troopSpellMaxBadge"/>
                         <div id="BalloonLevelText" class="troopSpellLevelText"></div>
                     </td>
                     <td>
                        <select onChange="troopsArray[5].setLevel(this.selectedIndex + 1); calculateSingle(troopsArray[5],document.getElementById('Balloon_Quantity').value);" id="Balloon_level">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                           <option>6</option>
                        </select>
                     </td>
                     <td><img id='balloonElixirImage' src="http://clashingtools.com/images/dropElixir.png"/></td>
                     <td class="elixir"><span id="Balloon_ElixirCost" tabIndex="-1"/></td>
                     <!--wizard-->
                     <td rowspan="2" style="position:relative;padding-left:5px" align="center"> 
                         <img id='WizardImage' src="http://clashingtools.com/images/wizard1.png" class="troopSpellImage"/>
                         <img id="WizardNonMaxBadge" src="http://clashingtools.com/images/nonMaxBadge.png" class="troopSpellNonMaxBadge"/>
                         <img id="WizardMaxBadge" src="http://clashingtools.com/images/maxBadge.png" class="troopSpellMaxBadge"/>
                         <div id="WizardLevelText" class="troopSpellLevelText"></div>
                     </td>
                     <td><select onChange="troopsArray[6].setLevel(this.selectedIndex + 1); calculateSingle(troopsArray[6],document.getElementById('Wizard_Quantity').value);" id="Wizard_level">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                           <option>6</option>
                        </select>
                     </td>
                     <td><img id='wizardElixirImage' src="http://clashingtools.com/images/dropElixir.png"/></td>
                     <td class="elixir"><span id="Wizard_ElixirCost" tabIndex="-1"/></td>
                     <!--Healer-->
                     <td rowspan="2" style="position:relative;padding-left:5px" align="center"> 
                         <img id='HealerImage' src="http://clashingtools.com/images/healer1.png" class="troopSpellImage"/>
                         <img id="HealerNonMaxBadge" src="http://clashingtools.com/images/nonMaxBadge.png" class="troopSpellNonMaxBadge"/>
                         <img id="HealerMaxBadge" src="http://clashingtools.com/images/maxBadge.png" class="troopSpellMaxBadge"/>
                         <div id="HealerLevelText" class="troopSpellLevelText"></div>
                     </td>
                     <td><select onChange="troopsArray[7].setLevel(this.selectedIndex + 1); calculateSingle(troopsArray[7],document.getElementById('Healer_Quantity').value);" id="Healer_level">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                        </select>
                     </td>
                     <td><img id='healerElixirImage' src="http://clashingtools.com/images/dropElixir.png"/></td>
                     <td class="elixir"><span id="Healer_ElixirCost" tabIndex="-1"/></td>
                     <!--Dragon-->
                     <td rowspan="2" style="position:relative;padding-left:5px" align="center"> 
                         <img id='DragonImage' src="http://clashingtools.com/images/dragon1.png" class="troopSpellImage"/>
                         <img id="DragonNonMaxBadge" src="http://clashingtools.com/images/nonMaxBadge.png" class="troopSpellNonMaxBadge"/>
                         <img id="DragonMaxBadge" src="http://clashingtools.com/images/maxBadge.png" class="troopSpellMaxBadge"/>
                         <div id="DragonLevelText" class="troopSpellLevelText"></div>
                     </td>
                     <td><select onChange="troopsArray[8].setLevel(this.selectedIndex + 1); calculateSingle(troopsArray[8],document.getElementById('Dragon_Quantity').value);" id="Dragon_level">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                        </select>
                     </td>
                     <td><img id='dragonElixirImage' src="http://clashingtools.com/images/dropElixir.png"/></td>
                     <td class="elixir"><span id="Dragon_ElixirCost" tabIndex="-1"/></td>
                     <!--PEKKA-->
                     <td rowspan="2" style="position:relative;padding-left:5px" align="center"> 
                         <img id='PekkaImage' src="http://clashingtools.com/images/pekka1.png" class="troopSpellImage"/>
                         <img id="PekkaNonMaxBadge" src="http://clashingtools.com/images/nonMaxBadge.png" class="troopSpellNonMaxBadge"/>
                         <img id="PekkaMaxBadge" src="http://clashingtools.com/images/maxBadge.png" class="troopSpellMaxBadge"/>
                         <div id="PekkaLevelText" class="troopSpellLevelText"></div>
                     </td>
                     <td><select onChange="troopsArray[9].setLevel(this.selectedIndex + 1); calculateSingle(troopsArray[9],document.getElementById('Pekka_Quantity').value);" id="Pekka_level">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                        </select>
                     </td>
                     <td><img id='pekkaElixirImage' src="http://clashingtools.com/images/dropElixir.png"/></td>
                     <td class="elixir"><span id="Pekka_ElixirCost" tabIndex="-1"/></td>
                  </tr>
                  <!--Regular Troops Part 2b-->
                  <tr>
                     <!--balloon-->
                     <td><input type="number" class="quantity" onBlur="calculateSingle(troopsArray[5],this.value);distributeTroops();" id="Balloon_Quantity"/></td>
                     <td><img id='wallBreakerClockImage' src="http://clashingtools.com/images/clock.png"/></td>
                     <td class="time"><span id="Balloon_TrainingTime" tabIndex="-1"/></td>
                     <!--wizard-->
                     <td><input type="number" class="quantity" onBlur="calculateSingle(troopsArray[6],this.value);distributeTroops();" id="Wizard_Quantity"/></td>
                     <td><img id='wizardClockImage' src="http://clashingtools.com/images/clock.png"/></td>
                     <td class="time"><span id="Wizard_TrainingTime" tabIndex="-1"/></td>
                     <!--Healer-->
                     <td><input type="number" class="quantity" onBlur="calculateSingle(troopsArray[7],this.value);distributeTroops();" id="Healer_Quantity"/></td>
                     <td><img id='healerClockImage' src="http://clashingtools.com/images/clock.png"/></td>
                     <td class="time"><span id="Healer_TrainingTime" tabIndex="-1"/></td>
                     <!--Dragon-->
                     <td><input type="number" class="quantity" onBlur="calculateSingle(troopsArray[8],this.value);distributeTroops();" id="Dragon_Quantity"/></td>
                     <td><img id='dragonClockImage' src="http://clashingtools.com/images/clock.png"/></td>
                     <td class="time"><span id="Dragon_TrainingTime" tabIndex="-1"/></td>
                     <!--PEKKA-->
                     <td><input type="number" class="quantity" onBlur="calculateSingle(troopsArray[9],this.value);distributeTroops();" id="Pekka_Quantity"/></td>
                     <td><img id='pekkaClockImage' src="http://clashingtools.com/images/clock.png"/></td>
                     <td class="time"><span id="Pekka_TrainingTime" tabIndex="-1"/></td>
                  </tr>
                  <tr><td style="padding-bottom:10px;"></td></tr>
                  <tr width="100%">
                     <td colspan="20" width="100%">
                        <div style="background-image: url(http://clashingtools.com/images/midTotalBox.png); text-align:center; vertical-align: middle;">
                           <span class="capacityTotal" id="armyCampUsedRegular">0</span>
                           <span>/</span>
                           <span class="capacityTotal" id="armyCampTotalRegular">220</span>
                           <img id='totalElixirImage' src="http://clashingtools.com/images/dropElixir.png" style="padding-left: 100px;"/>
                           <span class="elixirTotal" id="totalElixir">0</span>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td colspan="20" style="text-align:center;">
                        <div>
                           <input class="button" type="button" value="Clear Level" onClick="clearLevel();"/>
                           <input class="button" type="button" value="Clear Quantity" onClick="clearQuantity();"/>
                           <input class="button" type="button" value="Clear All" onClick="clearLevel();clearQuantity();"/>
                        </div>
                     </td>
                  </tr>
               </table>
            </td>
         </tr>
      </table>
      <div class="divider"></div>
      <table class="dataTable">
         <tr>
            <td class="sectionHeader">
               <span>
                  <img src="http://clashingtools.com/images/expandNode.gif" id="barracksExpand0"  style="display:none;" onClick="collapseExpand(this,document.getElementById('barracksCollapse0'),document.getElementById('barracksTroopDistro0'),'block');">
                  <img src="http://clashingtools.com/images/collapseNode.gif" id="barracksCollapse0" onClick="collapseExpand(this,document.getElementById('barracksExpand0'),document.getElementById('barracksTroopDistro0'),'none');">
                  Troop Distribution
               </span>
            </td>
         </tr>
         <tr id="barracksTroopDistro0" class="section">
            <td>
               <table>
                  <tr>
                     <th></th>
                     <th><img src="http://clashingtools.com/images/barbarianSmall1.png"/></th>
                     <th><img src="http://clashingtools.com/images/archerSmall1.png"/></th>
                     <th><img src="http://clashingtools.com/images/giantSmall1.png"/></th>
                     <th><img src="http://clashingtools.com/images/goblinSmall1.png"/></th>
                     <th><img src="http://clashingtools.com/images/wallBreakerSmall1.png"/></th>
                     <th><img src="http://clashingtools.com/images/balloonSmall1.png"/></th>
                     <th><img src="http://clashingtools.com/images/wizardSmall1.png"/></th>
                     <th><img src="http://clashingtools.com/images/healerSmall1.png"/></th>
                     <th><img src="http://clashingtools.com/images/dragonSmall1.png"/></th>
                     <th><img src="http://clashingtools.com/images/pekkaSmall1.png"/></th>
                     <th><img src="http://clashingtools.com/images/clock.png"/></th>
                  </tr>
                  <tr class="evenRow">
                     <td id='barracksDistro0'><span class="text" tabIndex="-1"><img id='barracksDistroImage0' src="http://clashingtools.com/images/barracksSmall0.png"/></span></td>
                     <td><span class="text" tabIndex="-1" id="barracksBarbarian0"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksArcher0"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksGiant0"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksGoblin0"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksWallBreaker0"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksBalloon0"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksWizard0"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksHealer0"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksDragon0"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksPekka0"/></td>
                     <td><span class="text" id="barracksTrainingTime0" tabIndex="-1"/></td>
                  </tr>
                  <tr class="evenRow">
                     <td id='barracksDistro1'><span class="text" tabIndex="-1"><img id='barracksDistroImage1' src="http://clashingtools.com/images/barracksSmall0.png"/></span></td>
                     <td><span class="text" tabIndex="-1" id="barracksBarbarian1"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksArcher1"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksGiant1"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksGoblin1"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksWallBreaker1"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksBalloon1"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksWizard1"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksHealer1"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksDragon1"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksPekka1"/></td>
                     <td><span class="text" id="barracksTrainingTime1" tabIndex="-1"/></td>
                  </tr>
                  <tr class="evenRow">
                     <td  id='barracksDistro2'><span class="text" tabIndex="-1"><img id='barracksDistroImage2' src="http://clashingtools.com/images/barracksSmall0.png"/></span></td>
                     <td><span class="text" tabIndex="-1" id="barracksBarbarian2"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksArcher2"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksGiant2"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksGoblin2"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksWallBreaker2"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksBalloon2"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksWizard2"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksHealer2"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksDragon2"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksPekka2"/></td>
                     <td><span class="text" id="barracksTrainingTime2" tabIndex="-1"/></td>
                  </tr>
                  <tr class="evenRow">
                     <td  id='barracksDistro3'><span class="text" tabIndex="-1"><img id='barracksDistroImage3' src="http://clashingtools.com/images/barracksSmall0.png"/></span></td>
                     <td><span class="text" tabIndex="-1" id="barracksBarbarian3"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksArcher3"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksGiant3"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksGoblin3"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksWallBreaker3"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksBalloon3"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksWizard3"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksHealer3"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksDragon3"/></td>
                     <td><span class="text" tabIndex="-1" id="barracksPekka3"/></td>
                     <td><span class="text" id="barracksTrainingTime3" tabIndex="-1"/></td>
                  </tr>
               </table>
            </td>
         </tr>
      </table>
      <div class="divider"></div>
      <table class="dataTable">
         <tr>
            <td class="sectionHeader">
               <span>
                  <img src="http://clashingtools.com/images/expandNode.gif" id="darkBarracksExpand"  style="display:none;" onClick="collapseExpand(this,document.getElementById('darkBarracksCollapse'),document.getElementById('darkBarracks'),'block');">
                  <img src="http://clashingtools.com/images/collapseNode.gif" id="darkBarracksCollapse" onClick="collapseExpand(this,document.getElementById('darkBarracksExpand'),document.getElementById('darkBarracks'),'none');">
                  Dark Barracks
               </span>
            </td>
         </tr>
         <tr id="darkBarracks" class="section">
            <td>
               <table>
                  <tr>                  
                     <!--dark barracks one-->
                     <td rowspan="2" id="darkBarracksTd0">
                        <img id='darkBarracksImage0' src="http://clashingtools.com/images/darkBarracks0.png"/>
                     </td>
                     <td>
                        <select onChange="darkBarracksArray[0].setLevel(this.selectedIndex,0); changeText(document.getElementById('darkBarracksMaxQueue0'),darkBarracksArray[0].maxTroopQueue); changeText(document.getElementById('darkBarracksAvailableQueue0'),darkBarracksArray[0].availableTroopQueue); distributeTroops(); changeImage(document.getElementById('darkBarracksImage0'),'http://clashingtools.com/images/darkBarracks',this.selectedIndex);
                        changeImage(document.getElementById('darkBarracksDistroImage0'),'http://clashingtools.com/images/darkBarracksSmall',this.selectedIndex);" id="darkBarracksLevelSelect0">
                           <option>0</option>
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                           <option>6</option>
                        </select>
                     </td>    
                     <td rowspan="2" style="width:43px">
                       <div onmousedown="document.getElementById('darkBarracksBoost0').src='http://clashingtools.com/images/boostButtonPressed.png';" onmouseout="document.getElementById('darkBarracksBoost0').src='http://clashingtools.com/images/boostButton.png';" onmouseup="document.getElementById('darkBarracksBoost0').src='http://clashingtools.com/images/boostButton.png';" onClick="boostBuilding(darkBarracksArray[0]);distributeTroops();setBoostBackground(document.getElementById('darkBarracksTd0'),darkBarracksArray[0]);setBoostBackground(document.getElementById('darkBarracksDistro0'),darkBarracksArray[0],'http://clashingtools.com/images/boostedSmall.png');" id="darkBarracksBoostDiv0"><img src="http://clashingtools.com/images/boostButton.png" id="darkBarracksBoost0"></img></div>
                     </td>
                     <!--dark barracks two-->
                     <td rowspan="2" id="darkBarracksTd1">
                        <img id='darkBarracksImage1' src="http://clashingtools.com/images/darkBarracks0.png"/>
                     </td>
                     <td>
                        <select onChange="darkBarracksArray[1].setLevel(this.selectedIndex,1); changeText(document.getElementById('darkBarracksMaxQueue1'),darkBarracksArray[1].maxTroopQueue); changeText(document.getElementById('darkBarracksAvailableQueue1'),darkBarracksArray[1].availableTroopQueue); distributeTroops(); changeImage(document.getElementById('darkBarracksImage1'),'http://clashingtools.com/images/darkBarracks',this.selectedIndex); 
                        changeImage(document.getElementById('darkBarracksDistroImage1'),'http://clashingtools.com/images/darkBarracksSmall',this.selectedIndex);" id="darkBarracksLevelSelect1">
                           <option>0</option>
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                           <option>6</option>
                        </select>
                     </td>
                     <td rowspan="2" style="width:43px">
                       <div onmousedown="document.getElementById('darkBarracksBoost1').src='http://clashingtools.com/images/boostButtonPressed.png';" onmouseout="document.getElementById('darkBarracksBoost1').src='http://clashingtools.com/images/boostButton.png';" onmouseup="document.getElementById('darkBarracksBoost1').src='http://clashingtools.com/images/boostButton.png';" onClick="boostBuilding(darkBarracksArray[1]);distributeTroops();setBoostBackground(document.getElementById('darkBarracksTd1'),darkBarracksArray[1]);setBoostBackground(document.getElementById('darkBarracksDistro1'),darkBarracksArray[1],'http://clashingtools.com/images/boostedSmall.png');" id="darkBarracksBoostDiv1"><img src="http://clashingtools.com/images/boostButton.png" id="darkBarracksBoost1"></img></div>
                     </td>
                  </tr>
                  <tr>
                     <!--dark barracks one-->
                     <td>
                        <span class="text" id="darkBarracksAvailableQueue0" tabIndex="-1">0</span>
                        <span class="text" tabIndex="-1">/</span>
                        <span class="text" id="darkBarracksMaxQueue0" tabIndex="-1">0</span>
                     </td>
                     <!--dark barracks two-->
                     <td>
                        <span class="text" id="darkBarracksAvailableQueue1" tabIndex="-1">0</span>
                        <span class="text" tabIndex="-1">/</span>
                        <span class="text" id="darkBarracksMaxQueue1" tabIndex="-1">0</span>
                     </td>
                  </tr>
               </table>
            </td>
         </tr>
      </table>
      <div class="divider"></div>
      <table class="dataTable">
         <tr>
            <td class="sectionHeader">
               <span>
                  <img src="http://clashingtools.com/images/expandNode.gif" id="darkTroopsExpand"  style="display:none;" onClick="collapseExpand(this,document.getElementById('darkTroopsCollapse'),document.getElementById('darkTroops'),'block');">
                  <img src="http://clashingtools.com/images/collapseNode.gif" id="darkTroopsCollapse" onClick="collapseExpand(this,document.getElementById('darkTroopsExpand'),document.getElementById('darkTroops'),'none');">
                  Dark Troops
               </span>
            </td>
         </tr>
         <!--new version-->
         <tr id="darkTroops" class="section">
            <td>
               <table>
                  <!--Dark Troops Part 1a-->
                  <tr>
                     <!--Minion-->
                     <td rowspan="2" style="position:relative;" align="center"> 
                         <img id='MinionImage' src="http://clashingtools.com/images/minion1.png" class="troopSpellImage"/>
                         <img id="MinionNonMaxBadge" src="http://clashingtools.com/images/nonMaxBadge.png" class="troopSpellNonMaxBadge"/>
                         <img id="MinionMaxBadge" src="http://clashingtools.com/images/maxBadge.png" class="troopSpellMaxBadge"/>
                         <div id="MinionLevelText" class="troopSpellLevelText"></div>
                     </td>
                     <td><select onChange="darkTroopsArray[0].setLevel(this.selectedIndex + 1); calculateSingle(darkTroopsArray[0],document.getElementById('Minion_Quantity').value);" id="Minion_level">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                           <option>6</option>
                           <option>7</option>
                        </select>
                     </td>
                     <td><img id='minionElixirImage' src="http://clashingtools.com/images/dropDarkElixir.png"/></td>
                     <td class="elixir"><span id="Minion_DarkElixirCost" tabIndex="-1"/></td>
                     <!--Mr T-->
                     <td rowspan="2" style="position:relative;padding-left:5px" align="center"> 
                         <img id='MrTImage' src="http://clashingtools.com/images/mrT1.png" class="troopSpellImage"/>
                         <img id="MrTNonMaxBadge" src="http://clashingtools.com/images/nonMaxBadge.png" class="troopSpellNonMaxBadge"/>
                         <img id="MrTMaxBadge" src="http://clashingtools.com/images/maxBadge.png" class="troopSpellMaxBadge"/>
                         <div id="MrTLevelText" class="troopSpellLevelText"></div>
                     </td>
                     <td><select onChange="darkTroopsArray[1].setLevel(this.selectedIndex + 1); calculateSingle(darkTroopsArray[1],document.getElementById('MrT_Quantity').value);" id="MrT_level">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                        </select>
                     </td>
                     <td><img id='mrTElixirImage' src="http://clashingtools.com/images/dropDarkElixir.png"/></td>
                     <td class="elixir"><span id="MrT_DarkElixirCost" tabIndex="-1"/></td>
                     <!--Valkyrie-->
                     <td rowspan="2" style="position:relative;padding-left:5px" align="center"> 
                         <img id='ValkyrieImage' src="http://clashingtools.com/images/valkyrie1.png" class="troopSpellImage"/>
                         <img id="ValkyrieNonMaxBadge" src="http://clashingtools.com/images/nonMaxBadge.png" class="troopSpellNonMaxBadge"/>
                         <img id="ValkyrieMaxBadge" src="http://clashingtools.com/images/maxBadge.png" class="troopSpellMaxBadge"/>
                         <div id="ValkyrieLevelText" class="troopSpellLevelText"></div>
                     </td>
                     <td><select onChange="darkTroopsArray[2].setLevel(this.selectedIndex + 1); calculateSingle(darkTroopsArray[2],document.getElementById('Valkyrie_Quantity').value);" id="Valkyrie_level">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                        </select>
                     </td>
                     <td><img id='valkyrieElixirImage' src="http://clashingtools.com/images/dropDarkElixir.png"/></td>
                     <td class="elixir"><span id="Valkyrie_DarkElixirCost" tabIndex="-1"/></td>
                     <!--Golem-->
                     <td rowspan="2" style="position:relative;padding-left:5px" align="center"> 
                         <img id='GolemImage' src="http://clashingtools.com/images/golem1.png" class="troopSpellImage"/>
                         <img id="GolemNonMaxBadge" src="http://clashingtools.com/images/nonMaxBadge.png" class="troopSpellNonMaxBadge"/>
                         <img id="GolemMaxBadge" src="http://clashingtools.com/images/maxBadge.png" class="troopSpellMaxBadge"/>
                         <div id="GolemLevelText" class="troopSpellLevelText"></div>
                     </td>
                     <td><select onChange="darkTroopsArray[3].setLevel(this.selectedIndex + 1); calculateSingle(darkTroopsArray[3],document.getElementById('Golem_Quantity').value);" id="Golem_level">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                        </select>
                     </td>
                     <td><img id='golemElixirImage' src="http://clashingtools.com/images/dropDarkElixir.png"/></td>
                     <td class="elixir"><span id="Golem_DarkElixirCost" tabIndex="-1"/></td>
                     <!--Warlock-->
                     <td rowspan="2" style="position:relative;padding-left:5px" align="center"> 
                         <img id='WarlockImage' src="http://clashingtools.com/images/warlock1.png" class="troopSpellImage"/>
                         <img id="WarlockNonMaxBadge" src="http://clashingtools.com/images/nonMaxBadge.png" class="troopSpellNonMaxBadge"/>
                         <img id="WarlockMaxBadge" src="http://clashingtools.com/images/maxBadge.png" class="troopSpellMaxBadge"/>
                         <div id="WarlockLevelText" class="troopSpellLevelText"></div>
                     </td>
                     <td><select onChange="darkTroopsArray[4].setLevel(this.selectedIndex + 1); calculateSingle(darkTroopsArray[4],document.getElementById('Warlock_Quantity').value);" id="Warlock_level">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                        </select>
                     </td>
                     <td><img id='warlockElixirImage' src="http://clashingtools.com/images/dropDarkElixir.png"/></td>
                     <td class="elixir"><span id="Warlock_DarkElixirCost" tabIndex="-1"/></td>
                  </tr>
                  <!--Dark Troops Part 1b-->
                  <tr class="bottomRow">
                     <!--Minion-->
                     <td><input type="number" class="quantity" onBlur="calculateSingle(darkTroopsArray[0],this.value);distributeTroops();" id="Minion_Quantity"/></td>
                     <td><img id='minionClockImage' src="http://clashingtools.com/images/clock.png"/></td>
                     <td class="time"><span id="Minion_TrainingTime" tabIndex="-1"/></td>
                     <!--Mr T-->
                     <td><input type="number" class="quantity" onBlur="calculateSingle(darkTroopsArray[1],this.value);distributeTroops();" id="MrT_Quantity"/></td>
                     <td><img id='mrTClockImage' src="http://clashingtools.com/images/clock.png"/></td>
                     <td class="time"><span id="MrT_TrainingTime" tabIndex="-1"/></td>
                     <!--Valkyrie-->
                     <td><input type="number" class="quantity" onBlur="calculateSingle(darkTroopsArray[2],this.value);distributeTroops();" id="Valkyrie_Quantity"/></td>
                     <td><img id='valkyrieClockImage' src="http://clashingtools.com/images/clock.png"/></td>
                     <td class="time"><span id="Valkyrie_TrainingTime" tabIndex="-1"/></td>
                     <!--Golem-->
                     <td><input type="number" class="quantity" onBlur="calculateSingle(darkTroopsArray[3],this.value);distributeTroops();" id="Golem_Quantity"/></td>
                     <td><img id='golemClockImage' src="http://clashingtools.com/images/clock.png"/></td>
                     <td class="time"><span id="Golem_TrainingTime" tabIndex="-1"/></td>
                     <!--Warlock-->
                     <td><input type="number" class="quantity" onBlur="calculateSingle(darkTroopsArray[4],this.value);distributeTroops();" id="Warlock_Quantity"/></td>
                     <td><img id='warlockClockImage' src="http://clashingtools.com/images/clock.png"/></td>
                     <td class="time"><span id="Warlock_TrainingTime" tabIndex="-1"/></td>
                  </tr>
                  <tr><td style="padding-bottom:10px;"></td></tr>
                  <!--Dark Troops Part 2a-->
                  <tr>
                     <!--LavaHound-->
                     <td rowspan="2" style="position:relative;" align="center"> 
                         <img id='LavaHoundImage' src="http://clashingtools.com/images/lavaHound1.png" class="troopSpellImage"/>
                         <img id="LavaHoundNonMaxBadge" src="http://clashingtools.com/images/nonMaxBadge.png" class="troopSpellNonMaxBadge"/>
                         <img id="LavaHoundMaxBadge" src="http://clashingtools.com/images/maxBadge.png" class="troopSpellMaxBadge"/>
                         <div id="LavaHoundLevelText" class="troopSpellLevelText"></div>
                     </td>
                     <td><select onChange="darkTroopsArray[5].setLevel(this.selectedIndex + 1); calculateSingle(darkTroopsArray[5],document.getElementById('LavaHound_Quantity').value);" id="LavaHound_level">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                        </select>
                     </td>
                     <td><img id='LavaHoundElixirImage' src="http://clashingtools.com/images/dropDarkElixir.png"/></td>
                     <td class="elixir"><span id="LavaHound_DarkElixirCost" tabIndex="-1"/></td>
                     <td></td><td></td><td></td><td></td>
                     <td></td><td></td><td></td><td></td>
                     <td></td><td></td><td></td><td></td>
                     <td></td><td></td><td></td><td></td>
                  </tr>
                  <!--Dark Troops Part 2b-->
                  <tr class="bottomRow">
                     <!--LavaHound-->
                     <td><input type="number" class="quantity" onBlur="calculateSingle(darkTroopsArray[5],this.value);distributeTroops();" id="LavaHound_Quantity"/></td>
                     <td><img id='lavaHoundClockImage' src="http://clashingtools.com/images/clock.png"/></td>
                     <td class="time"><span id="LavaHound_TrainingTime" tabIndex="-1"/></td>
                     <td></td><td></td><td></td>
                     <td></td><td></td><td></td>
                     <td></td><td></td><td></td>
                     <td></td><td></td><td></td>
                  </tr>
                  <tr width="100%">
                     <td colspan="20" width="100%">
                        <div style="background-image: url(http://clashingtools.com/images/midTotalBox.png); text-align:center; vertical-align: middle;">
                           <span class="capacityTotal" id="armyCampUsedDark">0</span>
                           <span>/</span>
                           <span class="capacityTotal" id="armyCampTotalDark">220</span>
                           <img id='totalDarkElixirImage' src="http://clashingtools.com/images/dropDarkElixir.png" style="padding-left: 100px;"/>
                           <span class="elixirTotal" id="totalDarkElixir">0</span>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td colspan="12" style="text-align:center;">
                        <div>
                           <input class="button" type="button" value="Clear Level" onClick="clearLevel(true);"/>
                           <input class="button" type="button" value="Clear Quantity" onClick="clearQuantity(true);"/>
                           <input class="button" type="button" value="Clear All" onClick="clearLevel(true);clearQuantity(true);"/>
                        </div>
                     </td>
                  </tr>
               </table>
            </td>
         </tr>
      </table>
      <div class="divider"></div>
      <table class="dataTable">
         <tr>
            <td class="sectionHeader">
               <span>
                  <img src="http://clashingtools.com/images/expandNode.gif" id="darkBarracksExpand0"  style="display:none;" onClick="collapseExpand(this,document.getElementById('darkBarracksCollapse0'),document.getElementById('darkBarracksTroopDistro0'),'block');">
                  <img src="http://clashingtools.com/images/collapseNode.gif" id="darkBarracksCollapse0" onClick="collapseExpand(this,document.getElementById('darkBarracksExpand0'),document.getElementById('darkBarracksTroopDistro0'),'none');">
                  Dark Troop Distribution
               </span>
            </td>
         </tr>
         <tr id="darkBarracksTroopDistro0" class="section">
            <td>
               <table>
                  <tr>
                     <th></th>
                     <th><img src="http://clashingtools.com/images/minionSmall1.png"/></th>
                     <th><img src="http://clashingtools.com/images/mrTSmall1.png"/></th>
                     <th><img src="http://clashingtools.com/images/valkyrieSmall1.png"/></th>
                     <th><img src="http://clashingtools.com/images/golemSmall1.png"/></th>
                     <th><img src="http://clashingtools.com/images/warlockSmall1.png"/></th>
                     <th><img src="http://clashingtools.com/images/lavaHoundSmall1.png"/></th>
                     <th><img src="http://clashingtools.com/images/clock.png"/></th>
                  </tr>
                  <tr class="evenRow">
                     <td  id='darkBarracksDistro0'><span class="text" tabIndex="-1"><img id='darkBarracksDistroImage0' src="http://clashingtools.com/images/darkBarracksSmall0.png"/></span></td>
                     <td><span class="text" tabIndex="-1" id="darkBarracksMinion0"/></td>
                     <td><span class="text" tabIndex="-1" id="darkBarracksMrT0"/></td>
                     <td><span class="text" tabIndex="-1" id="darkBarracksValkyrie0"/></td>
                     <td><span class="text" tabIndex="-1" id="darkBarracksGolem0"/></td>
                     <td><span class="text" tabIndex="-1" id="darkBarracksWarlock0"/></td>
                     <td><span class="text" tabIndex="-1" id="darkBarracksLavaHound0"/></td>
                     <td><span class="text" id="darkBarracksTrainingTime0" tabIndex="-1"/></td>
                  </tr>
                  <tr class="evenRow">
                     <td  id='darkBarracksDistro1'><span class="text" tabIndex="-1"><img id='darkBarracksDistroImage1' src="http://clashingtools.com/images/darkBarracksSmall0.png"/></span></td>
                     <td><span class="text" tabIndex="-1" id="darkBarracksMinion1"/></td>
                     <td><span class="text" tabIndex="-1" id="darkBarracksMrT1"/></td>
                     <td><span class="text" tabIndex="-1" id="darkBarracksValkyrie1"/></td>
                     <td><span class="text" tabIndex="-1" id="darkBarracksGolem1"/></td>
                     <td><span class="text" tabIndex="-1" id="darkBarracksWarlock1"/></td>
                     <td><span class="text" tabIndex="-1" id="darkBarracksLavaHound1"/></td>
                     <td><span class="text" id="darkBarracksTrainingTime1" tabIndex="-1"/></td>
                  </tr>
               </table>
            </td>
         </tr>
      </table>
<!------------------
****SPELLS****
-------------------->
      <table class="dataTable">
         <tr>
            <td class="sectionHeader">
               <span >
                  <img src="http://clashingtools.com/images/expandNode.gif" id="spellBuildingsExpand"  style="display:none;" onClick="collapseExpand(this,document.getElementById('spellBuildingsCollapse'),document.getElementById('spellBuildings'),'block');">
                  <img src="http://clashingtools.com/images/collapseNode.gif" id="spellBuildingsCollapse" onClick="collapseExpand(this,document.getElementById('spellBuildingsExpand'),document.getElementById('spellBuildings'),'none');">
                  Spell Factories
               </span>
            </td>
         </tr>
         <tr id="spellBuildings" class="section">
            <td>
               <table>
                  <tr>            
                     <!--spell factory-->
                     <td rowspan="2" id="spellFactoryTd">
                        <img id='spellFactoryImage' src="http://clashingtools.com/images/spellFactory0.png"/>
                     </td>
                     <td>
                        <select onChange="spellBuildingArray[0].setLevel(this.selectedIndex); distributeTroops(); setSpellTotals(); changeImage(document.getElementById('spellFactoryImage'),'http://clashingtools.com/images/spellFactory',this.selectedIndex);" id="spellBuildingLevelSelect0">
                           <option>0</option>
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                        </select>
                     </td>
                     <td rowspan="2" width="35px">
                       <div onmousedown="document.getElementById('spellFactoryBoost').src='http://clashingtools.com/images/boostButtonPressed.png';" onmouseout="document.getElementById('spellFactoryBoost').src='http://clashingtools.com/images/boostButton.png';" onmouseup="document.getElementById('spellFactoryBoost').src='http://clashingtools.com/images/boostButton.png';" onClick="changeSpellBoost(spellBuildingArray[0]);distributeTroops();setBoostBackground(document.getElementById('spellFactoryTd'),spellBuildingArray[0]);" id="spellBoostDiv"><img src="http://clashingtools.com/images/boostButton.png" id="spellFactoryBoost"></img></div>
                     </td>
                     <!--dark spell factory-->
                     <td rowspan="2" id="darkSpellFactoryTd">
                        <img id='darkSpellFactoryImage' src="http://clashingtools.com/images/darkSpellFactory0.png"/>
                     </td>
                     <td>
                        <select onChange="spellBuildingArray[1].setLevel(this.selectedIndex); distributeTroops(); setSpellTotals(); changeImage(document.getElementById('darkSpellFactoryImage'),'http://clashingtools.com/images/darkSpellFactory',this.selectedIndex);" id="spellBuildingLevelSelect1">
                           <option>0</option>
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                        </select>
                     </td>
                     <td rowspan="2" width="35px">
                       <div onmousedown="document.getElementById('darkSpellFactoryBoost').src='http://clashingtools.com/images/boostButtonPressed.png';" onmouseout="document.getElementById('darkSpellFactoryBoost').src='http://clashingtools.com/images/boostButton.png';" onmouseup="document.getElementById('darkSpellFactoryBoost').src='http://clashingtools.com/images/boostButton.png';" onClick="changeSpellBoost(spellBuildingArray[1]);distributeTroops();setBoostBackground(document.getElementById('darkSpellFactoryTd'),spellBuildingArray[1]);" id="darkSpellBoostDiv"><img src="http://clashingtools.com/images/boostButton.png" id="darkSpellFactoryBoost"></img></div>
                     </td>
                  </tr>
                  <tr>
                     <!--spell factory-->
                     <td>
                         <img id='spellFactoryClockImage' src="http://clashingtools.com/images/clock.png"/>
                         <span class="time" id="SpellFactory_TrainingTime" tabIndex="-1"/>
                     </td>
                     <!--dark spell factory-->
                     <td>
                         <img id='darkSpellFactoryClockImage' src="http://clashingtools.com/images/clock.png"/>
                         <span class="time" id="DarkSpellFactory_TrainingTime" tabIndex="-1"/>
                     </td>
                  </tr>
               </table>
            </td>
         </tr>
      </table>
      <div class="divider"></div>
      <table class="dataTable">
         <tr>
            <td class="sectionHeader">
               <span>
                  <img src="http://clashingtools.com/images/expandNode.gif" id="spellsExpand"  style="display:none;" onClick="collapseExpand(this,document.getElementById('spellsCollapse'),document.getElementById('spells'),'block');">
                  <img src="http://clashingtools.com/images/collapseNode.gif" id="spellsCollapse" onClick="collapseExpand(this,document.getElementById('spellsExpand'),document.getElementById('spells'),'none');">
                  Spells
               </span>
            </td>
         </tr>
         <!--new version-->
         <tr id="spells" class="section">
            <td>
               <table>
                  <!--Spells part 1a-->
                  <tr>
                     <!--lightning-->
                     <td rowspan="2" style="position:relative;" align="center"> 
                         <img id='LightningImage' src="http://clashingtools.com/images/lightning1.png" class="troopSpellImage"/>
                         <img id="LightningNonMaxBadge" src="http://clashingtools.com/images/nonMaxBadge.png" class="troopSpellNonMaxBadge"/>
                         <img id="LightningMaxBadge" src="http://clashingtools.com/images/maxBadge.png" class="troopSpellMaxBadge"/>
                         <div id="LightningLevelText" class="troopSpellLevelText"></div>
                     </td>
                     <td>
                        <select onChange="spellsArray[0].setLevel(this.selectedIndex + 1); calculateSingleSpell(spellsArray[0], document.getElementById('Lightning_Quantity').value);" id="Lightning_level">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                           <option>6</option>
                           <option>7</option>
                        </select>
                     </td>
                     <td><img id='lightningElixirImage' src="http://clashingtools.com/images/dropElixir.png"/></td>
                     <td class="elixir"><span id="Lightning_ElixirCost" tabIndex="-1"/></td>
                     <!--heal-->
                     <td rowspan="2" style="position:relative;padding-left:5px" align="center"> 
                         <img id='HealImage' src="http://clashingtools.com/images/heal1.png" class="troopSpellImage"/>
                         <img id="HealNonMaxBadge" src="http://clashingtools.com/images/nonMaxBadge.png" class="troopSpellNonMaxBadge"/>
                         <img id="HealMaxBadge" src="http://clashingtools.com/images/maxBadge.png" class="troopSpellMaxBadge"/>
                         <div id="HealLevelText" class="troopSpellLevelText"></div>
                     </td>
                     <td>
                        <select onChange="spellsArray[1].setLevel(this.selectedIndex + 1); calculateSingleSpell(spellsArray[1], document.getElementById('Heal_Quantity').value);" id="Heal_level">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                           <option>6</option>
                        </select>
                     </td>
                     <td><img id='healElixirImage' src="http://clashingtools.com/images/dropElixir.png"/></td>
                     <td class="elixir"><span id="Heal_ElixirCost" tabIndex="-1"/></td>
                     <!--rage-->
                     <td rowspan="2" style="position:relative;padding-left:5px" align="center"> 
                         <img id='RageImage' src="http://clashingtools.com/images/rage1.png" class="troopSpellImage"/>
                         <img id="RageNonMaxBadge" src="http://clashingtools.com/images/nonMaxBadge.png" class="troopSpellNonMaxBadge"/>
                         <img id="RageMaxBadge" src="http://clashingtools.com/images/maxBadge.png" class="troopSpellMaxBadge"/>
                         <div id="RageLevelText" class="troopSpellLevelText"></div>
                     </td>
                     <td>
                        <select onChange="spellsArray[2].setLevel(this.selectedIndex + 1); calculateSingleSpell(spellsArray[2],document.getElementById('Rage_Quantity').value);" id="Rage_level">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                        </select>
                     </td>
                     <td><img id='rageElixirImage' src="http://clashingtools.com/images/dropElixir.png"/></td>
                     <td class="elixir"><span id="Rage_ElixirCost" tabIndex="-1"/></td>
                     <!--jump-->
                     <td rowspan="2" style="position:relative;padding-left:5px" align="center"> 
                         <img id='JumpImage' src="http://clashingtools.com/images/jump1.png" class="troopSpellImage"/>
                         <img id="JumpNonMaxBadge" src="http://clashingtools.com/images/nonMaxBadge.png" class="troopSpellNonMaxBadge"/>
                         <img id="JumpMaxBadge" src="http://clashingtools.com/images/maxBadge.png" class="troopSpellMaxBadge"/>
                         <div id="JumpLevelText" class="troopSpellLevelText"></div>
                     </td>
                     <td>
                        <select onChange="spellsArray[3].setLevel(this.selectedIndex + 1); calculateSingleSpell(spellsArray[3],document.getElementById('Jump_Quantity').value);" id="Jump_level">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                        </select>
                     </td>
                     <td><img id='jumpElixirImage' src="http://clashingtools.com/images/dropElixir.png"/></td>
                     <td class="elixir"><span id="Jump_ElixirCost" tabIndex="-1"/></td>
                     <!--freeze-->
                     <td rowspan="2" style="position:relative;padding-left:5px" align="center"> 
                         <img id='FreezeImage' src="http://clashingtools.com/images/freeze1.png" class="troopSpellImage"/>
                         <img id="FreezeNonMaxBadge" src="http://clashingtools.com/images/nonMaxBadge.png" class="troopSpellNonMaxBadge"/>
                         <img id="FreezeMaxBadge" src="http://clashingtools.com/images/maxBadge.png" class="troopSpellMaxBadge"/>
                         <div id="FreezeLevelText" class="troopSpellLevelText"></div>
                     </td>
                     <td><select onChange="spellsArray[4].setLevel(this.selectedIndex + 1); calculateSingleSpell(spellsArray[4],document.getElementById('Freeze_Quantity').value);" id="Freeze_level">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                        </select>
                     </td>
                     <td><img id='freezeElixirImage' src="http://clashingtools.com/images/dropElixir.png"/></td>
                     <td class="elixir"><span id="Freeze_ElixirCost" tabIndex="-1"/></td>
                  </tr>
                  <!--Spells Part 1b-->
                  <tr style="padding-bottom:10px;">
                     <!--lightning-->
                     <td><input type="number" class="quantity" onBlur="calculateSingleSpell(spellsArray[0],this.value);" id="Lightning_Quantity"/></td>
                     <td><img id='lightningClockImage' src="http://clashingtools.com/images/clock.png"/></td>
                     <td class="time"><span id="Lightning_TrainingTime" tabIndex="-1"></td>
                     <!--heal-->
                     <td><input type="number" class="quantity" onBlur="calculateSingleSpell(spellsArray[1],this.value);" id="Heal_Quantity"/></td>
                     <td><img id='healClockImage' src="http://clashingtools.com/images/clock.png"/></td>
                     <td class="time"><span id="Heal_TrainingTime" tabIndex="-1"/></td>
                     <!--rage-->
                     <td><input type="number" class="quantity" onBlur="calculateSingleSpell(spellsArray[2],this.value);" id="Rage_Quantity"/></td>
                     <td><img id='rageImage' src="http://clashingtools.com/images/clock.png"/></td>
                     <td class="time"><span id="Rage_TrainingTime" tabIndex="-1"/></td>
                     <!--jump-->
                     <td><input type="number" class="quantity" onBlur="calculateSingleSpell(spellsArray[3],this.value);" id="Jump_Quantity"/></td>
                     <td><img id='jumpClockImage' src="http://clashingtools.com/images/clock.png"/></td>
                     <td class="time"><span id="Jump_TrainingTime" tabIndex="-1"/></td>
                     <!--freeze-->
                     <td><input type="number" class="quantity" onBlur="calculateSingleSpell(spellsArray[4],this.value);" id="Freeze_Quantity"/></td>
                     <td><img id='freezeClockImage' src="http://clashingtools.com/images/clock.png"/></td>
                     <td class="time"><span id="Freeze_TrainingTime" tabIndex="-1"/></td>
                  </tr>
                  <tr><td style="padding-bottom:10px;"></td></tr>
                    <!--Dark Spells part 1a-->
                  <tr>
                     <!--poison-->
                     <td rowspan="2" style="position:relative;" align="center"> 
                         <img id='PoisonImage' src="http://clashingtools.com/images/poison1.png" class="troopSpellImage"/>
                         <img id="PoisonNonMaxBadge" src="http://clashingtools.com/images/nonMaxBadge.png" class="troopSpellNonMaxBadge"/>
                         <img id="PoisonMaxBadge" src="http://clashingtools.com/images/maxBadge.png" class="troopSpellMaxBadge"/>
                         <div id="PoisonLevelText" class="troopSpellLevelText"></div>
                     </td>
                     <td>
                        <select onChange="spellsArray[5].setLevel(this.selectedIndex + 1); calculateSingleSpell(spellsArray[5], document.getElementById('Poison_Quantity').value);" id="Poison_level">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                        </select>
                     </td>
                     <td><img id='poisonDarkElixirImage' src="http://clashingtools.com/images/dropDarkElixir.png"/></td>
                     <td class="elixir"><span id="Poison_DarkElixirCost" tabIndex="-1"/></td>
                     <!--earthquake-->
                     <td rowspan="2" style="position:relative;padding-left:5px" align="center"> 
                         <img id='EarthquakeImage' src="http://clashingtools.com/images/earthquake1.png" class="troopSpellImage"/>
                         <img id="EarthquakeNonMaxBadge" src="http://clashingtools.com/images/nonMaxBadge.png" class="troopSpellNonMaxBadge"/>
                         <img id="EarthquakeMaxBadge" src="http://clashingtools.com/images/maxBadge.png" class="troopSpellMaxBadge"/>
                         <div id="EarthquakeLevelText" class="troopSpellLevelText"></div>
                     </td>
                     <td>
                        <select onChange="spellsArray[6].setLevel(this.selectedIndex + 1); calculateSingleSpell(spellsArray[6], document.getElementById('Earthquake_Quantity').value);" id="Earthquake_level">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                        </select>
                     </td>
                     <td><img id='earhquakeDarkElixirImage' src="http://clashingtools.com/images/dropDarkElixir.png"/></td>
                     <td class="elixir"><span id="Earthquake_DarkElixirCost" tabIndex="-1"/></td>
                     <!--haste-->
                     <td rowspan="2" style="position:relative;padding-left:5px" align="center"> 
                         <img id='HasteImage' src="http://clashingtools.com/images/haste1.png" class="troopSpellImage"/>
                         <img id="HasteNonMaxBadge" src="http://clashingtools.com/images/nonMaxBadge.png" class="troopSpellNonMaxBadge"/>
                         <img id="HasteMaxBadge" src="http://clashingtools.com/images/maxBadge.png" class="troopSpellMaxBadge"/>
                         <div id="HasteLevelText" class="troopSpellLevelText"></div>
                     </td>
                     <td>
                        <select onChange="spellsArray[7].setLevel(this.selectedIndex + 1); calculateSingleSpell(spellsArray[7],document.getElementById('Haste_Quantity').value);" id="Haste_level">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                        </select>
                     </td>
                     <td><img id='hasteElixirImage' src="http://clashingtools.com/images/dropDarkElixir.png"/></td>
                     <td class="elixir"><span id="Haste_DarkElixirCost" tabIndex="-1"/></td>
                     <!--tbd-->
                     <td rowspan="2"  style="padding-left:15px">
                     </td>
                     <td>
                     </td>
                     <td></td>
                     <td class="elixir"></td>
                     <!--tbd-->
                     <td rowspan="2"  style="padding-left:15px">
                     </td>
                     <td>
                     </td>
                     <td></td>
                     <td class="elixir">
                  </tr>
                  <!--Dark Spells Part 1b-->
                  <tr style="padding-bottom:10px;">
                     <!--poison-->
                     <td><input type="number" class="quantity" onBlur="calculateSingleSpell(spellsArray[5],this.value);" id="Poison_Quantity"/></td>
                     <td><img id='poisonClockImage' src="http://clashingtools.com/images/clock.png"/></td>
                     <td class="time"><span id="Poison_TrainingTime" tabIndex="-1"></td>
                     <!--earthquake-->
                     <td><input type="number" class="quantity" onBlur="calculateSingleSpell(spellsArray[6],this.value);" id="Earthquake_Quantity"/></td>
                     <td><img id='earthquakeClockImage' src="http://clashingtools.com/images/clock.png"/></td>
                     <td class="time"><span id="Earthquake_TrainingTime" tabIndex="-1"/></td>
                     <!--haste-->
                     <td><input type="number" class="quantity" onBlur="calculateSingleSpell(spellsArray[7],this.value);" id="Haste_Quantity"/></td>
                     <td><img id='hastemage' src="http://clashingtools.com/images/clock.png"/></td>
                     <td class="time"><span id="Haste_TrainingTime" tabIndex="-1"/></td>
                     <!--tbd-->
                     <td></td>
                     <td></td>
                     <td class="time"></td>
                     <!--tbd-->
                     <td></td>
                     <td></td>
                     <td class="time"></td>
                  </tr>
                  <tr><td style="padding-bottom:10px;"></td></tr>
                  <tr width="100%">
                     <td colspan="20" width="100%">
                        <div style="background-image: url(http://clashingtools.com/images/midTotalBox.png); text-align:center; vertical-align: middle;">
                           <span class="capacityTotal" id="spellsUsed">0</span>
                           <span>/</span>
                           <span class="capacityTotal" id="spellsTotal">11</span>
                           <img id='totalSpellElixirImage' src="http://clashingtools.com/images/dropElixir.png" style="padding-left: 100px;"/>
                           <span class="elixirTotal" id="totalSpellElixir">0</span>
                           <img id='totalSpellDarkElixirImage' src="http://clashingtools.com/images/dropDarkElixir.png" style="padding-left: 100px;"/>
                           <span class="elixirTotal" id="totalSpellDarkElixir">0</span>
                           <img id='totalSpellTimeImage' src="http://clashingtools.com/images/clock.png" style="padding-left: 100px;"/>
                           <span class="time" id="totalSpellTime">00:00:00</span>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td colspan="20" style="text-align:center;">
                        <div>
                           <input class="button" type="button" value="Clear Level" onClick="clearLevelSpells();"/>
                           <input class="button" type="button" value="Clear Quantity" onClick="clearQuantitySpells();"/>
                           <input class="button" type="button" value="Clear All" onClick="clearLevelSpells();clearQuantitySpells();"/>
                        </div>
                     </td>
                  </tr>
               </table>
            </td>
         </tr>
      </table>
      <div class="divider"></div>

<!------------------
****HEROES****
-------------------->
      <table class="dataTable">
         <tr>
            <td class="sectionHeader">
               <span>
                  <img src="http://clashingtools.com/images/expandNode.gif" id="heroesExpand"  style="display:none;" onClick="collapseExpand(this,document.getElementById('heroesCollapse'),document.getElementById('heroes'),'block');">
                  <img src="http://clashingtools.com/images/collapseNode.gif" id="heroesCollapse" onClick="collapseExpand(this,document.getElementById('heroesExpand'),document.getElementById('heroes'),'none');">
                  Heroes
               </span>
            </td>
         </tr>
         <tr id="heroes" class="section">
            <td>
               <table style="border-spacing:0px;">
                  <tr>
                     <td>
                        <table>
                           <tr>                  
                              <!--burger king section 1-->
                              <td rowspan="2" id="burgerKingTd" style="position:relative; width:58px" align="center"> 
                                 <img id='BurgerKingImage' src="http://clashingtools.com/images/burgerKing.png" class="heroImageNotBoosted"/>
                                 <img id="BurgerKingNonMaxBadge" src="http://clashingtools.com/images/nonMaxBadge.png" class="heroNonMaxBadge"/>
                                 <img id="BurgerKingMaxBadge" src="http://clashingtools.com/images/maxBadge.png" class="heroMaxBadge"/>
                                 <div id="BurgerKingLevelText" class="heroLevelText"></div>
                              </td>
                              <td colspan="2">
                                 <select onChange="heroesArray[0].setLevel(this.selectedIndex,0); calculateSingleHero(heroesArray[0]); setTroopStats();" id="BurgerKing_level">
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option>28</option>
                                    <option>29</option>
                                    <option>30</option>
                                    <option>31</option>
                                    <option>32</option>
                                    <option>33</option>
                                    <option>34</option>
                                    <option>35</option>
                                    <option>36</option>
                                    <option>37</option>
                                    <option>38</option>
                                    <option>39</option>
                                    <option>40</option>
                                 </select>
                              </td>       
                              <td rowspan="2" style="width:43px">
                                <div onmousedown="document.getElementById('burgerKingBoost').src='http://clashingtools.com/images/boostButtonPressed.png';" onmouseout="document.getElementById('burgerKingBoost').src='http://clashingtools.com/images/boostButton.png';" onmouseup="document.getElementById('burgerKingBoost').src='http://clashingtools.com/images/boostButton.png';" onClick="boostBuilding(heroesArray[0]);calculateSingleHero(heroesArray[0]);setHeroTotals();setHeroBackground(heroesArray[0]);" id="heroesBoostDiv0"><img src="http://clashingtools.com/images/boostButton.png" id="burgerKingBoost"></img></div>
                              </td>
                              <!--
                              <td rowspan="2">
                                 <input type="checkbox" id="heroesBoost0" onChange="heroesArray[0].boosted = this.checked; calculateSingleHero(heroesArray[0]); distributeTroops();setBoostBackground(document.getElementById('burgerKingTd'),this,'http://clashingtools.com/images/boostedHero.png');""/>
                              </td>
                              -->
                              <!--archer queen section 1-->
                              <td rowspan="2" id="archerQueenTd" style="position:relative;" align="center">
                                 <img id='ArcherQueenImage' src="http://clashingtools.com/images/archerQueen.png" class="heroImageNotBoosted"/>
                                 <img id="ArcherQueenNonMaxBadge" src="http://clashingtools.com/images/nonMaxBadge.png" class="heroNonMaxBadge"/>
                                 <img id="ArcherQueenMaxBadge" src="http://clashingtools.com/images/maxBadge.png" class="heroMaxBadge"/>
                                 <div id="ArcherQueenLevelText" class="heroLevelText"></div>
                              </td>
                              <td colspan="2" >
                                 <select onChange="heroesArray[1].setLevel(this.selectedIndex,0); calculateSingleHero(heroesArray[1]); setTroopStats();" id="ArcherQueen_level">
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option>28</option>
                                    <option>29</option>
                                    <option>30</option>
                                    <option>31</option>
                                    <option>32</option>
                                    <option>33</option>
                                    <option>34</option>
                                    <option>35</option>
                                    <option>36</option>
                                    <option>37</option>
                                    <option>38</option>
                                    <option>39</option>
                                    <option>40</option>
                                 </select>
                              </td> 
                              <td rowspan="2" style="width:43px">
                                <div onmousedown="document.getElementById('archerQueenBoost').src='http://clashingtools.com/images/boostButtonPressed.png';" onmouseout="document.getElementById('archerQueenBoost').src='http://clashingtools.com/images/boostButton.png';" onmouseup="document.getElementById('archerQueenBoost').src='http://clashingtools.com/images/boostButton.png';" onClick="boostBuilding(heroesArray[1]);calculateSingleHero(heroesArray[1]);setHeroTotals();setHeroBackground(heroesArray[1]);" id="heroesBoostDiv1"><img src="http://clashingtools.com/images/boostButton.png" id="archerQueenBoost" ></img></div>
                              </td>
                              <!--
                              <td rowspan="2">
                                 <input type="checkbox" id="heroesBoost1" onChange="heroesArray[1].boosted = this.checked; calculateSingleHero(heroesArray[1]); distributeTroops();setBoostBackground(document.getElementById('archerQueenTd'),this,'http://clashingtools.com/images/boostedHero.png');""/>
                              </td>-->
                              
                              <!--archer queen section 1-->
                              <td rowspan="2" id="grandWardenTd" style="position:relative;" align="center">
                                 <img id='GrandWardenImage' src="http://clashingtools.com/images/grandWarden.png" class="heroImageNotBoosted"/>
                                 <img id="GrandWardenNonMaxBadge" src="http://clashingtools.com/images/nonMaxBadge.png" class="heroNonMaxBadge"/>
                                 <img id="GrandWardenMaxBadge" src="http://clashingtools.com/images/maxBadge.png" class="heroMaxBadge"/>
                                 <div id="GrandWardenLevelText" class="heroLevelText"></div>
                              </td>
                              <td colspan="2" >
                                 <select onChange="heroesArray[2].setLevel(this.selectedIndex,0); calculateSingleHero(heroesArray[2]); setTroopStats();" id="GrandWarden_level">
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                 </select>
                              </td> 
                              <td rowspan="2" style="width:43px">
                                <div onmousedown="document.getElementById('grandWardenBoost').src='http://clashingtools.com/images/boostButtonPressed.png';" onmouseout="document.getElementById('grandWardenBoost').src='http://clashingtools.com/images/boostButton.png';" onmouseup="document.getElementById('grandWardenBoost').src='http://clashingtools.com/images/boostButton.png';" onClick="boostBuilding(heroesArray[2]);calculateSingleHero(heroesArray[2]);setHeroTotals();setHeroBackground(heroesArray[2]);" id="heroesBoostDiv2"><img src="http://clashingtools.com/images/boostButton.png" id="grandWardenBoost" ></img></div>
                              </td>
                           </tr>
                           <tr>
                              <!--burger king section 2-->
                              <td style="vertical-align:top;"><img id='burgerKingClockImage' src="http://clashingtools.com/images/clock.png"/></td>
                              <td class="time " style="vertical-align:top;"><span id="BurgerKing_TrainingTime" tabIndex="-1">00:00:00</span></td>      
                              <!--archer queen section 2-->
                              <td style="vertical-align:top;"><img id='archerQueenClockImage' src="http://clashingtools.com/images/clock.png"/></td>
                              <td class="time"  style="vertical-align:top;"><span id="ArcherQueen_TrainingTime" tabIndex="-1">00:00:00</span></td>   
                              <!--grand warden section 2-->
                              <td style="vertical-align:top;"><img id='grandWardenClockImage' src="http://clashingtools.com/images/clock.png"/></td>
                              <td class="time"  style="vertical-align:top;"><span id="GrandWarden_TrainingTime" tabIndex="-1">00:00:00</span></td>
                           </tr>
                           <tr><td style="padding-bottom:10px;"></td></tr>
                        </table>
                     </td>
                  </tr>
                  <tr class="section">
                     <td>
                        <table style="border-spacing:0px;"><tr><td>
                        <div style="background-image: url(http://clashingtools.com/images/midTotalBox.png); text-align:center; vertical-align: middle;width:906px;">
                           <img id='totalHeroesTimeImage' src="http://clashingtools.com/images/clock.png"/>
                           <span class="time" id="totalHeroTime">00:00:00</span>
                        </div>
                        </td></tr></table>
                     </td>
                  </tr>
               </table>
            </td>
         </tr>
      </table>

      <div class="divider"></div>
      <table class="dataTable">
         <tr>
            <td class="sectionHeader">
               <span>
                  <img src="http://clashingtools.com/images/expandNode.gif" id="totalsExpand"  style="display:none;" onClick="collapseExpand(this,document.getElementById('totalsCollapse'),document.getElementById('totals'),'block');">
                  <img src="http://clashingtools.com/images/collapseNode.gif" id="totalsCollapse" onClick="collapseExpand(this,document.getElementById('totalsExpand'),document.getElementById('totals'),'none');">
                  Army Statistics
               </span>
            </td>
         </tr>
         <tr id="totals" class="section">
            <td>
               <table>
                   <!--
                  <tr>
                     <td colspan="4" align="center">
                           <input class="button" type="button" value="Share Army (BBCode)" onClick="shareArmy();"/>
                     </td>
                  </tr>
                  -->
                  <tr>
                     <td class="label">Total Elixir Used (Troops + Spells):</td>
                     <td class="text"><span id="troopSpellElixirUsed">0</span></td>
                     <td class="label">Total Dark Elixir Used (Troops + Spells):</td>
                     <td class="text"><span id="troopSpellDarkElixirUsed">0</span></td>
                  </tr>
                  <tr>
                     <td class="label">Total Troop HP:</td>
                     <td class="text"><span id="totalHP">0</span></td>
                     <td class="label">Average Troop HP:</td>
                     <td class="text"><span id="averageHP">0</span></td>
                  </tr>
                  <tr>
                     <td class="label">Ground Troop HP:</td>
                     <td class="text"><span id="groundHP">0</span></td>
                     <td class="label">Air Troop HP:</td>
                     <td class="text"><span id="airHP">0</span></td>
                  </tr>
                  <tr>
                     <td class="label">Average Movement Speed:</td>
                     <td class="text"><span id="averageSpeed">0</span></td>
                     <td class="label">Average Attack Speed:</td>
                     <td class="text"><span id="averageAttackSpeed">0</span></td>
                  </tr>
                  <tr>
                     <td class="label">Total DPS:</td>
                     <td class="text"><span id="totalDPS">0</span></td>
                     <td class="label">Total DPA:</td>
                     <td class="text"><span id="totalDPA">0</span></td>
                  </tr>
                  <tr>
                     <td class="label">Average DPS (by unit):</td>
                     <td class="text"><span id="averageDPS">0</span></td>
                     <td class="label">Average DPA (by unit):</td>
                     <td class="text"><span id="averageDPA">0</span></td>
                  </tr>
                  <tr>
                     <td class="label">Average DPS (by troop space):</td>
                     <td class="text"><span id="averageCampDPS">0</span></td>
                     <td class="label">Average DPA (by troop space):</td>
                     <td class="text"><span id="averageCampDPA">0</span></td>
                  </tr>
                  <tr>
                     <td class="label">Ground DPS:</td>
                     <td class="text"><span id="groundDPS">0</span></td>
                     <td class="label">Ground DPA:</td>
                     <td class="text"><span id="groundDPA">0</span></td>
                  </tr>
                  <tr>
                     <td class="label">Air DPS:</td>
                     <td class="text"><span id="airDPS">0</span></td>
                     <td class="label">Air DPA:</td>
                     <td class="text"><span id="airDPA">0</span></td>
                  </tr>
               </table>
            </td>
         </tr>
      </table>
   </div>
   <P> (Deze tool niet helemaal) created by Rizzle & Justin &copy 2015 - <?php echo date("Y"); ?></p>
    </body>
</html>
