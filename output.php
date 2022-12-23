<?php 
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$tempat_lahir = $_POST["tempat_lahir"];
$pendidikan = $_POST["pendidikan"];
$jenis_kelamin = $_POST["jenis_kelamin"];

$tanggal_lahir = $_POST["tanggal_lahir"];
$tanggal_lahir = date("d M Y", strtotime($tanggal_lahir));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <nav>
        <h1 class="title">Form Registrasi</h1>
    </nav>
    <section id="forminput">
        <h1>Data Registrasi, <?= $nama ?></h1>
        <table>
            <tr>
                <td width="200px">Nama</td>
                <td><?= $nama?></td>
            </tr>
            <tr>
                <td width="200px">Alamat</td>
                <td><?= $alamat?></td>
            </tr>
            <tr>
                <td width="200px">Tempat & Tanggal Lahir</td>
                <td><?= $tempat_lahir . ", " .  $tanggal_lahir ?></td>
            </tr>
            <tr>
                <td width="200px">Jenis Kelamin</td>
                <td><?= $jenis_kelamin ?></td>
            </tr>
            <tr>
                <td width="200px">Pendidikan</td>
                <td><?= $pendidikan ?></td>
            </tr>
        </table>
        <a href="input.php">Regitsrasi Ulang</a>
    </section>
    <footer>
        <p>Created by Muhammad Ali Mustaqim 77222329</p>
        <p>Web Programming 1 PMM PKBN 2022</p>
    </footer>
</body>
</html>