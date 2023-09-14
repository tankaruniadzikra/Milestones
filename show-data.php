<?php
    include "koneksi.php";

    //inisial variabel
    $contact_id = "";
    $nama = "";
    $email = "";
    $message ="";

    //cek koneksi
    if($conn->connect_error){
        die("Connection failed: ". $conn->connect_error);
    }

    //query untuk ambil data dari database
    $sql = "SELECT * FROM contactus WHERE contact_id = 1";
    $result = $conn->query($sql);

    //ambil data dari hasil query
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $contact_id = $row["contact_id"];
            $nama = $row["name"];
            $email = $row["email"];
            $message = $row["message"];
        }

    } else {
        echo "0 Result";
    }

    $conn->close()
?>