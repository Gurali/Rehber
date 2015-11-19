<html>
<?php
try{
	$dbh = new PDO('mysql:host=localhost;dbname=deneme', "root", "");
}
catch{
	echo "Bağlantı Sağlanamadı!";
}

?>
</html>
