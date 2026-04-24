<html>
<!-- PANGGIL HEADER -->
<?php include 'header.php'; ?>
<!-- PANGGIL MENU -->
<div id="menu">
    <?php include 'menu2.php'; ?>
</div>
<!-- PAPAR ISI -->
<div id="isi">
<!-- PAPAR UCAPAN -->
<head>
<h2 style="text-align:center">SELAMAT DATANG
<?php echo $_SESSION['nama'];?></h2>
</head>
<!-- PAPAR PAGE -->
<?php include 'welcome.php' ?>
</div>
</html>