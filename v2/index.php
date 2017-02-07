<!DOCTYPE html>
<html lang="nl">
<head>
  <title>CtrlAltDestroy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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

  <!-- Custom CSS -->
  <link href="css/scrolling-nav.css" rel="stylesheet">

  <!-- Scrolling Nav JavaScript -->
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/scrolling-nav.js"></script>

  <script>
  $(document).ready(function() {
    $('#members').DataTable();
  } );
  </script>
  <script>
  $(document).ready(function() {
    $('#membersSmall').DataTable();
  } );
  </script>
  <script>
  $(document).ready(function() {
    $('#coList').DataTable({
      "bPaginate": false,
      "bLengthChange": false,
      "bFilter": false,
      "bInfo": false,
      "pageLength": 50 
    });
  });
  </script>
  <script>
  $(document).ready(function() {
    $('#oudsteList').DataTable({
      "bPaginate": false,
      "bLengthChange": false,
      "bFilter": false,
      "bInfo": false,
      "pageLength": 50 
    });
  });
  </script>
  <script>
  $(document).ready(function() {
    $('#ratio').DataTable({
      "bPaginate": false,
      "bLengthChange": false,
      "bFilter": false,
      "bInfo": false
    });
  });
  </script>
  <script>
  $(document).ready(function() {
    $('#donaties').DataTable({
      "bPaginate": false,
      "bLengthChange": false,
      "bFilter": false,
      "bInfo": false
    });
  });
  </script>
  <script>
  $(document).ready(function() {
    $('#ontvangen').DataTable({
      "bPaginate": false,
      "bLengthChange": false,
      "bFilter": false,
      "bInfo": false
    });
  });
  </script>
  <script>
  $(document).ready(function() {
    $('#mogelijkOudste').DataTable({
      "bPaginate": false,
      "bLengthChange": false,
      "bFilter": false,
      "bInfo": false
    });
  });
  </script>
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
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand page-scroll" data-toggle="collapse" data-target=".navbar-collapse" href="#page-top">CtrlAltDestroy</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
          <li class="hidden">
            <a class="page-scroll" data-toggle="collapse" data-target=".navbar-collapse" href="#page-top"></a>
          </li>
          <li>
            <a class="page-scroll" data-toggle="collapse" data-target=".navbar-collapse" href="#memberslist">Clanleden</a>
          </li>
          <li>
            <a class="page-scroll" data-toggle="collapse" data-target=".navbar-collapse" href="#ClanInfo">ClanInfo</a>
          </li>
          <li>
            <a class="page-scroll" data-toggle="collapse" data-target=".navbar-collapse" href="#Specials">Wall Of Fame</a>
          </li>
          <li>
            <a class="page-scroll" data-toggle="collapse" data-target=".navbar-collapse" href="#Stats">Statistieken</a>
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
      <img src="/v2/Images/ctrlaltdestroy.png" class="img-responsive" alt="ctrlaltdestroyLogo" width="100%"> 

      <div class="spacer"></div> 
      <div class="container">
        <div class="container-blok">
          <img src="https://www.clashofstats.com/signatures/2CRCJU2V?lng=en&color=blue&size=large" width="100%"/>
        </div>
      </div>

      <div class="spacer"></div> 
      <div class="container">
        <div class="container-blok">
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
            <div style="text-align: center;">
              <a href = "/v2/memberslist.php" class = "btn btn-default btn-lg" role = "button">
                Bekijk hier de volledige lijst!
              </a>
            </div>
            <?php
            membersListSmall($jsonArray); 
            ?>
            <div style="text-align: center;">
              <a href = "/v2/memberslist.php" class = "btn btn-default btn-lg" role = "button">
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
        <?php
        membersList($jsonArray); 
        ?>
      </div>
    </div>
  </div>
</div>
<?php
} 
?>


<div id="ClanInfo"></div>
<div class="spacer"></div>

<div class="container">
  <div class="container-blok">
    <h1 align="center">Claninformatie</h1>
    <div class="row">
      <div class="col-lg-4 col-lg-offset-2">
        <h3 align="center">Is er een warsysteem?</h3>  <p> <p> Ja, we hebben 2 soorten wars: </br></br>
        <b>1. RecruitWar</b> </br>
        Vrijdagavond starten we een recruitWar. We geven nieuwe leden in deze war een kans om zich te bewijzen, ook zullen leden die een 2de kans krijgen hier aan meedoen.</br></br>
        <b>2. Doordeweekse wars</b> </br>
        Op maandag- en woensdag avond starten we de echte wars. Hier kom je alleen voor in aanmerking 
        als je positief opval tijdens de recuitwar of al eerder (met positief resultaat) heb meegedaan aan een echte war.
      </p>
      <div class="spacer"></div>
    </div>
    <div class="col-lg-4">
     <h3 align="center">Is er een warstrategie?</h3>  <p>Ja, onze clan heeft een warstrategie, maar deze zetten we natuurlijk niet online.
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
 <h3 align="center">Is farmen oké?</h3>  <p>Farmen is oké, pushen ook. Waar het om gaat is dat je actief doneert en regelmatig wilt participeren in de war.</p>
 <div class="spacer"></div>
</div>
</div>
<div class="row">
  <div class="col-lg-4 col-lg-offset-2">
    <h3 align="center">Hoe verdien ik oudste?</h3>  <p>Iedere 28e dag van de maand promoveren we de persoon met de meeste donaties – die op dat moment nog geen oudste is – tot oudste. </br> Op de 'Stats' pagina kan je zien wie op dit moment het meeste kans maakt op oudste.</p>
    <div class="spacer"></div>
  </div>
  <div class="col-lg-4">
   <h3 align="center">Hoe verdien ik Co?</h3>  <p>Co is niet te verdienen. We hebben slechte (en ook goede) ervaringen gehad met Co’s die vervolgens besluiten om een hele clan te kicken. 
   <br>Om de stabiliteit te van onze clan te waarborgen hebben we 4 (Co-)Leiders en daar houden we het bij.  </p>
   <div class="spacer"></div>
 </div>
</div>
<div class="row">
  <div class="col-lg-4 col-lg-offset-2">
    <h3 align="center">Gebruikt de clan een Chatapp?</h3>  <p>Als chatapp gebruiken we BAND. Zoek in de app naar de BAND(groep) die ‘CtrlAltDestroy’ heet, dat zijn wij namelijk. </br>Laat het ook in de clanchat even weten als je onze groep ga joinen, zo weten wij zeker dat jij het bent!</p>
    <div class="spacer"></div>
  </div>
  <div class="col-lg-4">
   <h3 align="center">Download hier onze chatapp!</h3>  
   <A HREF="https://play.google.com/store/apps/details?id=com.nhn.android.band"><img src="images/GooglePlayLogo.png" alt="koekelplee linkje"  width="100%" border="0"></A>
 </br>
 <A HREF="https://itunes.apple.com/nl/app/band-fun-community-forum-for/id542613198?mt=8"><img src="images/IOSStoreLogo.png" alt="AppleStore linkje"  width="100%" border="0"></A>
</div>
</div>
</div>
</div>
<div id="Specials"></div>
<div class="spacer"></div>
<div class="container">
  <div class="container-blok">
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
       <div class="spacer"></div>
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
     <div class="spacer"></div>
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
<div class="spacer"></div>
<div class="container">
  <div class="container-blok">

  </div>
</div>
<div class="spacer"></div>

<P> Created by Rizzle & Justin &copy 2015 - <?php echo date("Y"); ?></p>
</body>
</html> 