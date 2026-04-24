<?php include 'header.php'; ?>
<html>
<!-- PANGGIL MENU --> 
<div id="menu">
    <?php include 'menu2.php'; ?>
</div>
<!-- PANGGIL ISI -->
<div id="isi">
<body>
<center>
<h2><U>STATISTIK PILIHAN PENGGUNA</U></h2>
</center>
<table width="90%" border=1 align="left">
<!-- PAPAR MAKLUMAT PRODUK -->
<tr>
<td>BIL</td>
<td>NAMA PRODUK</b></td>
<td>HARGA</td>
<td>GAMBAR</td>
<td>BILANGAN</td>
</tr>
<?php
$no=1;
$data1=mysqli_query($con,"
SELECT t2.namaProduk, 
COUNT(t1.idPengguna) AS kira, 
t2.harga, 
t2.gambar
FROM pilih as t1 
INNER JOIN produk AS t2 
ON t1.idProduk=t2.idProduk 
GROUP BY t1.idProduk 
ORDER BY COUNT(t1.idPengguna) DESC");
while ($info1=mysqli_fetch_array($data1))
{
?>
<tr>
<td><?php echo $no; ?></td>
<td><?php echo $info1['namaProduk']; ?></td>
<td>RM <?php echo $info1['harga']; ?></td>
<td width="200px"><img src="gambar/<?php echo $info1['gambar']; ?>"width="auto" height="120px"></td>
<td><?php echo $info1['kira']; ?></td>
</tr>
<?php $no++; } ?>
<tr>
<td colorspan="5" align="center">
<font style='font-size:10px'>* Senarai Tamat *<br />
Jumlah Pilihan:
<?php echo $no-1; ?>
</font>
<p><button onclick="javascript:window.print()">
CETAK</button></p>
</td>
</tr>
</table>
</body>
</div>
</html>