<?php include 'header.php'; ?>
<html>
<div id="menu">
  <?php include 'menu2.php'; ?>
</div>
<div id="isi">
<body>
<center>
<h2><U>SENARAI JENAMA</U></h2>
</center>
<table width="90%" border=1>
<!-- PAPAR JENAMA -->	 
<tr>
<td>BIL</td>
<td>NAMA JENAMA</b></td>
<td>TINDAKAN 
<a href="jenama_tambah.php" style="float: right;">JENAMA</a>
<br>
<a href="import.php" style="float: right;">IMPORT JENAMA</a>
</td>	
</tr>
<?php
#PANGGIL REKOD
$no=1;
$data1=mysqli_query($con,
"SELECT * FROM jenama   
ORDER BY namaJenama ASC");		
while ($info1=mysqli_fetch_array($data1))
{
?>
<tr>
<td><?php echo $no; ?></td>
<td><?php echo $info1['namaJenama']; ?></td>
<td>
<!-- PAPAR PAUTAN -->
<a href="jenama_edit.php?id=
<?php echo $info1['idJenama'];?>"> EDIT</a>
|
<a href="jenama_hapus.php?id=<?php echo $info1['idJenama'];?>" 
onclick="return confirm('ANDA PASTI?')">HAPUS</a></td>		
</tr>
<?php $no++; } ?>
</table>
</body>
</div>
</html>