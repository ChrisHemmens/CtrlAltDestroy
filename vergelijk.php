<html>
<head>
    <title>CtrlAltDestroy - vergelijk</title>
	<meta charset="utf-8" />
	<link rel="shortcut icon" type="image/jpg" href="image/awhyeah2.jpg">
			  
 <!--   <link href="tablecloth/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
	<script type="text/javascript" src="tablecloth/tablecloth.js"></script>  -->         
	<script type="text/JavaScript" src="vergelijk.js"></script>   
    <script src="jquery-2.1.4.min.js"></script>
			
<script>
$("[id*=shizzle] input:checkbox").change(function () {
          var maxSelection = 0;
          if ($("[id*=shizzle] input:checkbox:checked").length > maxSelection) {
              $(this).prop("checked", false);
              alert("Please select a maximum of " + maxSelection + " items.");
          }
      })
</script>
		 <style>
 

{ margin: 0; padding: 0; }

html { 
        background: url('image/awhyeah.jpg') no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
}


	 #menu ul {
	list-style-type: none;
}
#menu ul li {
	display: inline;
	margin: 0;
}
#menu ul li a {
	/* Nieuw */
	padding: 15px;
	background-color: #44699C;
	font-family: Verdana;
	color: white;
}
</style>
</head>

<body>
<input type=button value='Hey jij daar, pssst, klik hier eens' OnClick="show_alert()">

   <?php
//php expert shizzle van Rizzle
include("functions.php");

$contents = file_get_contents('https://set7z18fgf.execute-api.us-east-1.amazonaws.com/prod/?route=getClanDetails&clanTag=%232CRCJU2V', false);

$jsonArray = json_decode($contents, true);

if(!$contents) {
	echo "Shit is kapot G";
}
else {  ?>

<div id="menu">
	<ul>
		<li><a href="/coc/index.php" title="Home">Home</a></li>
		<li><a href="/coc/stats.php" title="Stats">Stats</a></li>
		<li><a href="/coc/vergelijk.php" title="Compare">Vergelijk spelers</a></li>
		<li><a href="/coc/tool.php" title="Tool">Tool</a><li>
	</ul>
</div>


	<div id="log">
	<table cellspacing="0" cellpadding="0" id="shizzle">
	  <tr>
	    <th><b>Vergelijk</b></th>
		<th><b>League</b></th>
		<th><b>Naam</b></th>
		<th><b>Rol</b></th> 
		<th><b>Level</b></th>
		<th><b>Trophies</b></th>
	  </tr>
	  </div>
	  
	 <div>
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
		
		echo "<tr>";
			if (($name == 'Justin' and $rol = 'Leider')or($name == 'Rizzle' and $rol = 'CoLeider')){
			echo "<td>" ?> <input class="Vergelijk" type="checkbox" style ="width: 20px; height:20px;" name="Vergelijken"  value= "1" id ='<?echo$i;?>' checked><?echo $rank;?><br><?php "</td>";	
			} else {
				echo "<td>" ?> <input class="Vergelijk" type="checkbox" style ="width: 20px; height:20px;" name="Vergelijken"  value= "1" id ='<?echo$i;?>' ><?echo $rank;?><br><?php "</td>";
			}
			
			echo "<td><img src='" . $jsonArray['clanDetails']['results']['memberList'][$i]['leagueBadgeImg']['l'] . "'/></td>";
			echo "<td>" . $name . "</td>"; 
			echo "<td>" . $rol . "</td>";
			echo "<td>" . $jsonArray['clanDetails']['results']['memberList'][$i]['expLevel'] . "</td>";
			echo "<td>" . $jsonArray['clanDetails']['results']['memberList'][$i]['trophies'] . "</td>";
		echo "</tr>";
	}
}
?>
</div>
</table>

<div id="log">
<table cellspacing="0" cellpadding="0">
<?php 	echo "<h2>Beste ratio</h2>"; ?> 
  <tr>
    <th><b>Rank</b></th>
	<th><b>Naam</b></th>
    <th><b>Ratio </b></th> 
	</tr>
	<tr>
	<td><b>1</b></td>
	<td><b>2</b></td>
	<td><b>3</b> </td>
	</tr>
	</table>
	</div>
<?php?>

<P> Created by Rizzle & Justin ® 2015 </p>
     </body>
</html>