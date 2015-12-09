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
include("functions.php");

$contents = file_get_contents('https://set7z18fgf.execute-api.us-east-1.amazonaws.com/prod/?route=getClanDetails&clanTag=%232CRCJU2V', false);

$jsonArray = json_decode($contents, true);
?>
<div id="Logo">
<?php
echo "<img src='" . $jsonArray['clanDetails']['results']['clanBadgeImg']['l'] . "'><br />";
?>
</div>
<br /><br /><br /><br /><br /><br />

<?php 
donationRatio($jsonArray);
echo "<br /><br /><br />";
donationCount($jsonArray); 
?>

<br /><br /><br /><br /><br />
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
	$positie = 6;
	$rpositie = 6;
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
	
	if ($positie == 5)
	{
		$DonAantal5 = $donated;
		$DonNaam5 = $name;
	}
	
	if ($positie == 4)
	{
		$DonAantal5 = $DonAantal4;
		$DonNaam5 = $DonNaam4;
		$DonAantal4 = $donated;
		$DonNaam4 = $name;
	}
	if ($positie == 3)
	{
		$DonAantal5 = $DonAantal4;
		$DonNaam5 = $DonNaam4;
		$DonAantal4 = $DonAantal3;
		$DonNaam4 = $DonNaam3;
		$DonAantal3 = $donated;
		$DonNaam3 = $name;
	}
	if ($positie == 2)
	{
		$DonAantal5 = $DonAantal4;
		$DonNaam5 = $DonNaam4;
		$DonAantal4 = $DonAantal3;
		$DonNaam4 = $DonNaam3;
		$DonAantal3 = $DonAantal2;
		$DonNaam3 = $DonNaam2;
		$DonAantal2 = $donated;
		$DonNaam2 = $name;
	}
	if ($positie == 1)
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
	}
	
	
	if ($ratio > $RatAantal5){
	$rpositie = 5;
	}
	if ($ratio > $RatAantal4){
	$rpositie = 4;
	}
	if ($ratio > $RatAantal3){
	$rpositie = 3;
	}
	if ($ratio > $RatAantal2){
	$rpositie = 2;
	}
	if ($ratio > $RatAantal1){
	$rpositie = 1;
	}
	
	if ($rpositie == 5)
	{
		$RatAantal5 = $ratio;
		$RatNaam5 = $name;
	}
	
	if ($rpositie == 4)
	{
		$RatAantal5 = $RatAantal4;
		$RatNaam5 = $RatNaam4;
		$RatAantal4 = $ratio;
		$RatNaam4 = $name;
	}
	if ($rpositie == 3)
	{
		$RatAantal5 = $RatAantal4;
		$RatNaam5 = $RatNaam4;
		$RatAantal4 = $RatAantal3;
		$RatNaam4 = $RatNaam3;
		$RatAantal3 = $ratio;
		$RatNaam3 = $name;
	}
	if ($rpositie == 2)
	{
		$RatAantal5 = $RatAantal4;
		$RatNaam5 = $RatNaam4;
		$RatAantal4 = $RatAantal3;
		$RatNaam4 = $RatNaam3;
		$RatAantal3 = $RatAantal2;
		$RatNaam3 = $RatNaam2;
		$RatAantal2 = $ratio;
		$RatNaam2 = $name;
	}
	if ($rpositie == 1)
	{
		$RatAantal5 = $RatAantal4;
		$RatNaam5 = $RatNaam4;
		$RatAantal4 = $RatAantal3;
		$RatNaam4 = $RatNaam3;
		$RatAantal3 = $RatAantal2;
		$RatNaam3 = $RatNaam2;
		$RatAantal2 = $RatAantal1;
		$RatNaam2 = $RatNaam1;
		$RatAantal1 = $ratio;
		$RatNaam1 = $name;		
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
		echo "<td>" .  number_format((float)$ratio, 2, '.', '') . "</td>";
	echo "</tr>";
}


?>
</table>

</body>

</html>