<!DOCTYPE html>
<html lang="nl">
<head>
 <title>CtrlAltDestroy</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
 <meta http-equiv="Pragma" content="no-cache" />
 <meta http-equiv="Expires" content="0" />
 <link rel="shortcut icon" href="https://api-assets.clashofclans.com/badges/200/q4jIBKZpAFUDIa7doaAW6lmmlgcVgnIKhXD4B5tNxpU.png"/>
 
 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/angular.min.js"></script>
 <script src="js/jquery.dataTables.min.js"></script> 
 <script src="js/dataTables.bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
 
 <!-- Scrolling Nav JavaScript -->
 <script src="js/jquery.easing.min.js"></script>
 <script src="js/scrolling-nav.js"></script>
 
 <link rel="stylesheet" type="text/css" href="ThisIsStyle.css">
 <script src="js/ThisIsJS.js"></script>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
 <!-- Navigation -->
 <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
   <div class="navbar-header page-scroll">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
     <span class="sr-only">Toggle navigation</span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
   </button>
   <a class="navbar-brand page-scroll" href="#page-top" onclick="show('main'); hide('war')" data-toggle="collapse" data-target=".navbar-collapse.in">CtrlAltDestroy</a>
 </div>
 <!-- Collect the nav links, forms, and other content for toggling -->
 <div class="collapse navbar-collapse navbar-ex1-collapse">
  <ul class="nav navbar-nav">
   <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
   <li class="hidden">
    <a class="page-scroll" data-toggle="collapse" data-target=".navbar-collapse.in" href="#page-top" onclick="show('main'); hide('war')"></a>
  </li>
  <li>
    <a class="page-scroll" data-toggle="collapse" data-target=".navbar-collapse.in" href="#memberslist" onclick="show('main'); hide('war')">Clanleden</a>
  </li>
  <li>
    <a class="page-scroll" data-toggle="collapse" data-target=".navbar-collapse.in" href="#ClanInfo" onclick="show('main'); hide('war')">ClanInfo</a>
  </li>
  <li>
    <a class="page-scroll" data-toggle="collapse" data-target=".navbar-collapse.in" href="#ChatApp" onclick="show('main'); hide('war')">Chat App</a>
  </li>
  <li>
    <a class="page-scroll" data-toggle="collapse" data-target=".navbar-collapse.in" href="#Specials" onclick="show('main'); hide('war')">Wall Of Fame</a>
  </li>
  <li>
    <a class="page-scroll" data-toggle="collapse" data-target=".navbar-collapse.in" href="#Stats" onclick="show('main'); hide('war')">Statistieken</a>
  </li>
  <li>
    <a class="page-scroll" data-toggle="collapse" data-target=".navbar-collapse.in" href="#war" onclick="hide('main'); show('war')"><span class="glyphicon glyphicon-king"></span> War Room</a>
  </li>
</ul>
</div>
<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>
</br></br>
<?php
//Connect to the dataProvider
include "topSecretShizzle.php";
include("functions.php");
$opts = array(
 'http'=>array(
  'method'=>"GET",
  'header'=>array(
   "Accept:application/json",
   "Authorization:Bearer " . $api_key
   )
  )
 );
$url = $url . '/' . rawurlencode($tag);

$contents = file_get_contents($url, null, stream_context_create($opts));
$jsonArray = json_decode($contents, true);

