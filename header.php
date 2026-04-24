<?php
session_start();
#SAMBUNG P.DATA 
include 'config.php';
?>
<html>
<!-- PANGGIL CSS EXTERNAL -->
<link rel="stylesheet" type="text/css" href="style.css">
<!-- NAMA SISTEM DI TITLE BAR BROWSER -->
<title><?php echo $namasys;?></title>
<!-- PAPAR MAKLUMAT SISTEM DI BANER -->
<div class="header">
<br><center><fontcolor:darkgoldenrod><h1><?php echo $kedai;?></h1>
    <h3><?php echo $motto;?></h3>
    <h5><?php echo $lain2;?></h5></fontcolor:darkgoldenrod>
</div>
<!-- PAPAR UTILITI -->
 <?php include 'utility.php'; ?>
 </html>