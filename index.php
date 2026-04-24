<?php
#PANGGIL FAIL HEADER
include 'header.php';
?>
<html>
<!-- MENU SIGNIN/SIGNUP -->
<div id="menu">
    <?php include 'menu1.php'; ?>
</div>
<!-- PAPAR ISI -->
<div id="isi">
<head>
<center>
<h3>SELAMAT DATANG KE <?php echo $kedai;?></h3>
<marquee behavior="alternate">Sila login untuk memilih barangan idaman anda</marquee>
</center>
</head>
<?php include 'welcome.php' ?>
</div>
</html>