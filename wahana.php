<?php
echo"<h2>Penegcekan Wahana Roller Coaster</h2>";

$umur = 15;
$tinggi_cm = 150;

if ($umur >=12 && $tinggi_cm >=145) {
    echo "<h3 style='color: green;'>Selamat, Anda Boleh Naik Wahana!</h3>";
} else {
    echo "<h3 style='color: red;'>Maaf, Syarat Tidak Terpenuhi.<?h3>";
}
?>