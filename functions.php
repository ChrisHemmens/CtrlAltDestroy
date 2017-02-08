<?php
function stats($jsonArray) {
	?>  
	<div>
		<font size="4">
			<?php
			$totalDonated = 0;
			$totalReceived = 0;
			$loyaal = 0;
			$ietsMinderLoyaal = 0;
			$gelijk = 0;
			$totalExp = 0;
			$totalTrophies = 0;

			for($i = 0; $i < $jsonArray['members']; $i++) {
				$aantalMembers = $jsonArray['members'];
				$donated = $jsonArray['memberList'][$i]['donations'];
				$donationsReceived = $jsonArray['memberList'][$i]['donationsReceived'];
				$expLvl =  $jsonArray['memberList'][$i]['expLevel'];
				$trophies =  $jsonArray['memberList'][$i]['trophies'];

				
				if ($donationsReceived > $donated){
					$ietsMinderLoyaal += 1;
				}
				if ($donationsReceived < $donated){
					$loyaal += 1;
				}
				if ($donationsReceived == $donated){
					$gelijk +=1;
				}

				$totalDonated += $donated;
				$totalReceived += $donationsReceived;
				$totalExp += $expLvl;
				$totalTrophies += $trophies;


			}


			$ratio = ($totalReceived == 0 ? 0 : $totalDonated/$totalReceived);

			echo "In deze periode zijn tot nu toe " . $totalDonated . " troepen gedoneerd door " . $aantalMembers . " leden. (gemiddeld " . number_format((int)($totalDonated / $aantalMembers)) .  " per lid) <html> </br> </html>";
			echo "Onze " . $aantalMembers. " leden hebben in totaal " . $totalReceived . " troepen ontvangen. (gemiddeld " . number_format((int)($totalReceived / $aantalMembers)) .  " per lid) <html> </br> </html>";
			echo "Het ratio van de clan is " . number_format((float)$ratio, 2, '.', '') . ", dit komt doordat we ";

			if ($totalReceived > $totalDonated){
				echo ($totalReceived - $totalDonated) . " troepen meer hebben ontvangen dan gegeven.";
			}
			if ($totalReceived < $totalDonated){
				echo ($totalDonated - $totalReceived) . " troepen meer hebben gegeven dan ontvangen.";
			}
			if ($totalReceived == $totalDonated){
				echo " precies evenveel troepen hebben ontvangen als gegeven.";
			}

			echo "<html> </br> </br> </html>";

			if ($loyaal > 1){
				echo $loyaal . " leden hebben meer troepen gegeven dan ontvangen.";
			}
			if ($loyaal == 0){
				echo "Op dit moment heeft (nog) niemand meer troepen gegeven dan ontvangen.";
			}
			if ($loyaal == 1){
				echo $loyaal . " lid heeft meer troepen gegeven dan ontvangen.";
			} 

			echo "<html> </br> </html>";

			if ($ietsMinderLoyaal > 1){
				echo $ietsMinderLoyaal . " leden hebben meer troepen ontvangen dan gegeven.";
			}
			if ($ietsMinderLoyaal == 0){
				echo "Op dit moment heeft (nog) niemand meer troepen ontvangen dan gegeven.";
			}
			if ($ietsMinderLoyaal == 1){
				echo $ietsMinderLoyaal . " lid heeft meer troepen ontvangen dan gegeven.";
			}

			echo "<html> </br> </html>";

			if ($gelijk > 1){
				echo $gelijk . " leden hebben evenveel troepen gegeven als ontvangen."; 
			}
			if ($gelijk == 0){
				echo "Op dit moment heeft niemand evenveel troepen gegeven als ontvangen.";
			}
			if ($gelijk == 1){
				echo $gelijk . " lid heeft evenveel troepen gegeven als ontvangen.";
			}
			echo "<html> </br> </br> </html>";
			echo "Samen hebben we " . $totalTrophies . " trophies en " . $totalExp . " experience, dat is gemiddeld " . number_format((int)($totalTrophies / $aantalMembers)) . " trophies en " . number_format((int)($totalExp / $aantalMembers)) . " experience per lid.";
			?>
		</font>
	</div>
	<?php
}
?>
<?php
function membersList($jsonArray) {
	?>
	<div id="log">
		<table id="members" class="table table-striped table-bordered" cellspacing="0" cellpadding="0" width="100%">
			<thead>
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
			</thead>
			<tfoot>
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
			</tfoot>
		</div>
		<div>
			<?php
			echo "<tbody>";
			for($i = 0; $i < $jsonArray['members']; $i++) {
				$donated = $jsonArray['memberList'][$i]['donations'];
				$donationsReceived = $jsonArray['memberList'][$i]['donationsReceived'];
				$ratio = ($donationsReceived == 0 ? 0 : $donated/$donationsReceived);
				$rank = $jsonArray['memberList'][$i]['clanRank'];
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
				echo "<tr>";					
				echo "<td>" . $rank . "</td>"; 
				echo "<td><img src='" . $jsonArray['memberList'][$i]['league']['iconUrls']['small'] . "'/></td>";
				echo "<td>" . $name . "</td>"; 
				echo "<td>" . $rol . "</td>";
				echo "<td>" . $jsonArray['memberList'][$i]['expLevel'] . "</td>";
				echo "<td>" . $jsonArray['memberList'][$i]['trophies'] . "</td>";
				echo "<td>" . $donated . "</td>";
				echo "<td>" . $donationsReceived . "</td>";
				echo "<td>" .  number_format((float)$ratio, 2, '.', '') . "</td>";
				echo "</tr>";
			}
			echo "</tbody>";
			?>
		</div>
	</table>
	<?php
}
?>
<?php
function membersListSmall($jsonArray) {
	?>
	<div id="log">
		<table id="membersSmall" class="table table-striped table-bordered" cellspacing="0" cellpadding="0" width="100%">
			<thead>
				<tr>
					<th><b>Rank</b></th>
					<th><b>Naam</b></th>
					<th><b>Rol</b></th> 
					<th><b>Level</b></th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th><b>Rank</b></th>
					<th><b>Naam</b></th>
					<th><b>Rol</b></th> 
					<th><b>Level</b></th>
				</tr>
			</tfoot>
		</div>

		<div>
			<?php

			echo "<tbody>";
			for($i = 0; $i < $jsonArray['members']; $i++) {
				$rank = $jsonArray['memberList'][$i]['clanRank'];
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
					$rol = 'Co';
					break;

					default:
					$rol = 'Onbekende shizzle';
					break;
				}
				echo "<tr>";					
				echo "<td>" . $rank . "</td>"; 
				echo "<td>" . $name . "</td>"; 
				echo "<td>" . $rol . "</td>";
				echo "<td>" . $jsonArray['memberList'][$i]['expLevel'] . "</td>";
				echo "</tr>";
			}
			echo "</tbody>";
			?>
		</div>
	</table>
	<?php
}
?>
<?php
function coLeadersList($jsonArray) {
	?>
	<div id="log">
		<table id="coList" class="table table-striped table-bordered" cellspacing="0" cellpadding="0">
			<?php echo "<h2>De superieure leiders: </h2>";  ?>
			<thead>
				<tr>
					<th><b>League</b></th>
					<th><b>Naam</b></th>
					<th><b>Rol</b></th> 
				</tr>
			</thead>
		</div>

		<div>
			<?php
			echo "<tbody>";
			for($i = 0; $i < $jsonArray['members']; $i++) {
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

				if ($rol == 'Leider'){
					echo "<tr>";					
					echo "<td><img src='" . $jsonArray['memberList'][$i]['league']['iconUrls']['small'] . "'/></td>";
					echo "<td>" . $name . "</td>"; 
					echo "<td>" . $rol . "</td>";
					echo "</tr>";
				}
			}
			
			for($i = 0; $i < $jsonArray['members']; $i++) {
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

				if ($rol == 'CoLeider'){
					echo "<tr>";					
					echo "<td><img src='" . $jsonArray['memberList'][$i]['league']['iconUrls']['small'] . "'/></td>";
					echo "<td>" . $name . "</td>"; 
					echo "<td>" . $rol . "</td>";
					echo "</tr>";
				}
			}
			echo "</tbody>";
			?>
		</div>
	</table>
	<?php
}
?>
<?php
function oudsteList($jsonArray) {
	?>
	<div id="log">
		<table id="oudsteList" class="table table-striped table-bordered"  cellspacing="0" cellpadding="0">
			<?php echo "<h2>De big bosses: </h2>";  ?>
			<thead>
				<tr>
					<th><b>League</b></th>
					<th><b>Naam</b></th>
					<th><b>Rol</b></th> 
				</tr>
			</thead>
		</div>
		<div>
			<?php			
			echo "<tbody>";
			for($i = 0; $i < $jsonArray['members']; $i++) {
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

				if ($rol == 'Oudste'){
					echo "<tr>";					
					echo "<td><img src='" . $jsonArray['memberList'][$i]['league']['iconUrls']['small'] . "'/></td>";
					echo "<td>" . $name . "</td>"; 
					echo "<td>" . $rol . "</td>";
					echo "</tr>";
				}
			}
			echo "</tbody>";
			?>
		</div>
	</table>
	<?php
}
?>
<?php
function donationRatio($jsonArray) {{
	$RatAantal1 = 0;
	$RatAantal1 = 0;
	$RatAantal2 = 0;
	$RatAantal3 = 0;
	$RatAantal4 = 0;
	$RatAantal5 = 0;
	$RatNaam1 = 'GhostN00b';
	$RatNaam2 = 'GhostN00b';
	$RatNaam3 = 'GhostN00b';
	$RatNaam4 = 'GhostN00b';
	$RatNaam5 = 'GhostN00b';

	for($i = 0; $i < $jsonArray['members']; $i++) {
		$positie = 6;
		$name = $jsonArray['memberList'][$i]['name'];
		$donated = $jsonArray['memberList'][$i]['donations'];
		$donationsReceived = $jsonArray['memberList'][$i]['donationsReceived'];
		$ratio = ($donationsReceived == 0 ? 0 : $donated/$donationsReceived);

		if ($ratio > $RatAantal5) $positie = 5;
		if ($ratio > $RatAantal4) $positie = 4;
		if ($ratio > $RatAantal3) $positie = 3;
		if ($ratio > $RatAantal2) $positie = 2;
		if ($ratio > $RatAantal1) $positie = 1;

		if ($positie == 5)
		{
			$RatAantal5 = $ratio;
			$RatNaam5 = $name;
		}

		if ($positie == 4)
		{
			$RatAantal5 = $RatAantal4;
			$RatNaam5 = $RatNaam4;
			$RatAantal4 = $ratio;
			$RatNaam4 = $name;
		}

		if ($positie == 3)
		{
			$RatAantal5 = $RatAantal4;
			$RatNaam5 = $RatNaam4;
			$RatAantal4 = $RatAantal3;
			$RatNaam4 = $RatNaam3;
			$RatAantal3 = $ratio;
			$RatNaam3 = $name;
		}

		if ($positie == 2)
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

		if ($positie == 1)
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
	}
}
?>
<div id="log">
	<table id="ratio" class="table table-striped table-bordered" cellspacing="0" cellpadding="0">
		<?php 	echo "<h2>Beste ratio</h2>"; ?> 
		<thead>
			<tr>
				<th><b>Rank</b></th>
				<th><b>Naam</b></th>
				<th><b>Ratio</b></th> 
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><b>1</b></td>
				<td><b><?php echo $RatNaam1;?> </b></td>
				<td><b><?php echo number_format((float)$RatAantal1, 2, '.', '');?></b> </td>
			</tr>
			<tr>
				<td>2</td>
				<td><?php echo $RatNaam2;?> </td>
				<td><?php echo number_format((float)$RatAantal2, 2, '.', '');?> </td>
			</tr>
			<tr>
				<td>3</td>
				<td><?php echo $RatNaam3;?> </td>
				<td><?php echo number_format((float)$RatAantal3, 2, '.', '');?> </td>
			</tr>
			<tr>
				<td>4</td>
				<td><?php echo $RatNaam4;?> </td>
				<td><?php echo number_format((float)$RatAantal4, 2, '.', '');?> </td>
			</tr>
			<tr>
				<td>5</td>
				<td><?php echo $RatNaam5;?> </td>
				<td><?php echo number_format((float)$RatAantal5, 2, '.', '');?> </td>
			</tr>
		</tbody>
	</table>
</div>
<?php } ?>

