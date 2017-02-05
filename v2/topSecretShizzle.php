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
	$api_key = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6IjI0NjM2Y2FkLTYyNjYtNDBkZS1hN2EzLWMwZmM4MzAyNWRjMyIsImlhdCI6MTQ2OTgwNzkyNiwic3ViIjoiZGV2ZWxvcGVyL2M5ZWUyOGI1LTUxMTItMDdjNy1jNjExLTBlMGZlOTcyYjhhNyIsInNjb3BlcyI6WyJjbGFzaCJdLCJsaW1pdHMiOlt7InRpZXIiOiJkZXZlbG9wZXIvc2lsdmVyIiwidHlwZSI6InRocm90dGxpbmcifSx7ImNpZHJzIjpbIjgxLjIwNS4xMjEuMjQwIl0sInR5cGUiOiJjbGllbnQifV19.qQrw6ggwOizlnm3b7ypo02VP4ZYSfaf9_2o1q1U7NhZekVNvb5pv1uB__YkTVeOI4YR3DxIKis7bP7BtHiUm7A';
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