<?php
#PANGGIL HEADER
include 'header.php';
#DAPATKAN URL
$idJenama = $_GET['idJenama'];
#TERIMA NILAI YG DI POST
if (isset($_POST['pilih'])) {
if(isset($_POST['harga1'])==NULL OR ($_POST['harga2'])==null) {
#PAPAR MESEJ
echo "<script>alert('Taip julat harga');
window.location='dashboard.php'</script>";
}
$pilih1=$_POST['harga1'];
$pilih2=$_POST['harga2'];
}
?>
<html>
<!-- PANGGL MENU -->
<div id="menu">
    <?php include 'menu2.php'; ?>
</div>
<!-- PANGGIL ISI -->
<div id="isi">
<head>
<h2 style="text-align:center">SENARAI PRODUK MENGIKUT PILIHAN HARGA & JENAMA</h2>
</head>
<body>
<?php
$query_produk= "
SELECT * FROM jenama AS t1 
INNER JOIN produk AS t2 
ON t1.idJenama=t2.idJenama
WHERE (t2.idJenama=$idJenama) AND (t2.harga BETWEEN $pilih1 AND $pilih2) 
ORDER BY t2.harga ASC";
#LAKSANAKAN ARAHAN SQL
$papar_query = mysqli_query($con, $query_produk);
if(mysqli_num_rows($papar_query) > 0)
    {
foreach($papar_query as $senarai_produk)
        {
?>
<!-- PAPAR PRODUK --> 
<div class="card">
<div class="gambar">
<img src="gambar/<?php echo $senarai_produk['gambar']; ?> "width="auto" height="120px">
</div>
  <h3><?php echo $senarai_produk['namaProduk']; ?></h3>
  <p class="price">Jenama: <?php echo $senarai_produk['namaJenama']; ?></p>
  <p class="price">RM<?php echo $senarai_produk['harga']; ?></p>

<!-- SIMPAN KE TABLE PILIHAN --> 
<p>
<form method="POST" action="pilihan_simpan.php">
<input type="text" name="idProduk" value="<?php echo $senarai_produk['idProduk']; ?>" hidden>
<input type="text" name="idPengguna" value="<?php echo $_SESSION['id']; ?>" hidden>
<button name="submit">PILIH</button></a>
</form>
</p>
</div>
<?php
    }
     }else{
   echo "Tiada ditemui";
  }
?> 
</body>
</div>
</html>