<?php
function donationCount($jsonArray) {{
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

	for($i = 0; $i < $jsonArray['members']; $i++) {
		$positie = 6;
		$name = $jsonArray['memberList'][$i]['name'];
		$donated = $jsonArray['memberList'][$i]['donations'];


		if ($donated > $DonAantal5) $positie = 5;
		if ($donated > $DonAantal4) $positie = 4;
		if ($donated > $DonAantal3) $positie = 3;
		if ($donated > $DonAantal2) $positie = 2;
		if ($donated > $DonAantal1) $positie = 1;

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
	}
}

?>
<div id="log">
	<table id="donaties" class="table table-striped table-bordered" cellspacing="0" cellpadding="0">
		<?php echo "<h2>Meeste troepen gedoneerd</h2>";  ?>
		<thead>
			<tr>
				<th><b>Rank</b></th>
				<th><b>Naam</b></th>
				<th><b>Gedoneerd</b></th> 
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><b>1</b></td>
				<td><b><?php echo $DonNaam1;?> </b></td>
				<td><b><?php echo $DonAantal1;?> </b></td>
			</tr>
			<tr>
				<td>2</td>
				<td><?php echo $DonNaam2;?> </td>
				<td><?php echo $DonAantal2;?> </td>
			</tr>
			<tr>
				<td>3</td>
				<td><?php echo $DonNaam3;?> </td>
				<td><?php echo $DonAantal3;?> </td>
			</tr>
			<tr>
				<td>4</td>
				<td><?php echo $DonNaam4;?> </td>
				<td><?php echo $DonAantal4;?> </td>
			</tr>
			<tr>
				<td>5</td>
				<td><?php echo $DonNaam5;?> </td>
				<td><?php echo $DonAantal5;?> </td>
			</tr>
		</tbody>
	</table>
</div>
<?php } ?>

