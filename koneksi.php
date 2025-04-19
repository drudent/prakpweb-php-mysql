<?php
$conn = mysqli_connect("localhost", "drudent", "P@55W0RD", "db_mahasiswa");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>