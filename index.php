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
echo "Aantal leden: " . $jsonArray['clanDetails']['results']['members'] . "<br />";
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
$DonAantal1 = 1;
$DonAantal2 = 1;
$DonAantal3 = 1;
$DonAantal4 = 1;
$DonAantal5 = 1;
$DonNaam1 = 'GhostN00b';
$DonNaam2 = 'GhostN00b';
$DonNaam3 = 'GhostN00b';
$DonNaam4 = 'GhostN00b';
$DonNaam5 = 'GhostN00b';

for($i = 0; $i < $jsonArray['clanDetails']['results']['members']; $i++) {
	$donated = $jsonArray['clanDetails']['results']['memberList'][$i]['donations'];
	$donationsReceived = $jsonArray['clanDetails']['results']['memberList'][$i]['donationsReceived'];
	$ratio = ($donationsReceived == 0 ? 0 : $donated/$donationsReceived);
	$rank = $jsonArray['clanDetails']['results']['memberList'][$i]['clanRank'];
	$name = $jsonArray['clanDetails']['results']['memberList'][$i]['name'];
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
					
	if ($donated > $DonAantal5)
	{
		$DonAantal5 = $donated;
		$DonNaam5 = $name;
		echo $DonNaam5, $DonAantal5, $DonNaam4, $DonAantal4, $DonNaam3, $DonAantal3, $DonNaam2, $DonAantal2, $DonNaam1, $DonAantal1, "nr5" . "<br>";

	}
	
	if ($donated > $DonAantal4)
	{
		$DonAantal5 = $DonAantal4;
		$DonNaam5 = $DonNaam4;
		$DonAantal4 = $donated;
		$DonNaam4 = $name;
				echo $DonNaam5, $DonAantal5, $DonNaam4, $DonAantal4, $DonNaam3, $DonAantal3, $DonNaam2, $DonAantal2, $DonNaam1, $DonAantal1, "nr4" . "<br>";

	}
	if ($donated > $DonAantal3)
	{
		$DonAantal5 = $DonAantal4;
		$DonNaam5 = $DonNaam4;
		$DonAantal4 = $DonAantal3;
		$DonNaam4 = $DonNaam3;
		$DonAantal3 = $donated;
		$DonNaam3 = $name;
				echo $DonNaam5, $DonAantal5, $DonNaam4, $DonAantal4, $DonNaam3, $DonAantal3, $DonNaam2, $DonAantal2, $DonNaam1, $DonAantal1, "nr3" . "<br>";

	}
	if ($donated > $DonAantal2)
	{
		$DonAantal5 = $DonAantal4;
		$DonNaam5 = $DonNaam4;
		$DonAantal4 = $DonAantal3;
		$DonNaam4 = $DonNaam3;
		$DonAantal3 = $DonAantal2;
		$DonNaam3 = $DonNaam2;
		$DonAantal2 = $donated;
		$DonNaam2 = $name;
				echo $DonNaam5, $DonAantal5, $DonNaam4, $DonAantal4, $DonNaam3, $DonAantal3, $DonNaam2, $DonAantal2, $DonNaam1, $DonAantal1, "nr2" . "<br>";

	}
	if ($donated > $DonAantal1)
	{
		$DonAantal5 = $DonAantal4;
		$DonNaam5 = $DonNaam4;
		$DonAantal4 = $DonAantal3;
		$DonNaam4 = $DonNaam3;
		$DonAantal3 = $DonAantal2;
		$DonNaam3 = $DonNaam2;
		$DonAantal2 = $DonAantal1;
		$DonNaam2 = $DonNaam1;
		$DonAantal1 = $donated;
		$DonNaam1 = $name;	
		echo $DonNaam5, $DonAantal5, $DonNaam4, $DonAantal4, $DonNaam3, $DonAantal3, $DonNaam2, $DonAantal2, $DonNaam1, $DonAantal1, "nr1" . "<br>";
		
	}
	
	
		

	echo "<tr>";
		echo "<td>" . $rank . "</td>";
		echo "<td><img src='" . $jsonArray['clanDetails']['results']['memberList'][$i]['leagueBadgeImg']['l'] . "'/></td>";
		echo "<td>" . $name . "</td>"; 
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

<?php
echo $DonNaam5, $DonAantal5, $DonNaam4, $DonAantal4, $DonNaam3, $DonAantal3, $DonNaam2, $DonAantal2, $DonNaam1, $DonAantal1;
?>
</body>

</html>