<?php
function requestCount($jsonArray) {{
	$ReqAantal1 = 1;
	$ReqAantal2 = 1;
	$ReqAantal3 = 1;
	$ReqAantal4 = 1;
	$ReqAantal5 = 1;
	$ReqNaam1 = 'GhostN00b';
	$ReqNaam2 = 'GhostN00b';
	$ReqNaam3 = 'GhostN00b';
	$ReqNaam4 = 'GhostN00b';
	$ReqNaam5 = 'GhostN00b';

	for($i = 0; $i < $jsonArray['members']; $i++) {
		$positie = 6;
		$name = $jsonArray['memberList'][$i]['name'];
		$donationsReceived = $jsonArray['memberList'][$i]['donationsReceived'];


		if ($donationsReceived > $ReqAantal5) $positie = 5;
		if ($donationsReceived > $ReqAantal4) $positie = 4;
		if ($donationsReceived > $ReqAantal3) $positie = 3;
		if ($donationsReceived > $ReqAantal2) $positie = 2;
		if ($donationsReceived > $ReqAantal1) $positie = 1;

		if ($positie == 5)
		{
			$ReqAantal5 = $donationsReceived;
			$ReqNaam5 = $name;
		}

		if ($positie == 4)
		{
			$ReqAantal5 = $ReqAantal4;
			$ReqNaam5 = $ReqNaam4;
			$ReqAantal4 = $donationsReceived;
			$ReqNaam4 = $name;
		}
		if ($positie == 3)
		{
			$ReqAantal5 = $ReqAantal4;
			$ReqNaam5 = $ReqNaam4;
			$ReqAantal4 = $ReqAantal3;
			$ReqNaam4 = $ReqNaam3;
			$ReqAantal3 = $donationsReceived;
			$ReqNaam3 = $name;
		}
		if ($positie == 2)
		{
			$ReqAantal5 = $ReqAantal4;
			$ReqNaam5 = $ReqNaam4;
			$ReqAantal4 = $ReqAantal3;
			$ReqNaam4 = $ReqNaam3;
			$ReqAantal3 = $ReqAantal2;
			$ReqNaam3 = $ReqNaam2;
			$ReqAantal2 = $donationsReceived;
			$ReqNaam2 = $name;
		}
		if ($positie == 1)
		{
			$ReqAantal5 = $ReqAantal4;
			$ReqNaam5 = $ReqNaam4;
			$ReqAantal4 = $ReqAantal3;
			$ReqNaam4 = $ReqNaam3;
			$ReqAantal3 = $ReqAantal2;
			$ReqNaam3 = $ReqNaam2;
			$ReqAantal2 = $ReqAantal1;
			$ReqNaam2 = $ReqNaam1;
			$ReqAantal1 = $donationsReceived;
			$ReqNaam1 = $name;			
		}
	}
}

?>
<div id="log">
	<table id="ontvangen" class="table table-striped table-bordered"  cellspacing="0" cellpadding="0">
		<?php echo "<h2>Meeste troepen ontvangen</h2>";  ?>
		<thead>
			<tr>
				<th><b>Rank</b></th>
				<th><b>Naam</b></th>
				<th><b>Ontvangen</b></th> 
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><b>1</b></td>
				<td><b><?php echo $ReqNaam1;?> </b></td>
				<td><b><?php echo $ReqAantal1;?> </b></td>
			</tr>
			<tr>
				<td>2</td>
				<td><?php echo $ReqNaam2;?> </td>
				<td><?php echo $ReqAantal2;?> </td>
			</tr>
			<tr>
				<td>3</td>
				<td><?php echo $ReqNaam3;?> </td>
				<td><?php echo $ReqAantal3;?> </td>
			</tr>
			<tr>
				<td>4</td>
				<td><?php echo $ReqNaam4;?> </td>
				<td><?php echo $ReqAantal4;?> </td>
			</tr>
			<tr>
				<td>5</td>
				<td><?php echo $ReqNaam5;?> </td>
				<td><?php echo $ReqAantal5;?> </td>
			</tr>
		</tbody>
	</table>
</div>
<?php } ?>

