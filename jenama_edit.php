<?php
#PANGGIL HEADER
include 'header.php';
#DAPATKAN URL
$idJenama = $_GET['id'];
#SAMBUNG KE TABLE JENAMA 
$dataJenama=mysqli_query($con,"SELECT * FROM jenama
WHERE idJenama='$idJenama'");
$qJenama=mysqli_fetch_array($dataJenama);
?>
<html>
<!-- PAPAR MENU -->
<div id="menu">
    <?php include 'menu2.php'; ?>
</div>
<!-- PAPAR ISI -->
<div id="isi">
<head>
<h2 style="text-align:center">EDIT JENAMA </h2>
</head>
<body>
<form method="POST" action="jenama_kemaskini.php">
<p>JENAMA<br>
<input type="text" name="nama" value="<?php echo $qJenama['namaJenama'];?>"
size="50" required autofocus></p>
<input type="text" name="id" value="<?php echo $qJenama['idJenama'];?>" hidden>
<br>
<button name="submit" type="submit">SIMPAN</button> 
<br>
<font color='red'>*Pastikan maklumat anda betul</font>
</form>
</body>
</div>
</html>