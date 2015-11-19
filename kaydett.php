<?php 
include "farkli.php";
$ad = $_POST["ad"];
$soyad=$_POST["soyad"];
$telefon=$_POST["telefon"];
$eposta=$_POST["eposta"];
$adres=$_POST["adres"];
try{
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$kayit="INSERT INTO tbl_kisiler (ad,soyad,telefon,eposta,adres) VALUES($ad,$soyad,$telefon,$eposta,$adres)";
$dbh->exec($kayit);
echo"kayıt yapildi.";
	
	}
    catch{
		echo "Kayıt yapılamadı!";
	}

?>
