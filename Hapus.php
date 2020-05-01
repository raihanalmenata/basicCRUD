<?php 
    $conn = new mysqli("localhost", "Admin", "12345678", "database");
    $username = $_GET["username"];
    $table = $_GET["database"];
    $result = mysqli_query($conn, "DELETE FROM $table WHERE nama='$username'");
 


    
    header("Location: Table.php?permission=permitted&username=$table");
?>