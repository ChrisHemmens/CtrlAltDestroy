<html>
<head>
    <title>Love To Farm</title>
	<meta charset="utf-8"  />
	<link rel="shortcut icon" type="image/jpg" href="/image/awhyeah2.jpg">
			  
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
		<li><a href="index.php" title="Home">Home</a></li>
    	<li><a href="walloffame.php" title="Chat">Wall of fame</a><li>
    	<li><a href="stats.php" title="Stats">Stats</a></li>
    	<li><a href="tool.php" title="Tool">Tool</a><li>
	</ul>
</div>

</br></br></br></br>

<?php
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
else { 
?>
	<div id="Logo">
<?php
	echo "<img src='" . $jsonArray['badgeUrls']['medium'] . "'><br />";
?>
	</div>

	<br /><br /><br /><br /><br /></br></br></br>


<?php
	echo "Clan: " . $jsonArray['name'] . "<br />";
	echo "Clan level: " . $jsonArray['clanLevel'] . "<br />";
	echo "War wins: " . $jsonArray['warWins'] . "<br />";
	echo "Members: " . $jsonArray['members'] . "<br />";
	echo "Clan description: " . $jsonArray['description'] . "<br />";
	echo "Location: " . $jsonArray['location']['name'] . "<br />";

include("functions.php");

membersList($jsonArray); 
} 
?>


<P> Created by Rizzle & Justin &copy 2015 - <?php echo date("Y"); ?></p>
</body>

</html>