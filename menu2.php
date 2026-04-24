<html>
<div id="menu">
<?php
if ($_SESSION['level']=="PENGGUNA"){
?>
    <h4>MENU PENGGUNA</h4> <!-- #ARAS LOGIN - PENGGUNA -->
    <ul>
    <li><a href="dashboard.php">HOME</a></li>
    <li><?php include 'jenama_menu.php'; ?></li>
    <li><?php include 'produk_cari.php'; ?></li>
    <li><a href="logout.php">KELUAR</a></li>
    </ul>
<?php
}else{
?>
    <h4>MENU OWNER</h4> <!-- ARAS LOGIN - ADMIN -->
    <ul>
    <li><a href="dashboard.php">HOME</a></li>
    <li><a href="produk.php">SENARAI PRODUK</a></li>
    <li><a href="produk_tambah.php">TAMBAH PRODUK</a></li>
    <li><a href="pilihan.php">PILIHAN PENGGUNA</a></li>
    <li><a href="logout.php">KELUAR</a></li>
    </ul>
<?php } ?>
</div>
<script><!-- JS UTK PILIHAN 1 JENAMA SHJ -->
function onlyOne2(checkbox) {
var checkboxes = document.getElementsByName("brand")
checkboxes.forEach((item) => {
if (item !== checkbox) item.checked = false
})
}
</script>
</html>
