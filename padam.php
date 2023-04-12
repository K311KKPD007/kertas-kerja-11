<?php

include ('config.php');
$id_pelajar =$_GET['id_pelajar'];// sending query
	$padam= mysqli_query($con, "DELETE FROM maklumat WHERE id_pelajar = '$id_pelajar'") ;
//sila lengkapkan kod aturacara

header("Location:index.php");

?>




