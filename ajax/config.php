<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db_koleksimusik";

$koneksi = new mysqli($host, $username,$password, $database);

if($koneksi->connect_error){
    die("Koneksi Gagal: " . $koneksi->connect_error);
}
?>