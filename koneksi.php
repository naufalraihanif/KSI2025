<?php

$DB_HOST = "localhost";
$DB_USER = "root";    
$DB_PASS = "";          
$DB_NAME = "db_ksi2025"; 

$koneksi = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

if (!$koneksi) {
    die("KONEKSI GAGAL: " . mysqli_connect_error());
}
?>