<?php
#SAMBUNG KE P/DATA 
require 'config.php';
#TERIMA NILAI YG DI POST
if (isset($_POST['id'])) {
    $idPengguna = $_POST['id'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $nomhp = $_POST['nomhp'];
#MASUK REKOD KE DLM TABLE
$daftar1= "INSERT INTO pengguna VALUES ('$idPengguna', '$password', '$nama', '$nomhp', 'PENGGUNA')";
$hasil1 = mysqli_query($con, $daftar1);
#MESEJ JIKA BERJAYA
if ($hasil1) {
echo "<script>alert('Pendaftaran berjaya');
window.location='index.php'</script>";
}else{
echo "<script>alert('Pendaftaran gagal,Semak IdPengguna');
window.location='signup.php'</script>";
}
}
?>