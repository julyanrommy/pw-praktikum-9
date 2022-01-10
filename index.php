<?php
//memanggil file functions.php
require 'functions.php';

//memanggil function query pengambilan data pada table karyawan
//lalu ditampung kedalam variable karyawan
$karyawan = query("SELECT * FROM karyawan");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Karyawan UP</title>
</head>

<body>
    <h1 class="judul"> Daftar Karyawan</h1>

    <a href="tambah.php">Tambah Karyawan</a>
    <br>
    <table border="3" cellpadding="10" cellspacing="0" class="tdl">
        <tr>
            <th>
                No.
            </th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Gender</th>
            <th>Posisi</th>
            <th>Status</th>
        </tr>

        <?php foreach ($karyawan as $item) : ?>
            <tr>
                <td><?= $item["id"] ?></td>
                <td><a href="hapus.php?id=<?= $item["id"]; ?>" onclick="return confirm('yakin?')">Hapus</a></td>
                <td><?= $item["nama"] ?></td>
                <td><?= $item["email"] ?></td>
                <td><?= $item["alamat"] ?></td>
                <td><?= $item["gender"] ?></td>
                <td><?= $item["posisi"] ?></td>
                <td><?= $item["status"] ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>