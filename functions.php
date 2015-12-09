<?php
function donationRatio($jsonArray) {
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

	for($i = 0; $i < $jsonArray['clanDetails']['results']['members']; $i++) {
		$positie = 6;
		$rpositie = 6;
		$name = $jsonArray['clanDetails']['results']['memberList'][$i]['name'];
		$donated = $jsonArray['clanDetails']['results']['memberList'][$i]['donations'];
		$donationsReceived = $jsonArray['clanDetails']['results']['memberList'][$i]['donationsReceived'];
		$ratio = ($donationsReceived == 0 ? 0 : $donated/$donationsReceived);
		$rank = $jsonArray['clanDetails']['results']['memberList'][$i]['clanRank'];
		
		if ($ratio > $RatAantal5) $rpositie = 5;
		if ($ratio > $RatAantal4) $rpositie = 4;
		if ($ratio > $RatAantal3) $rpositie = 3;
		if ($ratio > $RatAantal2) $rpositie = 2;
		if ($ratio > $RatAantal1) $rpositie = 1;
		
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
	}
	
	echo $RatNaam1 . ":  " . $RatAantal1, "<br>", 
	$RatNaam2 . ":  " . $RatAantal2, "<br>", 
	$RatNaam3 . ":  " . $RatAantal3, "<br>", 
	$RatNaam4 . ":  " . $RatAantal4, "<br>", 
	$RatNaam5 . ":  " . $RatAantal5;
}

function donationCount($jsonArray) {
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
		$positie = 6;
		$rpositie = 6;
		$name = $jsonArray['clanDetails']['results']['memberList'][$i]['name'];
		$donated = $jsonArray['clanDetails']['results']['memberList'][$i]['donations'];
		$donationsReceived = $jsonArray['clanDetails']['results']['memberList'][$i]['donationsReceived'];
		$ratio = ($donationsReceived == 0 ? 0 : $donated/$donationsReceived);
		$rank = $jsonArray['clanDetails']['results']['memberList'][$i]['clanRank'];
		
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
	
	echo $DonNaam1 . ":  " . $DonAantal1, "<br>", 
	$DonNaam2 . ":  " . $DonAantal2, "<br>", 
	$DonNaam3 . ":  " . $DonAantal3, "<br>", 
	$DonNaam4 . ":  " . $DonAantal4, "<br>", 
	$DonNaam5 . ":  " . $DonAantal5, "<br>", 
	"<br>";
}
?>