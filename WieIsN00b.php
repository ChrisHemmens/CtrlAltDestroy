<html>
<head>
    <title>CtrlAltDestroy - Vergelijk spelers, resultaat</title>
	<meta charset="utf-8" />
	<link rel="shortcut icon" type="image/jpg" href="image/awhyeah2.jpg">
	<link href="DitIsStyle.css" rel="stylesheet" type="text/css" />
			  
 <!--   <link href="tablecloth/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
	<script type="text/javascript" src="tablecloth/tablecloth.js"></script>  -->         
 
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
		<li><a href="index.php" title="Home">Home</a></li>
    	<li><a href="claninfo.php" title="Chat">Claninfo</a><li>
    	<li><a href="walloffame.php" title="Chat">Wall of fame</a><li>
    	<li><a href="stats.php" title="Stats">Stats</a></li>
    	<li><a href="tool.php" title="Tool">Tool</a><li>
	</ul>
</div>
</br></br></br>

<?php

foreach ($_GET['Tag'] as $value)
{
	$i++;
    $name[$i] = $value; 
    echo $value .  " komt op plek " . $i . "</br>";

 
}

$aantalTags = sizeof($name);
echo "In totaal heb je " . $aantalTags . " namen gekozen.</br>" ;

if ($aantalTags < 2){
	echo "We hebben minimaal 2 namen nodig om te vergelijken";
}

if ($aantalTags > 6){
	echo "Je kunt maximaal 5 clashers selecteren om te vergelijken. </br> Voor statistieken en ranglijsten van de gehele clan kan je terecht op de Stats pagina </br>";
}

if ($aantalTags>1 && $aantalTags <6) {
echo "TUSSEN 2 EN 5 DUS GOED, NU TEST: </br>"; 

for ($i=1; $i <= ($aantalTags) ; $i++) { 
 	//echo $name[$i] . ", </br>";
 	echo $name[$i] ." zit op plek " . $i . "</br>";
 } 

 	
?>
	<div>
<?php
//php expert shizzle
include("functions.php");

//Connect to the dataProvider
include 'topSecretShizzle.php';

$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>array(
                "Accept: application/json",
                "Authorization: Bearer " . $api_key
        )
  )
);
$url = $url . '/' . rawurlencode($tag);

$contents = file_get_contents($url, null, stream_context_create($opts));
$jsonArray = json_decode($contents, true);


if(!$contents) {
	echo "Shit is kapot G";
	?></br><img src="image/shitiskapotG.jpg" alt="Shit is kapot G"><?php
}
else {  ?>


<?php

	for($i = 0; $i < $jsonArray['members']; $i++) {
		$rank = $jsonArray['memberList'][$i]['clanRank'];
		$playerTag = $jsonArray['memberList'][$i]['tag'];
		$name = $jsonArray['memberList'][$i]['name'];
		//Role translaten naar Nederlands
		$rol = $jsonArray['memberList'][$i]['role'];
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
		
		?>


<?php
	}
	?>
<?php
}}
?>
</div>

<P> Created by Rizzle & Justin &copy 2015 - <?php echo date("Y"); ?></p>
     </body>
</html>