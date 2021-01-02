<?php 
    $host = "localhost"; //host database
    $username = "root"; //username database
    $password = ""; //password database
    $db = "profil";
    $koneksi = new mysqli($host, $username, $password, $db); //membuat koneksi ke server mysql

    if ($koneksi->connect_error){
        die("koneksi ke database gagal");
    }
?>