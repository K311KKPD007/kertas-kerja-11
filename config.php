<!--Membuat sambungan ke db-->
<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "vaksin";

$con=mysqli_connect($host,$user,$pass,$dbname);

if(!$con) {
	echo "not connected";
}
else {
	echo "connected";
}
//sila lengkapkan kod aturcara

?>

