<?php 

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "db_hewan";

$koneksi = mysqli_connect("localhost","root","","Natasyaaa");

if(!$koneksi){
    die("Gagal terhubung dengan database:".mysqli_connect_eror());
}
?>