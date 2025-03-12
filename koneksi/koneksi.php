<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "score";

    $koneksi = new mysqli($host, $user, $pass, $db);

    if ($koneksi->connect_error) {
        die("Koneksi Gagal". $koneksi->connect_error);
    }
?>