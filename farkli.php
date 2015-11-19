<html>
<?php
try{
	$dbh = new PDO('mysql:host=localhost;dbname=rehber', "root", "");
}
catch{
	echo "Bağlantı Sağlanamadı!";
}

?>
</html>
