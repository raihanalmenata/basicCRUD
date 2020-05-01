<!DOCTYPE html>
<html lang="en">
<head> 

    <style>
        td{
            background-color: lightseagreen;
            border-spacing: 5px;
            padding: 20px;
            font-family: Arial, Helvetica, sans-serif;
            color: white;
            text-align: center;
        }
    </style>
    
    <?php 
        if( !isset($_GET['permission'])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        //Connect.
        $conn = new mysqli("localhost", "Admin", "12345678", "database");
        //Command.
        $sql = "SELECT kataSandi FROM anggota WHERE nama ='$username' ";
        $result = $conn->query($sql);
        if ($result->num_rows == 0) {
            header('Location: Login.php');
        }
        $array = $result->fetch_array();
        if($array['kataSandi'] != $password){
            header('Location: Login.php');
        }
        }else{
            $username = $_GET['username'];
        }
    ?>

    <?php 
        //Connect.
        $conn = new mysqli("localhost", "Admin", "12345678", "database");
        //Command.
        $sql = "SELECT * FROM $username";
        $selection = $conn->query($sql);
    ?>

</body>
        <table align="center" cellspacing="10">
            <tr>
            <td >Nama</td>
                <td>NIM</td>
                <td>Jurusan</td>
                <td style="background-color: #1B393F"><?php echo "<a style='color: white' href='Tambah.php?username=$username'>Tambah</a>"?></td>
            </tr>
            <?php
            while($array1= mysqli_fetch_array($selection)){
                echo "<tr>";
                    echo "<td rowspan='2' style='background-color: orange' >".$array1['nama']."</td>";
                    echo "<td rowspan='2' style='background-color: orange' >".$array1['NIM']."</td>";
                    echo "<td rowspan='2' style='background-color: orange' >".$array1['jurusan']."</td>";
                    echo "<td style='background-color: #874E63'><a style='color: white' href='Ubah.php?username=$username&nama=".$array1['nama']."'>Ubah</a></td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td style='background-color: #874E63'><a style='color: white' href='Hapus.php?username=".$array1['nama']."&database=$username'>Hapus</a></td>";
                echo "</tr>";}  
            ?>
        </table>
</html>