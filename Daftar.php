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
    </style>
</head>
<body bgcolor="white">
    <table >
        <form action= "Login.php" method="POST">
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
            <a href="Login.php"><button type="submit"> Daftar</button></a>
            </td>
        </tr>
    </form>
    </table>
</body>
</html>