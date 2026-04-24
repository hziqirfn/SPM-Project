<?php
#SAMBUNG KE P/DATA 
require 'config.php';
#TERIMA NILAI YG DI POST 
if (isset($_POST['submit'])) {
    $produk = $_POST['idProduk'];
    $pengguna = $_POST['idPengguna'];
#MASUK REKOD KE DLM TABLE
$baharu= "INSERT INTO pilih 
VALUES (NULL, '$pengguna', '$produk')";
#LAKSANA ARAHAN SQL
$pilihan = mysqli_query($con, $baharu);
#TINDAKAN SETERUSNYA 
if($pilihan) {
echo "<script>
window.location='produk_detail.php?id=$produk'</script>";
}else{
echo "<script>alert('Gagal direkodkan'); 
window.location='dashboard.php'</script>";
}
}
?>