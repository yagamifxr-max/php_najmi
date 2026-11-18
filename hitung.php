<?php
echo "<h2>Hasil Perhitungan</h2>";

//1. TANGKAP DATA DARI FORM
$nilai_a = $_POST['angka1'];
$nilai_b = $_POST['angka2'];

//2. PROSES MATEMATIKA
$hasil = $nilai_a + $nilai_b;

//3. TAMPILKAN HASILNYA
echo "<p>$nilai_a ditambah $nilai_b sama dengan <b>$hasil</b></p>";

//Link untuk kembali ke form
echo "<br><a href='kalkulator.php'>Hitung Lagi</a>";
?>