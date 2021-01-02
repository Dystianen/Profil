<?php 
    include "koneksi.php";

    $sql = "CREATE DATABASE profil";

    if ($koneksi->query($sql) === TRUE) {
        echo "Database Berhasil di Buat";
    }else{
        echo "Database Gagal di Buat";
    }
?>