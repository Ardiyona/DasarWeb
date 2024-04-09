<?php
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "prakwebdb";

    $connect = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

    if (!$connect) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    
    // Query Membuat Tabel user
    // $query = "CREATE TABLE user (
    //     id INT AUTO_INCREMENT PRIMARY KEY,
    //     username VARCHAR(50) NOT NULL,
    //     password VARCHAR(50) NOT NULL
    // )";

    // if (mysqli_query($conn, $query)) {
    //     echo "Tabel user berhasil dibuat";
    // }
    // else {
    //     echo "Error saat membuat tabel: " . mysqli_errno($conn);
    // }

    // Query Memasukkan Data ke Dalam Tabel user
    // $nama_pengguna = "contoh_user";
    // $kata_sandi = "contoh_katasandi";

    // $query = "INSERT INTO user (username, password) VALUES ('$nama_pengguna', '$kata_sandi')";

    // if (mysqli_query($conn, $query)) {
    //     echo "Data berhasil dimasukkan ke tabel user";
    // }
    // else {
    //     echo "Error saat memasukkan data: " . mysqli_error($conn);
    // }

    // mysqli_close($conn);
?>