<?php
include "koneksi.php";

if(isset($_POST['submit'])){
    $contact_id = $_POST["contact_id"];
    $nama = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Query update
    $sql = $conn->prepare("UPDATE contactUs SET name=?, email=?, message=? WHERE contact_id=?");
    $sql->bind_param("sssi", $nama, $email, $message, $contact_id);

    // Cek apakah query berhasil dijalankan
    if($sql->execute()){
        echo "Update Data Berhasil";
    } else {
        echo "Update Data Gagal: " . $conn->error;
    }

    $conn->close();
}

     
?>
