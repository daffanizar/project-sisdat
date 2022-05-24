<?php

//pastikan kalian udah biat database dan table sesuai dengan yang ada di pembuatan_database.sql

$server = "localhost";
$user = "root"; //isi dengan use name database kalian
$password = "passsword"; //isi pake password kalian
$nama_database = "sisdat"; // isidengan nama database kalian

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>