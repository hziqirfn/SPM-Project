<html>
<body>
<h3>ISTIMEWA UNTUK ANDA</h3>
<!-- PAPAR PRODUK SECARA RAWAK -->
<?php
$query_rawak =
"SELECT * FROM produk
ORDER BY rand() LIMIT 8";
$papar_query_rawak = mysqli_query($con, $query_rawak);
if(mysqli_num_rows($papar_query_rawak) >0)
    { 
foreach($papar_query_rawak as $senarai_produk)
    {
?>
<!-- PAPAR PRODUK -->
<div class="card">
<div class="gambar">
<img src="gambar/<?php echo $senarai_produk['gambar']; ?>"width="auto" height="120px">
</div>
  <h4><?php echo $senarai_produk['namaProduk']; ?></h3>
</div>
<?php
    }
    }else{
    echo "Tiada produk";
    }
?>
</body>
</html>
</div>