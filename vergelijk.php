<html>
<head>
    <title>CtrlAltDestroy - Vergelijk</title>
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
		<li><a href="/coc/index.php" title="Home">Home</a></li>
		<li><a href="/coc/claninfo.php" title="Chat">Claninfo</a><li>
		<li><a href="/coc/stats.php" title="Stats">Stats</a></li>
		<li><a href="/coc/vergelijk.php" title="Compare">Vergelijk spelers</a></li>
		<li><a href="/coc/tool.php" title="Tool">Tool</a><li>
	</ul>
</div>
</br></br></br>

	<div>
<?php
//php expert shizzle van Rizzle
include("functions.php");

$contents = file_get_contents('https://set7z18fgf.execute-api.us-east-1.amazonaws.com/prod/?route=getClanDetails&clanTag=%232CRCJU2V', false);

$jsonArray = json_decode($contents, true);

if(!$contents) {
	echo "Shit is kapot G";
	?></br><img src="image/shitiskapotG.jpg" alt="Shit is kapot G"><?php
}
else {  ?>


	
<form action="VergelijkDezeShizzleG">
<select name="Naam" multiple>


<?php

	for($i = 0; $i < $jsonArray['clanDetails']['results']['members']; $i++) {
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
		
		?>

  <option value='<?echo $name;?>'><?echo $rank . " " . $name . " " . $rol;?></option>

<?php
	}
	?>
</select>
<input type="submit">
</form>
<?php
}
?>
</div>

<P> Created by Rizzle & Justin ® 2015 </p>
     </body>
</html>