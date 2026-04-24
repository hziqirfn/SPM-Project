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
<h2><U>SENARAI PRODUK SEMASA</U></h2>
</center>
<table width="90%" border=1 >
<!-- PAPAR MAKLUMAT PRODUK -->	 
<tr>
<td>BIL</td>
<td>NAMA PRODUK</b></td>
<td>JENAMA</td>
<td>HARGA</td>
<td>GAMBAR PRODUK</td>
<td>TINDAKAN</td>	
</tr>
<?php
$no=1;
$data1=mysqli_query($con,"
SELECT * FROM jenama AS t1
INNER JOIN  produk  AS t2 
ON t1.idJenama=t2.idJenama  
ORDER BY t1.namaJenama ASC");		
while ($info1=mysqli_fetch_array($data1))
{
?>
<tr>
<td><?php echo $no; ?></td>
<td><?php echo $info1['namaProduk']; ?></td>
<td><?php echo $info1['namaJenama']; ?></td>
<td>RM <?php echo $info1['harga']; ?></td>
<td width="200px"><img src="gambar/<?php echo $info1['gambar']; ?>" width="auto" height="120px"></td>
<td>
<!-- PAPAR PAUTAN -->
<a href="produk_edit.php?id=
<?php echo $info1['idProduk'];?>">EDIT</a>
|
<a href="produk_hapus.php?id=
<?php echo $info1['idProduk'];?>&pic=<?php echo $info1['gambar']; ?>" 
onclick="return confirm('ANDA PASTI?')">HAPUS</a></td>		
</tr>
<?php $no++; } ?>
<tr>
<td colspan="6" align="center">
<font style='font-size:10px'>
* Senarai Tamat *<br />Jumlah Pilihan: <?php echo $no-1; ?>
</font>
<p><button onclick="javascript:window.print()">CETAK</button></p>
</td>
</tr>
</table>
</body>
</div>
</html>