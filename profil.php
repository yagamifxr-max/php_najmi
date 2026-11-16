<?php
// 1. DATA DIRI
$nama = "Najmi Aliu";
$kelas = "XI RPL";
$hobi = "My hobbies? I code something, I'm lowkey obsessed with VS Code, and honestly I love sleeping. That's basically my whole vibes";
$warna_latar = "#A3B18A";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            background-color: <?php echo $warna_latar; ?>;
            color: #344e41;
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }
        </style>
</head>
<body>
    <div class="Kartu">
        <h2><?php echo $nama; ?></h2>
        <p>Kelas: <?php echo $kelas; ?></p>
        <hr>
        <p>Hobi: <?php echo $hobi; ?></p>
        </div>
</body>
</html>
