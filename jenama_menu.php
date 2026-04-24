<h4>Jenama</h4>
<form action="jenama_pilihan.php" method="GET">
<?php
#PILIH TABLE JENAMA
$query_jenama = "SELECT * FROM jenama";
$papar_query_jenama  = mysqli_query($con, $query_jenama);
if(mysqli_num_rows($papar_query_jenama) > 0)
    {
foreach($papar_query_jenama as $senarai_brand)
        {
?>
<input type="checkbox" name='brand' onclick="onlyOne2(this)" 
value="<?PHP echo $senarai_brand['idJenama']; ?>">
<?PHP echo $senarai_brand['namaJenama']; ?> <br/>
<?php } ?>
<br>
<button type="submit">PILIH</button>
</form>	
<?php } ?>
