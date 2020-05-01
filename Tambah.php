<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table{
            margin: auto;
            margin-top: 200px;
            background-color: rgba(37, 46, 212, 0.51);
            border-radius: 20px;
            border-spacing: 10px;
            padding: 10px;
            text-align: center;
            font-family:  Arial, Helvetica, sans-serif;
        }
        input{
            text-align: center;
        }
    </style>
</head>
<body bgcolor="white">
     <?php 
        $username = $_GET['username'];
        echo $username;
    ?>
    <table>
        <?php echo "<form action='addProcess.php?username=$username' method='POST'>" ?>
        <tr>
            <td>Nama</td>
            <td>NIM</td>
            <td>Jurusan</td>
        </tr>
        <tr>
            <td><input type="text" name="nama"></td>
            <td><input type="text" name="NIM"></td>
            <td><input type="text" name="jurusan"></td>
        </tr>
        <tr>
            <td colspan="3"><button>Submit</button></td>
        </tr>
        </form>
    </table>
</body>
</html>