if(!$contents) {?>
 <div class="spacer"></div>
 <div class="spacer"></div>
 <?php
 echo "Shit is kapot G";
 ?>
</br>
<img src="Images/shitiskapotG.jpg" width="100%" alt="Shit is kapot G">
<?php
}else{
mysqli_query($conn, "truncate table `api-members`");
for($i = 0; $i < $jsonArray['members']; $i++) {
	$name = $jsonArray['memberList'][$i]['name'];

$sql = "INSERT INTO `api-members` (`name`) VALUES ('$name');";
if ($conn->query($sql) === TRUE){}
}
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
    echo "<img src=\"/Images/characters/". rand(1,24) . ".png\" alt=\"RandomTroop\" height=\"140\">";
    ?></div></div>
  </div>  
</div>
  <!-- <div class="spacer"></div>
  <img src="/Images/ctrlaltdestroy.png" class="img-responsive" alt="ctrlaltdestroyLogo" width="100%"> WEL OF NIET GEBRUIKEN? -->
  <div class="spacer"></div> 
  <div class="container">
    <div class="container-blok">
     <img src="https://www.clashofstats.com/signatures/2CRCJU2V?lng=en&color=blue&size=large" width="100%"/>
   </div>
 </div>
<!-- Main Website -->
<div id="main">
 <div class="spacer"></div> 
 <div class="container">
  <div class="container-blok">
    <h1 align="center">Clanbeschrijving</h1>
    <?php
    echo "<font size=\"4\">" . $jsonArray['description'] . "</FONT>";
    ?>
  </div>
</div>
<div id="memberslist"></div> <!-- Dit is voor de navbar -->
<div class="visible-xs visible-sm"> <!--MOBILE ONLY CONTENT--> 
  <div class="spacer"></div> 
  <div class="container">
   <div class="container-blok">
    <h1 align="center">Clanleden</h1>
    <div style="text-align:center;">
     <a href = "/memberslist.php" class = "btn btn-default btn-lg" role = "button">
      Bekijk hier de volledige lijst!
    </a>
  </div>
  <?php
  membersListSmall($jsonArray); 
  ?>
  <div style="text-align:center;">
   <a href = "/memberslist.php" class = "btn btn-default btn-lg" role = "button">
    Bekijk hier de volledige lijst!
  </a>
</div>
</div>
</div>
</div>
</div>
<div class="hidden-xs hidden-sm"> <!--bigger than 768PX screens only content -->
 <div class="spacer"></div> 
 <div class="container">
   <div class="container-blok">
    <h1 align="center">Clanleden</h1>
    <?php
    membersList($jsonArray); 
    ?>
  </div>
</div>
</div>
</div>
<div id="ClanInfo"></div>
<div class="spacer"></div>
<div class="container">
 <div class="container-blok">
  <h1 align="center">Claninformatie</h1>
  <div class="row">
   <div class="col-lg-4 col-lg-offset-2">
    <h3 align="center">Is er een warsysteem?</h3> <p> <p> Ja, we hebben 2 soorten wars:</br></br>
    <b>1. RecruitWar</b> </br>
    Vrijdagavond starten we een recruitWar. We geven nieuwe leden in deze war een kans om zich te bewijzen, ook zullen leden die een 2de kans krijgen hier aan meedoen.</br></br>
    <b>2. Doordeweekse wars</b> </br>
    Op maandag- en woensdag avond starten we de echte wars. Hier kom je alleen voor in aanmerking 
    als je positief opval tijdens de recuitwar of al eerder (met positief resultaat) heb meegedaan aan een echte war.
  </p>
  <div class="spacer"></div>
</div>
<div class="col-lg-4">
 <h3 align="center">Is er een warstrategie?</h3> <p>Ja, onze clan heeft een warstrategie, maar deze zetten we natuurlijk niet online.
 <br/>
 Onze strategie zal besproken worden via BAND (meer info onderop deze pagina) en in de clanchat. 
 Vaak zullen een van de (co-)leiders of oudsten er over beginnen, ook kan je het natuurlijk altijd zelf vragen via BAND of in de clanchat!
</p>
<div class="spacer"></div>
</div>
</div>
<div class="row">
 <div class="col-lg-4 col-lg-offset-2">
  <h3 align="center">Zijn er donatieregels?</h3> <p>
  Ja, standaard doneren we boogschutters en tovenaars. Dit zodat iedereen in de clan kan doneren en kans heeft op oudste, het level van de troops maakt niet uit.
  <br/><br/>
  <b>In war hebben we andere regels:</b>
  <br/>
  Als je van plan bent om een warattack te doen, dan kan je iedere gewenste troop – vaak zelfs maxlvl – krijgen.
</p>
<div class="spacer"></div>
</div>
<div class="col-lg-4">
 <h3 align="center">Is farmen oké?</h3> <p>Farmen is oké, pushen ook. Waar het om gaat is dat je actief doneert en regelmatig wilt participeren in de war.</p>
 <div class="spacer"></div>
</div>
</div>
<div class="row">
 <div class="col-lg-4 col-lg-offset-2">
  <h3 align="center">Hoe verdien ik oudste?</h3> <p>Iedere 28e dag van de maand promoveren we de persoon met de meeste donaties – die op dat moment nog geen oudste is – tot oudste. </br> Op de 'Stats' pagina kan je zien wie op dit moment het meeste kans maakt op oudste.</p>
  <div class="spacer"></div>
</div>
<div class="col-lg-4">
  <h3 align="center">Hoe verdien ik Co?</h3> <p>Co is niet te verdienen. We hebben slechte (en ook goede) ervaringen gehad met Co’s die vervolgens besluiten om een hele clan te kicken. 
  <br>Om de stabiliteit te van onze clan te waarborgen hebben we 4 (Co-)Leiders en daar houden we het bij. </p>
  <div class="spacer"></div>
</div>
</div>
</div>
</div>
<div id="ChatApp"></div>
<div class="spacer"></div>
<div class="container">
 <div class="container-blok">
  <h1 align="center">Chat App</h1>
  <div class="row">
   <div class="col-lg-4 col-lg-offset-2">
     <h3 align="center">Gebruikt de clan een Chatapp?</h3><p>Als chatapp gebruiken we BAND. Zoek in de app naar de BAND(groep) die ‘CtrlAltDestroy’ heet, dat zijn wij namelijk.</br>Laat het ook in de clanchat even weten als je onze groep ga joinen, zo weten wij zeker dat jij het bent!</p>
     <div class="spacer"></div>
   </div>
   <div class="col-lg-4">
    <h3 align="center">Download hier onze chatapp!</h3>
    <A HREF="https://play.google.com/store/apps/details?id=com.nhn.android.band"><img src="Images/GooglePlayLogo.png" alt="koekelplee linkje" width="100%" border="0"></A>
    <A HREF="https://itunes.apple.com/nl/app/band-fun-community-forum-for/id542613198?mt=8"><img src="Images/IOSStoreLogo.png" alt="AppleStore linkje" width="100%" border="0"></A>
    <div class="spacer"></div>
  </div>
</div>
<iframe src="http://band.us/#!/band/58997968" frameborder="0" width="100%" height="600"></iframe>
</div>
</div>
<div id="Specials"></div>
<div class="spacer"></div>
<div class="container">
 <div class="container-blok">
  <h1 align="center">Wall of Fame</h1>
  <div class="row">
   <div class="col-lg-6">
    <?php 
    coLeadersList($jsonArray); 
    ?>
    <div class="spacer"></div>
  </div></div>
  <div class="col-lg-6">
    <?php 
    oudsteList($jsonArray); 
    ?>
  </div>
</div>
</div>
</div>
</div>
<div id="Stats"></div>
<div class="spacer"></div>
<div class="container">
 <div class="container-blok">
  <div class="row">
   <div class="col-lg-6">
    <?php 
    donationCount($jsonArray); 
    ?>
    <div class="spacer"></div>
  </div>
  <div class="col-lg-6">
    <?php 
    requestCount($jsonArray);
    ?>
    <div class="spacer"></div>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
   <?php 
   donationRatio($jsonArray); 
   ?>
   <div class="spacer"></div>
 </div>
 <div class="col-lg-6">
   <?php 
   DonMemberCount($jsonArray);
   ?>
 </div>
</div>
</div>
</div>
<div class="spacer"></div>
<div class="container">
 <div class="container-blok">
  <?php
  stats($jsonArray);
  ?>
</div>
</div>
</div>
<!-- Close Main Website -->
<!-- War Room -->
<div id="war">
 <div class="spacer"></div> 
 <div class="container">
  <div class="container-blok">
    <h1 align="center">War Room</h1>
    <img src="Images/clanwars.png" width="100%" alt="War Room">
  </div>
</div>
 <div class="spacer"></div> 
 <div class="container">
  <div class="container-blok">
    <h1 align="center">War Lijnup</h1>
<table>
	<?php
$sql = "SELECT name FROM `api-members`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td></tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>
  </div>
</div>
</div>
<?php
}
?>
<div class="spacer"></div>
<P> Created by Rizzle, Paulus & Justin &copy 2015 - <?php echo date("Y"); ?></p>
</body>
</html> 