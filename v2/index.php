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
            <a class="page-scroll" data-toggle="collapse" data-target=".navbar-collapse" href="#about">About</a>
          </li>
          <li>
            <a class="page-scroll" data-toggle="collapse" data-target=".navbar-collapse" href="#services">Services</a>
          </li>
          <li>
            <a class="page-scroll" data-toggle="collapse" data-target=".navbar-collapse" href="#test">Test</a>
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



<div class="spacer"></div>
<div class="container">
  <div class="container-blok">

  </div>
</div>
<div class="spacer"></div>
<div class="container">
  <div class="container-blok">

  </div>
</div>
<div class="spacer"></div>
<div class="container">
  <div class="container-blok">

  </div>
</div>
<div class="spacer"></div>
<div class="container">
  <div class="container-blok">

  </div>
</div>
<div id="test" class="spacer"></div>
<div class="container">
  <div class="container-blok">

  </div>
</div>
<div class="spacer"></div>

<P> Created by Rizzle & Justin &copy 2015 - <?php echo date("Y"); ?></p>
</body>
</html> 