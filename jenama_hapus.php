<?php
#SAMBUNG KE DB
include "config.php";
#DAPATKAN URL
$idDel = $_GET['id'];
#LAKSANAKAN SQL
mysqli_query($con,"DELETE FROM jenama WHERE idJenama='$idDel'");
#PAPAR MESEJ
echo "<script>alert('Jenama berjaya dihapuskan');
window.location='jenama.php'</script>";
?>