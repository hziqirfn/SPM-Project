<?php
#SETTING DATABASE
$host="localhost";
$user="root";

#NAMA DB, UBAH DI SINI 
$db="sportcar";
$password="";

#SAMBUNGAN PANGKALAN DATA
$con = mysqli_connect($host,$user,$password,$db);

#PAPARAN MSG JIKA SAMBUNGAN GAGAL
if (mysqli_connect_errno()){
echo "Pangkalan data tidak berhubung!:".mysqli_connect_error();
}

#TETAPAN SISTEM-UBAH DI SINI
     $namasys = "~SISTEM PEMILIHAN KERETA~";
     $kedai = "SPORT CAR STORE";
     $motto = "TERBAIK DAN BERPATUTAN";
     $lain2 = "GEORGETOWN , PULAU PINANG";

?>  