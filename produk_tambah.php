<?php include 'header.php'; ?>
<html>
<!-- PANGGIL MENU -->
<div id="menu">
  <?php include 'menu2.php'; ?>
</div>
<!-- PANGGIL ISI -->
<div id="isi">
<head>
<h2 style="text-align:center">TAMBAH PRODUK BARU </h2>
</head>
<body>
<form method="POST" action="produk_simpan.php" enctype="multipart/form-data">
<p>NAMA PRODUK<br>
<input type="text" name="nama" placeholder="TAIP DI SINI"
size="50" required autofocus></p>
<p>JENAMA<br>
<select name="jenama">
    <?php
    $jenama=mysqli_query($con,"SELECT * FROM jenama");
    while ($pilihan=mysqli_fetch_array($jenama))
    {
    echo "<option hidden selected> -- Pilih -- </option>";
  echo "<option value='$pilihan[idJenama]'>$pilihan[namaJenama]</option>";		
    }
    ?>
    </select>
/ 
<a href="jenama.php">*Senarai Jenama</a>
</p>
<p>HARGA<br>
<input type="text" name="harga" placeholder="00.00"
size="10" required></p>
<p>DETAIL PRODUK<br>
<textarea name="detail" placeholder="Taip maklumat produk" rows="10" cols="50" required></textarea></p>
<p>GAMBAR<br>
<input type="file" name="gambar" accept=".jpg,.jpeg,.png" required></p>
<br>
<div>
<button name="submit" type="submit">SIMPAN</button> 
<button type="reset">RESET</button>
</div>
<font color='red'>*Pastikan maklumat anda betul sebelum membuat pendaftaran.</font>
</form>
</body>
</div>
</html>