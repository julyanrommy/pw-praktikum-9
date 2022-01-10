<?php
        //koneksi ke database
        $conn = mysqli_connect("localhost", "root", "", "praktikum_9");

        //fungsi untuk mengambil data dari database
        function query($query){
            global $conn;
            $data = mysqli_query($conn, $query);
            $yaKaryawan = [];
            while( $karyawan = mysqli_fetch_assoc($data) ) {
                $yaKaryawan[] = $karyawan;
            }
            return $yaKaryawan;
        }

        //fungsi untuk menambah data
        function tambah($data){
            global $conn;

            $nama = $data["nama"];
            $email = $data["email"];
            $alamat = $data["alamat"];
            $gender = $data["gender"];
            $posisi = $data["posisi"];
            $status = $data["status"];

            $query = "INSERT INTO karyawan
                    VALUES
                    ('', '$nama', '$email', '$alamat', '$gender', '$posisi', '$status')
                ";
            //menggunakan query untuk menambah data yaitu memerlukan parameter penghubung database dan query sql
            mysqli_query($conn, $query);
            //mengembalikan jumlah pada database,
            //contoh: jika id = 3 terdapat pada database maka akan mereturn nilai 1, jika tidak ada maka return 0
            return mysqli_affected_rows($conn);
        }

        //fungsi untuk menghapus data
        function hapus($id){
            global $conn;
            mysqli_query($conn, "DELETE FROM karyawan WHERE id = $id");
            //mengembalikan jumlah pada database,
            //contoh: jika id = 3 terdapat pada database maka akan mereturn nilai 1, jika tidak ada maka return 0
            return mysqli_affected_rows($conn);
        }
