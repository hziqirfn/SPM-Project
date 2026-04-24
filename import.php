<?php
#PAPARAN HEADER SISTEM
include 'header.php';
?>
<html>
<body>
<!-- PANGGIL MENU -->
<div id="menu">
    <?php include 'menu2.php'; ?>
</div>
<!-- PAPAR ISI -->
<div id="isi">
<center><h2>IMPORT JENAMA DARI FAIL CSV</h2></center>
<label>Pilih lokasi fail CSV/Excel:</label>
<!-- PANGGIL FAIL FORMAT CSV -->
<form action="import_simpan.php" method="post" enctype="multipart/form-data">
<input type="file" name="file" id="file" accept=".csv"><br>
<button type="submit" id="submit" name="import" >UPLOAD
</button>
</form>
*CONTOH: <br>
JENAMA1<br>
JENAMA2<br>
JENAMA3<br>
JENAMA4
<p>*Cipta fail dalam notepad++ dan save as csv</p>
</body>
</div>
</html>