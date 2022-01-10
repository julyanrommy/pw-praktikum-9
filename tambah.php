<?php
require 'functions.php';

//memeriksa apakah tombol submit telah ditekan atau belum
if (isset($_POST["submit"])) {
    //jika sudah ditekan dijalankan function tambah
    if (tambah($_POST) > 0) {
        echo "Data berhasil ditambahkan!";
    } else {
        echo "Data gagal ditambahkan!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="tambahya.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Karyawan</title>
</head>

<body>
    <h1 class="judul2">Tambah Karyawan</h1>
    <form action="" method="post" class="form-isi">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email">
            </li>
            <li>
                <label for="alamat">Alamat : </label>
                <input type="text" name="alamat">
            </li>
            <li>
                <label for="gender">Gender : </label>
                <select name="gender" size="1">
                    <option>Pria</option>
                    <option>Wanita</option>
                </select>
            </li>
            <li>
                <label for="posisi">Posisi : </label>
                <input type="text" name="posisi">
            </li>
            <li>
                <label for="status">Status : </label>
                <select name="status" size="1">
                    <option>Full Time</option>
                    <option>Part Time</option>
                </select>
            </li>
            <button type="submit" name="submit">
                Tambah Data
            </button>
        </ul>
    </form>
</body>

</html>