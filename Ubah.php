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

    <?php 
    $conn = new mysqli("localhost", "Admin", "12345678", "database");
    $username = $_GET['username'];
    $nama = $_GET['nama'];
    
    $sql = "SELECT * FROM $username WHERE nama='$nama'";

    $query =mysqli_query($conn,$sql);
    $array= mysqli_fetch_array($query);


    $NIM = $array['NIM'];
    $jurusan = $array['jurusan'];
    echo "$username";
    ?>

</head>
<body bgcolor="white">
    
    <table>
        <?php echo "<form action='updateProcess.php?username=$username' method='POST'>" ?>
        <tr>
            <td>Nama</td>
            <td>NIM</td>
            <td>Jurusan</td>
        </tr>
        <tr>
            <td> <?php echo "<input type='text' name='nama' value='$nama' readonly>" ?> </td>
            <td><?php echo "<input type='text' name='NIM' value='$NIM'>" ?></td>
            <td><?php echo "<input type='text' name='jurusan' value='$jurusan'>" ?></td>
        </tr>
        <tr>
            <td colspan="3"><button>Submit</button></td>
        </tr>
        </form>
    </table>
</body>
</html>