<html>
<head>
    <title>CtrlAltDestroy - Stats</title>
	<meta charset="utf-8"  />
	<link rel="shortcut icon" type="image/jpg" href="image/awhyeah2.jpg">
			  
    <link href="tablecloth/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
	<script type="text/javascript" src="tablecloth/tablecloth.js"></script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71479321-1', 'auto');
  ga('send', 'pageview');

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
<div id="menu">
	<ul>
		<li><a href="/coc/index.php" title="Home">Home</a></li>
		<li><a href="/coc/stats.php" title="Stats">Stats</a></li>
		<li><a href="/coc/vergelijk.php" title="Compare">Vergelijk spelers</a></li>
		<li><a href="/coc/tool.php" title="Tool">Tool</a><li>
		<li><a href="/coc/chatapp.php" title="Tool">ChatApp</a><li>
	</ul>
</div>
<br />
<br />
<br />
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
     </body>
	 	 <P> Created by Rizzle & Justin ® 2015 //Deze moet naar beneden...</p>
</html>