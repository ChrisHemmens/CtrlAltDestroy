<?php
$context = stream_context_create(array(
    'http'=>array(
        'method' => "GET",
        'header' => "Accept-Encoding: gzip;q=0, compress;q=0\r\n",
    )
));

$contents = file_get_contents('https://set7z18fgf.execute-api.us-east-1.amazonaws.com/prod/?route=getClanDetails&clanTag=%232CRCJU2V', false, $context);

$jsonArray = json_decode($contents, true);

echo "<img src='" . $jsonArray['clanDetails']['results']['clanBadgeImg']['l'] . "'><br />";
echo "Clan: " . $jsonArray['clanDetails']['results']['name'] . "<br />";
echo "Clan level: " . $jsonArray['clanDetails']['results']['clanLevel'] . "<br />";
echo "Gewonnen oorlogen: " . $jsonArray['clanDetails']['results']['warWins'] . "<br />";
echo "Uitleg: " . $jsonArray['clanDetails']['results']['description'] . "<br />";
echo "Lokatie: " . $jsonArray['clanDetails']['results']['locationName'] . "<br />";

?>
<table border="5" style="width:50%">
  <tr>
    <td><b>Rank</b></td>
	<td><b>Naam</b></td>
    <td><b>Rol</b></td> 
	<td><b>Level</b></td>
    <td><b>Trophies</b></td>
	<td><b>Donaties</b></td>
	<td><b>Ontvangen</b></td>
	<td><b>Ratio</b></td>
  </tr>
  
<?php
for($i = 0; $i < $jsonArray['clanDetails']['results']['members']; $i++) {
	$donated = $jsonArray['clanDetails']['results']['memberList'][$i]['donations'];
	$donationsReceived = $jsonArray['clanDetails']['results']['memberList'][$i]['donationsReceived'];
	$ratio = ($donationsReceived == 0 ? 0 : $donated/$donationsReceived);
	$ratioColor = ($ratio >= 1 ? "green" : "red");

	echo "<tr>";
		echo "<td>" . $jsonArray['clanDetails']['results']['memberList'][$i]['clanRank'] . "</td>";
		echo "<td>" . $jsonArray['clanDetails']['results']['memberList'][$i]['name'] . "</td>"; 
		echo "<td>" . $jsonArray['clanDetails']['results']['memberList'][$i]['role'] . "</td>";
		echo "<td>" . $jsonArray['clanDetails']['results']['memberList'][$i]['expLevel'] . "</td>";
		echo "<td>" . $jsonArray['clanDetails']['results']['memberList'][$i]['trophies'] . "</td>";
		echo "<td>" . $donated . "</td>";
		echo "<td>" . $donationsReceived . "</td>";
		echo "<td bgcolor=\"". $ratioColor . "\">" . $ratio . "</td>";
	echo "</tr>";
}
?>
</table>
