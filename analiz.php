<?php
$soundFilePath = "music/sound.mp3";
include_once "getid3/getid3.php";
$getid = new getID3();
$analiz = $getid->analyze($soundFilePath);

//Dosya Boyutu
echo "Dosya Boyutu (Bayt) :". $analiz['filesize'];
echo "</br>";
echo "Dosyanın bulunduğu Dizin : ". $analiz['filepath'];
echo "</br>";
echo "Dosyanın İsmi : ".$analiz['filename'];
echo "</br>";
echo "Dosya Adresi :" .$analiz['filenamepath'];
echo "</br>";
echo "Dosya Formatı : ".$analiz['fileformat'];
echo "</br>";
echo "Ses Uzunluğu (Saniye) :".$analiz['playtime_seconds'];
echo "</br>";
echo "Ses Uzunluğu (Dakika:Saniye) :".$analiz['playtime_string'];
echo "</br>";
