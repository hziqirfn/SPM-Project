<?php 
#PANGGIL HEADER
include 'header.php'; 
?>
<html>
<!-- PANGGIL MENU -->
<div id="menu">
  <?php include 'menu2.php'; ?>
</div>
<!-- PANGGIL ISI -->
<div id="isi">
<head>
<h2 style="text-align:center">TAMBAH JENAMA PRODUK BARU </h2>
</head>
<body>
<!-- BORANG -->	
<form method="POST" action="jenama_simpan.php">
<p>JENAMA PRODUK<br>
<input type="text" name="jenama" placeholder="TAIP DI SINI"
size="50" required autofocus></p>
<br>
<div>
<button name="submit" type="submit">SIMPAN</button> 
<button type="reset">RESET</button>
</div>
<font color='red'>*Pastikan maklumat anda betul sebelum simpan</font>
</form>
</body>
</div>
</html>