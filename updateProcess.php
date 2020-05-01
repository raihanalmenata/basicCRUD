<?php 
    $conn = new mysqli("localhost", "Admin", "12345678", "database");
    $username = $_GET['username'];
    
    $nama = $_POST['nama'];
    $NIM = $_POST['NIM'];
    $jurusan = $_POST['jurusan'];
    
    $sql = "UPDATE $username SET nama='$nama', NIM='$NIM', jurusan='$jurusan' WHERE nama='$nama'";
    $query =mysqli_query($conn,$sql);

    echo $username;

   
    header("Location: Table.php?permission=permitted&username=$username");
?>