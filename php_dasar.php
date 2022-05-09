<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Belajar php Dasar</h1>
    <?php
    echo "hello world";
    ?>
    <h2>Menggunakan Variabel</h2>
    <?php
    $nim = "312010250";
    $nama = 'Marlina Horo';
    echo "NIM : " . $nim . "<br>";
    echo "Nama : $nama";
    ?>
    <h2>Predefine Variable</h2>
    <?php 'selamat datang' . $_GET["nama"] ?>
</body>

</html>