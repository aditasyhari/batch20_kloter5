<?php
    // Koneksi Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_kloter5";

    $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Koneksi Gagal: " . mysqli_connect_error());

    if (mysqli_connect_errno()) {
        printf("Koneksi Gagal: %s\n", mysqli_connect_error());
        exit();
    }
?>