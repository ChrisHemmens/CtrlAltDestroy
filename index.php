<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<style>

{ margin: 0; padding: 0; }

html { 
        background: url('image/awhyeah.jpg') no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
}

#Logo{ 
position:absolute;
    width:300px;
    height:200px;
    z-index:15;
    left:50%;
    margin: 0px 0 0 -105px;
}

</style>
<head>
    <title>CtrlAltDestroy</title>
	<meta name="MobileOptimized" content="width"  />
	<link rel="shortcut icon" type="image/jpg" href="image/awhyeah2.jpg">
			  
    <link href="tablecloth/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
	<script type="text/javascript" src="tablecloth/tablecloth.js"></script>
</head>


   <?php
//php expert shizzle van rizzle
$context = stream_context_create(array(
    'http'=>array(
        'method' => "GET",
        'header' => "Accept-Encoding: gzip;q=0, compress;q=0\r\n",
    )
));

$contents = file_get_contents('https://set7z18fgf.execute-api.us-east-1.amazonaws.com/prod/?route=getClanDetails&clanTag=%232CRCJU2V', false, $context);

$jsonArray = json_decode($contents, true);
?>
<div id="Logo">
<?php
echo "<img src='" . $jsonArray['clanDetails']['results']['clanBadgeImg']['l'] . "'><br />";
?>
</div>
<br /><br /><br /><br /><br /><br /><br /><br />
<?php
echo "Clan: " . $jsonArray['clanDetails']['results']['name'] . "<br />";
echo "Clan level: " . $jsonArray['clanDetails']['results']['clanLevel'] . "<br />";
echo "Gewonnen oorlogen: " . $jsonArray['clanDetails']['results']['warWins'] . "<br />";
echo "Leden: " . $jsonArray['clanDetails']['results']['members'] . "<br />";
echo "Uitleg: " . $jsonArray['clanDetails']['results']['description'] . "<br />";
echo "Lokatie: " . $jsonArray['clanDetails']['results']['locationName'] . "<br />";
?>
</div>

<div id="log">
<table cellspacing="0" cellpadding="0">
  <tr>
    <th><b>Rank</b></th>
	<th><b>Logo</b></th>
	<th><b>Naam</b></th>
    <th><b>Rol</b></th> 
	<th><b>Level</b></th>
    <th><b>Trophies</b></th>
	<th><b>Donaties</b></th>
	<th><b>Ontvangen</b></th>
	<th><b>Ratio</b></th>
  </tr>
  </div>
  
 
<?php
for($i = 0; $i < $jsonArray['clanDetails']['results']['members']; $i++) {
	$donated = $jsonArray['clanDetails']['results']['memberList'][$i]['donations'];
	$donationsReceived = $jsonArray['clanDetails']['results']['memberList'][$i]['donationsReceived'];
	$ratio = ($donationsReceived == 0 ? 0 : $donated/$donationsReceived);
	$ratioColor = ($ratio >= 1 ? "green" : "red");
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

	echo "<tr>";
		echo "<td>" . $jsonArray['clanDetails']['results']['memberList'][$i]['clanRank'] . "</td>";
		echo "<td><img src='" . $jsonArray['clanDetails']['results']['memberList'][$i]['leagueBadgeImg']['l'] . "'/></td>";
		echo "<td>" . $jsonArray['clanDetails']['results']['memberList'][$i]['name'] . "</td>"; 
		echo "<td>" . $rol . "</td>";
		echo "<td>" . $jsonArray['clanDetails']['results']['memberList'][$i]['expLevel'] . "</td>";
		echo "<td>" . $jsonArray['clanDetails']['results']['memberList'][$i]['trophies'] . "</td>";
		echo "<td>" . $donated . "</td>";
		echo "<td>" . $donationsReceived . "</td>";
		echo "<td bgcolor=\"". $ratioColor . "\">" .  number_format((float)$ratio, 2, '.', '') . "</td>";
	echo "</tr>";
}
?>
</table>

</body>

</html>