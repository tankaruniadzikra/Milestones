<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

    include "koneksi.php";

    $sql = "INSERT INTO contactus(
        name,
        email,
        message
    ) VALUES
    (
        'Tan Karunia Dzikra',
        'qwertyuiop@gmail.com',
        'ini adalah percobaan pertama'
    )";

    // cek query berhasil atau tidak
    if($conn->query($sql) == TRUE){
        echo "Insert Data telah berhasil";
    } else {
        echo "Insert Data gagal";
    }


?>