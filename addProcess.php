<?php 
    $conn = new mysqli("localhost", "Admin", "12345678", "database");
    $username = $_GET['username'];
    
    $nama = $_POST["nama"];
    $NIM = $_POST["NIM"];
    $jurusan = $_POST["jurusan"];

    if(empty($nama)||empty($jurusan)||empty($NIM)){
        header("location: Tambah.php?username=$username");
    }else{

    $result = mysqli_query($conn, "INSERT INTO $username (nama, NIM, jurusan) VALUE ('$nama','$NIM','$jurusan')" );
 


    header("Location: Table.php?permission=permitted&username=$username");
    }
?>