<html>
<head>
    <title>CtrlAltDestroy - stats</title>
	<meta charset="utf-8"  />
	<link rel="shortcut icon" type="image/jpg" href="image/awhyeah2.jpg">
			  
    <link href="tablecloth/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
	<script type="text/javascript" src="tablecloth/tablecloth.js"></script>
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
<div id="menu">
	<ul>
		<li><a href="/coc/index.php" title="Home">Homepage</a></li>
		<li><a href="/coc/vergelijk.php" title="Home">Vergelijk spelers</a></li>
		</ul>
</div>
<?php
include("functions.php");

$contents = file_get_contents('https://set7z18fgf.execute-api.us-east-1.amazonaws.com/prod/?route=getClanDetails&clanTag=%232CRCJU2V', false);

$jsonArray = json_decode($contents, true);

if(!$contents) {
	echo "Shit is kapot G";
}
else { 
echo "&nbsp;";
?>
	<div id = "log">
<?php 
	donationCount($jsonArray); 
	donationRatio($jsonArray);	
	requestCount($jsonArray);
	DonMemberCount($jsonArray);
}
?>
	</div>

	 <P> Created by Rizzle & Justin ® 2015 //Deze moet naar beneden...</p>
     </body>
</html>