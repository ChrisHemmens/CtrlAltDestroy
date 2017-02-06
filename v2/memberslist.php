<!DOCTYPE html>
<html lang="nl">
<head>
	<title>CtrlAltDestroy - Ledenlijst</title>
	<meta charset="utf-8">
	<meta name="viewport">
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>


	<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script> 
	<script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">


	<link rel="stylesheet" type="text/css" href="thisIsStyle.css">
	<link rel="shortcut icon" href="images/awhyeah2.jpg"/>
	<script>
	$(document).ready(function() {
		$('#members').DataTable();
	} );
	</script>
</head>
<body>

	<?php
//Connect to the dataProvider
	include '/topSecretShizzle.php';
	include("functions.php");
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

		<div class="spacer"></div> 

		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-6"><div class="imgtextblok-left">
					<?php
					echo "<img src='" . $jsonArray['badgeUrls']['medium'] . "' alt=\"ClanLogo\" height=\"140\">";
					?>
				</div></div>
				<div class="col-xs-6"><div class="imgtextblok-right">          
					<?php
          echo "<img src='" . $jsonArray['badgeUrls']['medium'] . "' alt=\"ClanLogo\" height=\"140\">"; //Hier binnenkort even een ander voor zoeken
          ?></div></div>
      </div>    
  </div>

  <div class="spacer"></div> 
  <div class="container">
  	<style>
  	table 
  	{
  		table-layout:fixed; /*Dit zodat de table binnen de container blijft*/
  		width:100%;
  		word-break: break-all; /*Dit zodat woorden gesplitst kunnen worden in de tabel*/
  	}
  	</style>
  	<div style="text-align: center;">
  		<a href = "/v2" class = "btn btn-default btn-lg" role = "button">
  			Ga terug naar de site!
  		</a>
  	</div>
  	<?php
  	membersList($jsonArray); 
  	?>
  	<div style="text-align: center;">
  		<a href = "/v2" class = "btn btn-default btn-lg" role = "button">
  			Ga terug naar de site!
  		</a>
  	</div>
  </div>
</div>
<?php
} 
?>
<div class="spacer"></div>
</body>
</html> 