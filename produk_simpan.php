<?php
#SAMBUNG KE P/DATA
require 'config.php'; 
#TERIMA NILAI YG DI POST
if (isset($_POST['submit'])) {
$gambar=$_FILES['gambar']['name']; 
 $ext = substr(strrchr($_FILES['gambar']['name'], "."), 1);
$newnamepic = md5(rand() * time()) . ".$ext";
$uploadPath="gambar/".$newnamepic;
$isUploaded=move_uploaded_file($_FILES["gambar"]["tmp_name"],$uploadPath);		
	$nama = $_POST['nama'];
	$jenama = $_POST['jenama'];
	$harga = $_POST['harga'];
	$detail = $_POST['detail'];	
#MASUK REKOD KE DLM TABLE 	 	
$baharu= "INSERT INTO produk
VALUES (NULL,'$nama','$detail','$harga','$newnamepic','$jenama')";
#LAKSANA ARAHAN SQL
$barangan = mysqli_query($con, $baharu);
#MESEJ JIKA BERJAYA
if ($barangan) {
echo "<script>alert('Tambah produk berjaya'); 
window.location='produk.php'</script>";
}else{
echo "<script>alert('Gagal tambah produk'); 
window.location='produk_tambah.php'</script>";
}	
}
?>