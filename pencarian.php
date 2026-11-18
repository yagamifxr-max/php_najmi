<!DOCTYPE html>
<html>
<h2>Mesin Pencari RPL</h2>

<form action="" method="GET">
    <input type="text" name="kata_kunci" placeholder="Cari apa saja...">
    <button type="submit">Cari</button>
</form>

<hr>
<?php
if(isset ($_GET['kata_kunci'])) {
$cari = $_GET['kata_kunci'];
echo "<P>Menampilkan hasil pencarian untuk: <b>$cari</b></p>";
}
?>
</body>
</html>
    