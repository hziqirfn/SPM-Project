<?php
#SAMBUNG KE P/DATA 
require 'config.php';
#TERIMA FAIL CSV POST
if(isset($_POST["import"])) {
$filename=$_FILES["file"]["tmp_name"];
if($_FILES["file"]["size"] > 0) {
$file = fopen($filename, "r");
while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
{
#MASUKKAN DALAM TABLE
$import = "INSERT INTO jenama (idJenama,namaJenama) 
values (NULL,
'".$getData[0]."')";
#LAKSANAKAN ARAHAN SQL
$tambah = mysqli_query($con,$import);
if(!isset($tambah))
{
#MSG POP UP JIKA GAGAL 
echo "<script>alert('Pindah naik fail CSV gagal');
window.location='import.php'</script>";
#MSG POP UP JIKA BERJAYA 
}else{
echo "<script>alert('Pindah naik fail CSV berjaya');
window.location='jenama.php'</script>";
}
}
fclose($file);
}
}
?>