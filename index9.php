<?php 
$uang = 140_500;

$lembar_100 = intdiv($uang, 100_000); 
$modul_100 = $uang % 100_000;
$lembar_20 = intdiv($modul_100, 20_000); 
$modul_20 = $uang % 20_000;
$lembar_5 = intdiv($modul_20, 500); //mencari hasil yang terdekat dari pembagian yang ada di dalamb 

echo "Rp. 100.000 : $lebar_100 <br>" . "Rp. 20.000 : $lembar_20 <br>" . "Rp. 500 : $lembar_5";
?>