<?php
function DonMemberCount($jsonArray) {{
	$DonMemberAantal1 = 1;
	$DonMemberAantal2 = 1;
	$DonMemberAantal3 = 1;
	$DonMemberAantal4 = 1;
	$DonMemberAantal5 = 1;
	$RatMember1 = 1;
	$RatMember2 = 1;
	$RatMember3 = 1;
	$RatMember4 = 1;
	$RatMember5 = 1;
	$DonMemberNaam1 = 'GhostN00b';
	$DonMemberNaam2 = 'GhostN00b';
	$DonMemberNaam3 = 'GhostN00b';
	$DonMemberNaam4 = 'GhostN00b';
	$DonMemberNaam5 = 'GhostN00b';

	for($i = 0; $i < $jsonArray['members']; $i++) {
		$positie = 6;
		$name = $jsonArray['memberList'][$i]['name'];
		$donated = $jsonArray['memberList'][$i]['donations'];
		$donationsReceived = $jsonArray['memberList'][$i]['donationsReceived'];
		$ratio = ($donationsReceived == 0 ? 0 : $donated/$donationsReceived);
		$rol = $jsonArray['memberList'][$i]['role'];

		if (($rol == 'member') and ($name != 'munstermanos')){  //munster had al oudste, overgedragen aan zeldenrust
			if ($donated > $DonMemberAantal5) $positie = 5;
			if ($donated > $DonMemberAantal4) $positie = 4;
			if ($donated > $DonMemberAantal3) $positie = 3;
			if ($donated > $DonMemberAantal2) $positie = 2;
			if ($donated > $DonMemberAantal1) $positie = 1;
		}
		
		if ($positie == 5)
		{
			$DonMemberAantal5 = $donated;
			$DonMemberNaam5 = $name;
			$RatMember5 = $ratio;
		}
		
		if ($positie == 4)
		{
			$DonMemberAantal5 = $DonMemberAantal4;
			$DonMemberNaam5 = $DonMemberNaam4;
			$RatMember5 = $RatMember4;
			$DonMemberAantal4 = $donated;
			$DonMemberNaam4 = $name;
			$RatMember4 = $ratio;
		}
		if ($positie == 3)
		{
			$DonMemberAantal5 = $DonMemberAantal4;
			$DonMemberNaam5 = $DonMemberNaam4;
			$RatMember5 = $RatMember4;
			$DonMemberAantal4 = $DonMemberAantal3;
			$DonMemberNaam4 = $DonMemberNaam3;
			$RatMember4 = $RatMember3;
			$DonMemberAantal3 = $donated;
			$DonMemberNaam3 = $name;
			$RatMember3 = $ratio;
		}
		if ($positie == 2)
		{
			$DonMemberAantal5 = $DonMemberAantal4;
			$DonMemberNaam5 = $DonMemberNaam4;
			$RatMember5 = $RatMember4;
			$DonMemberAantal4 = $DonMemberAantal3;
			$DonMemberNaam4 = $DonMemberNaam3;
			$RatMember4 = $RatMember3;
			$DonMemberAantal3 = $DonMemberAantal2;
			$DonMemberNaam3 = $DonMemberNaam2;
			$RatMember3 = $RatMember2;
			$DonMemberAantal2 = $donated;
			$DonMemberNaam2 = $name;
			$RatMember2 = $ratio;
		}
		if ($positie == 1)
		{
			$DonMemberAantal5 = $DonMemberAantal4;
			$DonMemberNaam5 = $DonMemberNaam4;
			$RatMember5 = $RatMember4;
			$DonMemberAantal4 = $DonMemberAantal3;
			$DonMemberNaam4 = $DonMemberNaam3;
			$RatMember4 = $RatMember3;
			$DonMemberAantal3 = $DonMemberAantal2;
			$DonMemberNaam3 = $DonMemberNaam2;
			$RatMember3 = $RatMember2;
			$DonMemberAantal2 = $DonMemberAantal1;
			$DonMemberNaam2 = $DonMemberNaam1;
			$RatMember2 = $RatMember1;
			$DonMemberAantal1 = $donated;
			$DonMemberNaam1 = $name;
			$RatMember1 = $ratio;			
		}
	}
}

?>
<div id="log">
	<table id="mogelijkOudste" class="table table-striped table-bordered"  cellspacing="0" cellpadding="0">
		<?php echo "<h2>Kanshebbers oudste</h2>";  ?>
		<thead>
			<tr>
				<th><b>Rank</b></th>
				<th><b>Naam</b></th>
				<th><b>Gedoneerd</b></th> 
				<th><b>Ratio</b></th> 
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><b>1</b></td>
				<td><b><?php echo $DonMemberNaam1;?> </b></td>
				<td><b><?php echo $DonMemberAantal1;?> </b></td>
				<td><b><?php echo number_format((float)$RatMember1, 2, '.', '');?> </b></td>
			</tr>
			<tr>
				<td>2</td>
				<td><?php echo $DonMemberNaam2;?> </td>
				<td><?php echo $DonMemberAantal2;?> </td>
				<td><?php echo number_format((float)$RatMember2, 2, '.', '');?> </td>
			</tr>
			<tr>
				<td>3</td>
				<td><?php echo $DonMemberNaam3;?> </td>
				<td><?php echo $DonMemberAantal3;?> </td>
				<td><?php echo number_format((float)$RatMember3, 2, '.', '');?> </td>
			</tr>
			<tr>
				<td>4</td>
				<td><?php echo $DonMemberNaam4;?> </td>
				<td><?php echo $DonMemberAantal4;?> </td>
				<td><?php echo number_format((float)$RatMember4, 2, '.', '');?> </td>
			</tr>
			<tr>
				<td>5</td>
				<td><?php echo $DonMemberNaam5;?> </td>
				<td><?php echo $DonMemberAantal5;?> </td>
				<td><?php echo number_format((float)$RatMember5, 2, '.', '');?> </td>
			</tr>
		</tbody>
	</table>
</div> 
<?php } ?>