<?php
#PANGGIL HEADER 
include 'header.php';
#DAPATKAN URL
$idProduk = $_GET['id'];
#SAMBUNG KE TABLE
$dataProduk=mysqli_query($con,"SELECT * FROM produk AS t1 
INNER JOIN jenama AS t2 
ON t1.idJenama=t2.idJenama 
WHERE t1.idProduk='$idProduk'");
$qProduk=mysqli_fetch_array($dataProduk);
?>

<html>
<!-- PANGGIL MENU --> 
<div id="menu">
    <?php include 'menu2.php'; ?>
</div>
<!-- PANGGIL ISI -->
<div id="isi">
<body>
<center>
<h2><U>DETAIL PRODUK</U></h2>
</center>
<img src="gambar/<?php echo $qProduk['gambar']; ?>"width="40%" height="auto">

<h3><?php echo $qProduk['namaProduk']; ?></h3>
<p class="price">Jenama: <?php echo $qProduk['namaJenama']; ?></p>
<p class="price">RM <?php echo $qProduk['harga']; ?></p>
<p class="price"><?php echo $qProduk['detail']; ?></p>
<p><button onclick="javascript:window.print()">CETAK</button></p>
</body>
</div>
</html>