<?php 
include 'header.php';
#GET ID FROM URL
$jumpa= $_POST['carian'];
#JIKA ID KOSONG 
if($jumpa==NULL){
#PAPAR MESEJ JIKA NULL
echo "<script>alert('SILA TAIP NAMA PRODUK');
window.location='dashboard.php'</script>";
}
?>
<html>
<!-- PANGGIL MENU --> 
<div id="menu2">
  <?php include 'menu2.php'; ?>
</div>
<!-- PANGGIL ISI --> 
<div id="isi">
<head>
<h2 style="text-align:center">HASIL CARIAN NAMA PRODUK</h2>
</head>
<body>
<?php
$query_jenama = "SELECT * FROM jenama AS t1 
INNER JOIN produk AS t2 
ON t1.idJenama=t2.idJenama 
WHERE t2.namaProduk LIKE '%$jumpa%'
ORDER BY t2.namaProduk ASC";
$papar_query_jenama = mysqli_query($con, $query_jenama);
if(mysqli_num_rows($papar_query_jenama) > 0){
foreach($papar_query_jenama as $senarai_jenama)
    {
?>
<div class="card">
<div class="gambar">
<img src="gambar/<?php echo $senarai_jenama['gambar']; ?>"width="auto" height="120px">
</div>
  <h3><?php echo $senarai_jenama['namaProduk']; ?></h3>
  <p class="price">RM <?php echo $senarai_jenama['harga'];?></p>
  <p>

<!-- SIMPAN KE TABLE PILIHAN --> 
<form method="POST" action="pilihan_simpan.php">
<input type="text" name="idProduk" value="<?php echo $senarai_jenama['idProduk']; ?>" hidden>
<input type="text" name="idPengguna" value="<?php echo $_SESSION['id']; ?>" hidden>
<button name="submit" type="submit">PILIH</button></a>
</form>
</p>
</div>
<?php
    }
     }else{
    echo "Maaf,Tiada yang sepadan";
  }
?>
</div>
</body>
</html>