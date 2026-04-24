<?php
#MULA SESSION
session_start();

#TAMATKAN SEMUA SESSION
session_destroy();

#LENCONGAN KE FAIL UTAMA 
header ("location:index.php");
?>