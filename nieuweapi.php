<html>
<head>
    <title>CtrlAltDestroy - Nieuwe api</title>
  <meta charset="utf-8"  />
  <meta http-equiv="Cache-Control" content="no-store" />
  <link rel="shortcut icon" type="image/jpg" href="image/awhyeah2.jpg">
        
    <link href="tablecloth/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
  <script type="text/javascript" src="tablecloth/tablecloth.js"></script>
  <link href="DitIsStyle.css" rel="stylesheet" type="text/css" />
 </head>

<body>
<div id="menu">
   <ul>
      <li><a href="/coc/index.php" title="Home">Home</a></li>
      <li><a href="/coc/claninfo.php" title="Chat">Claninfo</a><li>
      <li><a href="/coc/walloffame.php" title="Chat">Wall of fame</a><li>
      <li><a href="/coc/stats.php" title="Stats">Stats</a></li>
      <li><a href="/coc/vergelijk.php" title="Compare">Vergelijk spelers</a></li>
      <li><a href="/coc/tool.php" title="Tool">Tool</a><li>
    </ul>
</div>
</br></br></br>


<?php
$api_key = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6ImE3ZmFlY2M4LTFjZWItNDA3Mi1iNWM3LTA3N2YxMWE5YTYwYSIsImlhdCI6MTQ1NDUyNDA0NSwic3ViIjoiZGV2ZWxvcGVyL2M5ZWUyOGI1LTUxMTItMDdjNy1jNjExLTBlMGZlOTcyYjhhNyIsInNjb3BlcyI6WyJjbGFzaCJdLCJsaW1pdHMiOlt7InRpZXIiOiJkZXZlbG9wZXIvc2lsdmVyIiwidHlwZSI6InRocm90dGxpbmcifSx7ImNpZHJzIjpbIjIxNy4xMjAuMjI4LjE3OCJdLCJ0eXBlIjoiY2xpZW50In1dfQ.GnMDF1dNCqg0Dlgqk_ZMLZXeBWZ2Srw3qayld4QWVuEPUQmorgF3Qu7sNLg9b2fiG1axpCi_mJyWVlfUh-wNvA';
$tag = '#2CRCJU2V';

$url = 'https://api.clashofclans.com/v1/clans';

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

$result = file_get_contents($url, null, stream_context_create($opts));
$response = json_decode($result,true);
print '<pre>';
print_r($response);
print '</pre>';
?>

       <P> Created by Rizzle & Justin &copy 2015 - <?php echo date("Y"); ?></p>
     </body>

</html>