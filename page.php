<html>
<head>
<title>
</title>
</head>
<body>
<center> Data Sedang Diproses </center>
<table>
<?php
    $email=$_GET['email'];
    $fullname=$_GET['fullname'];
    $username=$_GET['username'];
    
    echo"<tr><td>E-mail</td><td>:</td><td>$email</td><tr>";
    echo"<tr><td>Nama Lengkap</td><td>:</td><td>$fullname</td><tr>";
    echo"<tr><td>Nama Akun</td><td>:</td><td>$username</td><tr>";
    echo "</table><hr>";

?>
    </table>
</body>
</html>