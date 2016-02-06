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
2 = Love To Farm
*/

if ($wieZnKey == 1){
$api_key = 'XXXX';
}

if ($wieZnKey == 2){
$api_key = 'HIER KOMT DE KEY';
}

if ($clan == 1){
$tag = '#2CRCJU2V'; //CtrlAltDestroy
}

if ($clan == 2){
$tag = '#2CP0PPR0'; //Love To Farm
}

$url = 'https://api.clashofclans.com/v1/clans';
?>