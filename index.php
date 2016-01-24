<html>
<head>
    <title>CtrlAltDestroy</title>
	<meta charset="utf-8"  />
	<link rel="shortcut icon" type="image/jpg" href="image/awhyeah2.jpg">
			  
    <link href="tablecloth/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="DitIsStyle.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="tablecloth/tablecloth.js"></script>
	
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71479321-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body>
<div id="menu">
	<ul>
		<li><a href="/coc/index.php" title="Home">Home</a></li>
		<li><a href="/coc/claninfo.php" title="Chat">Claninfo</a><li>
		<li><a href="/coc/stats.php" title="Stats">Stats</a></li>
		<li><a href="/coc/vergelijk.php" title="Compare">Vergelijk spelers</a></li>
		<li><a href="/coc/tool.php" title="Tool">Tool</a><li>
	</ul>
</div>

<!-- Button die verbinding heeft met vergelijk.js -->
</br></br></br></br>
   <?php
//php expert shizzle van Rizzle
include("functions.php");

$contents = file_get_contents('https://set7z18fgf.execute-api.us-east-1.amazonaws.com/prod/?route=getClanDetails&clanTag=%232CRCJU2V', false);

$jsonArray = json_decode($contents, true);

if(!$contents) {
	echo "Shit is kapot G";
		?></br><img src="image/shitiskapotG.jpg" alt="Shit is kapot G"><?php
}
else { 
?>
	<div id="Logo">
<?php
	echo "<img src='" . $jsonArray['clanDetails']['results']['clanBadgeImg']['l'] . "'><br />";
?>
	</div>

	<br /><br /><br /><br /><br /></br></br></br>


<?php
	echo "Clan: " . $jsonArray['clanDetails']['results']['name'] . "<br />";
	echo "Clan level: " . $jsonArray['clanDetails']['results']['clanLevel'] . "<br />";
	echo "Gewonnen oorlogen: " . $jsonArray['clanDetails']['results']['warWins'] . "<br />";
	echo "Aantal leden: " . $jsonArray['clanDetails']['results']['members'] . "<br />";
	echo "Uitleg: " . $jsonArray['clanDetails']['results']['description'] . "<br />";
	echo "Lokatie: " . $jsonArray['clanDetails']['results']['locationName'] . "<br />";
?>



	<div id="log">
	<table cellspacing="0" cellpadding="0">
	  <tr>
		<th><b>Rank</b></th>
		<th><b>League</b></th>
		<th><b>Naam</b></th>
		<th><b>Rol</b></th> 
		<th><b>Level</b></th>
		<th><b>Trophies</b></th>
		<th><b>Donaties</b></th>
		<th><b>Ontvangen</b></th>
		<th><b>Ratio</b></th>
	  </tr>
	  </div>
	  
	 <div>
<?php

	for($i = 0; $i < $jsonArray['clanDetails']['results']['members']; $i++) {
		$donated = $jsonArray['clanDetails']['results']['memberList'][$i]['donations'];
		$donationsReceived = $jsonArray['clanDetails']['results']['memberList'][$i]['donationsReceived'];
		$ratio = ($donationsReceived == 0 ? 0 : $donated/$donationsReceived);
		$rank = $jsonArray['clanDetails']['results']['memberList'][$i]['clanRank'];
		$name = $jsonArray['clanDetails']['results']['memberList'][$i]['name'];
		//Role translaten naar Nederlands
		$rol = $jsonArray['clanDetails']['results']['memberList'][$i]['role'];
		switch($rol) {
							case 'leader':
								$rol = 'Leider';
							break;
							
							case 'member':
								$rol = 'Lid';
							break;
							
							case 'admin':
								$rol = 'Oudste';
							break;
							
							case 'coLeader':
								$rol = 'CoLeider';
							break;
							
							default:
								$rol = 'Onbekende shizzle';
							break;
		}
		/*  Checkboces uitcommenten
		echo "<tr>";
			if (($name == 'Justin' and $rol = 'Leider')or($name == 'Rizzle' and $rol = 'CoLeider')){
			echo "<td>" ?> <input class="Vergelijk" type="checkbox" style ="width: 20px; height:20px;" name="Vergelijken"  id ='<?echo $i;?>' checked><?echo $rank;?><br><?php "</td>";
			} else {
			echo "<td>" ?> <input class="Vergelijk" type="checkbox" style ="width: 20px; height:20px;" name="Vergelijken" id ='<?echo $i;?>' ><?echo $rank;?><br><?php "</td>"; 
			} */
			
			echo "<td>" . $rank . "</td>"; 
			echo "<td><img src='" . $jsonArray['clanDetails']['results']['memberList'][$i]['leagueBadgeImg']['l'] . "'/></td>";
			echo "<td>" . $name . "</td>"; 
			echo "<td>" . $rol . "</td>";
			echo "<td>" . $jsonArray['clanDetails']['results']['memberList'][$i]['expLevel'] . "</td>";
			echo "<td>" . $jsonArray['clanDetails']['results']['memberList'][$i]['trophies'] . "</td>";
			echo "<td>" . $donated . "</td>";
			echo "<td>" . $donationsReceived . "</td>";
			echo "<td>" .  number_format((float)$ratio, 2, '.', '') . "</td>";
		echo "</tr>";
	}
}
?>
</div>
</table>


<P> Created by Rizzle & Justin &copy 2015 - <?php echo date("Y"); ?></p>
</body>

</html>