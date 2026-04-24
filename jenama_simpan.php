<?php
#SAMBUNG KE P/DATA
require 'config.php';
#TERIMA NILAI YG DI POST
if (isset($_POST['submit'])) {  
	$jenama = $_POST['jenama'];
#MASUK REKOD KE DLM TABLE 	 	
$baharu= "INSERT INTO jenama
VALUES (NULL,'$jenama')";
#LAKSANA ARAHAN SQL
$barangan = mysqli_query($con, $baharu);
#MESEJ JIKA BERJAYA
if ($barangan) {
echo "<script>alert('Tambah jenama berjaya'); 
window.location='jenama.php'</script>";
}else{
echo "<script>alert('Gagal tambah produk'); 
window.location='jenama_tambah.php'</script>";
}	
}
?>