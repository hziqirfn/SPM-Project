<?php include 'header.php'; ?>
<html>
<!-- PANGGIL MENU --> 
<div id="isi">
<head>
<h2 style="text-align:center">DAFTAR PENGGUNA BARU </h2>
</head>
<body>
<form method="POST" action="signup_simpan.php">
<p>ID PENGGUNA<br>
<input type="text" name="id" placeholder="cth:123456789012" pattern="[0-9]{12}"
oninvalid="this.setCustomValidity('Sila masukkan 12 digit nombor sahaja')"
oninput="this.setCustomValidity('')"
required>
<p>PASSWORD<br>
<input type="text" name="password" placeholder="5 - 10 huruf" minLength='5' maxLength='10' size="30" required></p>
<p>NAMA<br>
<input type="text" name="nama" placeholder="Nama Anda" size="60" required></p>
<p>NOM HP<br>
<input type="text" name="nomhp" placeholder="Tanpa Tanda -" maxlength='13' size="30" onkeypress='return event.charCode >= 48
&&
event.charCode <= 57' required></p>
<br>
<div>
<button name="hantar" type="submit">DAFTAR</button>
<button type="reset">RESET</button>
</div>
<font color='red'>*Pastikan maklumat anda betul sebelum membuat pendaftaran.</font>
</form>
</body>
</div>
</html>