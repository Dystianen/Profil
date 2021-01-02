<?php
    include "koneksi.php";

    $sql = "INSERT INTO user (
        id,
        nama,
        role,
        available,
        age,
        location,
        years_experience,
        email
        ) value
        (
        '1', 
        'Arkademy', 
        'Backend Developer',  
        'Full Time',
        '20',
        'Jakarta',
        '2',
        'distian.enyus@gmail.com'
        )";
    
    if ($koneksi->query($sql) == TRUE) {
        echo "Insert data telah berhasil";
    }else{
        echo "Insert data gagal";
    }
?>