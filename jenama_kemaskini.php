<?php
require 'config.php';
#TERIMA NILAI YG DI POST
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
$result2 = mysqli_query($con,"UPDATE jenama SET namaJenama='$nama' WHERE idJenama='$id'");
echo "<script>alert('Kemaskini jenama berjaya');
window.location='jenama.php'</script>";
}
?>