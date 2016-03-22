<?php


$wieZnKey = 1;
/*
Welke key moet gebruikt worden?
1 = Justin
2 = Rizzle
*/

$clan = 1;
/*
Welke clan moet gebruikt worden?
1 = CtrlAltDestroy
2 = NULL
*/

if ($wieZnKey == 1){
$api_key = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6ImE3ZmFlY2M4LTFjZWItNDA3Mi1iNWM3LTA3N2YxMWE5YTYwYSIsImlhdCI6MTQ1NDUyNDA0NSwic3ViIjoiZGV2ZWxvcGVyL2M5ZWUyOGI1LTUxMTItMDdjNy1jNjExLTBlMGZlOTcyYjhhNyIsInNjb3BlcyI6WyJjbGFzaCJdLCJsaW1pdHMiOlt7InRpZXIiOiJkZXZlbG9wZXIvc2lsdmVyIiwidHlwZSI6InRocm90dGxpbmcifSx7ImNpZHJzIjpbIjIxNy4xMjAuMjI4LjE3OCJdLCJ0eXBlIjoiY2xpZW50In1dfQ.GnMDF1dNCqg0Dlgqk_ZMLZXeBWZ2Srw3qayld4QWVuEPUQmorgF3Qu7sNLg9b2fiG1axpCi_mJyWVlfUh-wNvA';
}

if ($wieZnKey == 2){
$api_key = 'HIER KOMT DE KEY';
}

if ($clan == 1){
$tag = '#2CRCJU2V'; //CtrlAltDestroy
}

if ($clan == 2){
$tag = ''; //NULL
}

$url = 'https://api.clashofclans.com/v1/clans';
?>