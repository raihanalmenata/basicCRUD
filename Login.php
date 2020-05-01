<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table{
            margin: auto;
            margin-top: 200px;
            background-color: rgba(37, 183, 212, 0.51);
            border-radius: 20px;
            border-spacing: 10px;
            padding: 10px;
            text-align: center;
            font-family:  Arial, Helvetica, sans-serif;
        }
    </style>
    <?php 
    //Checking
    if(isset($_POST["username"])){
        $username = str_replace(" ","",$_POST["username"]);
    }
    if(isset($_POST["password"])){
        $password = str_replace(" ","",$_POST["password"]);
    }            
        if (!empty($username) && !empty($password)){
            //Connect.
            $conn = new mysqli("localhost", "Admin", "12345678", "database");
            //Query sentence.
            $sql = "INSERT INTO anggota (nama, kataSandi)
            VALUES ('$username', '$password')";
            //Query command.
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            //Query Sentence.
            $sql = "CREATE TABLE $username (
                nama VARCHAR(10) NOT NULL,
                NIM INT(8) NOT NULL,
                jurusan VARCHAR(10))";
            //Query command.
            if ($conn->query($sql) === TRUE) {
                echo "New table created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }    
        } 
    ?>
</head>
<body bgcolor="white">
    
    <table >
    <form action="Table.php" method="POST" style="display: inline-block"> 
        <tr>
            <td>Username</td>
        </tr>
        <tr>
            <td>
                <input type="text" style="text-align: center" name="username">
            </td>
        </tr>
        <tr>
            <td>Password</td>
        </tr>
        <tr>
            <td>
            <input type="password" style="text-align: center" name="password">
            </td>
        </tr>
        <tr>
            <td>
                <button>Log In</button> </form>
                <a href="Daftar.php"><button>Daftar</button></a>
            </td>
        </tr>
    </table>
</body>
</html>