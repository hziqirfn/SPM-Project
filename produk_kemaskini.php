<?php
#SAMBUNG KE P/DATA
require 'config.php';
#TERIMA NILAI YG DI POST 
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jenama = $_POST['jenama'];
    $harga = $_POST['harga'];
    $detail = $_POST['detail'];
#KEMASKINI
$result2 = mysqli_query($con,"UPDATE produk SET 
namaProduk='$nama', detail='$detail', 
harga='$harga', gambar=gambar, idJenama='$jenama' 
WHERE idProduk='$id'");
echo "<script>alert('Kemaskini produk berjaya');
window.location='produk.php'</script>";
}
?>