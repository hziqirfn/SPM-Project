<?php
require 'config.php';
session_start();
if (isset($_POST['id'])) {
    $user = mysqli_real_escape_string($con,$_POST['id']);
    $pass = mysqli_real_escape_string($con,$_POST['pass']);
    #LAKSANA SQL
    $query = mysqli_query($con, "SELECT * FROM pengguna WHERE idPengguna= '$user' AND password= '$pass'");
    $row = mysqli_fetch_assoc($query);
    if(mysqli_num_rows($query) == 0||$row['password']!=$pass)
    {
    #MSG JIKA GAGAL
    echo "<script>alert('ID Pengguna/Kata laluan yang salah');
    window.location='index.php'</script>";
    }else{
    #CIPTA SESSION
    $_SESSION['id']=$row['idPengguna'];
    $_SESSION['nama']=$row['nama'];
    $_SESSION['level']=$row['aras'];
    #BUKA DASHBOARD
    header("LOCATION: dashboard.php");
    }
}
?>