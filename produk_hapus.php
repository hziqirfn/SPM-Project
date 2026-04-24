<?php
include "config.php";
$idPic = $_GET['pic'];
$idDel = $_GET['id'];
#DELETE GAMBAR
unlink("gambar/".$idPic);
mysqli_query($con,"DELETE FROM produk WHERE idProduk='$idDel'");
#PAPAR MESEJ
echo "<script>alert('Produk berjaya dihapuskan');
window.location='produk.php'</script>";
?>