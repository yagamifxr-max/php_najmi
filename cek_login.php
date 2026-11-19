<?php
    $input_user = $_POST['user'];
    $input_pass = $_POST['pass'];

    if ($input_user == "admin" && $input_pass == "rpl123") {
        echo "<h1 style='color: green; text-align: center;'>LOGIN BERHASIL!</h1>";
        echo "<p style='text-align: center;'>Selamat datang di Dashboard Rahasia RPL.</p>";
    } else {
        echo "<h1 style='color: red; text-align: center;'>LOGIN GAGAL!</h1>";
        echo "<p style='text-align: center;'>Username atau Password salah.</p>";
        // Link untuk kembali mencoba login
        echo "<center><a href='login.php'>Coba Lagi</a></center>";
    }
?>