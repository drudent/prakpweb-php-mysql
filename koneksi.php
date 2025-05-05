<?php
    $conn = mysqli_connect("localhost", "r0y3nc", "p@sSr0y3ncW0rd", "praktikum_pweb");

    // Cek koneksi
    if (!$conn) {
        die("koneksi gagal: ".mysqli_connect_error());
    }
?>