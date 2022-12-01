<?php
    include('config.php');

    if (isset($_GET['status'])) {
        print("Registrasi user gagal!");
    }

?>

<!DOCTYPE html>
<html>
<form action="registrasi.php" method="post">
<head>
    <title>Halaman Registrasi</title>
    <style>
        label {
            display: block;
        }
        </style>

</head>
<body>



<h1>Halaman Registrasi</h1>

<form action="" method="post">

<ul>
    <li>
        <label for="users_username">Username :</label>
        <input type="text" name="users_username" id="users_username">
    </li>
    <li>
        <label for="users_password">Password :</label>
        <input type="password" name="users_password" id="users_password">
    </li>
    <li>
        <label for="users_password2">Konfirmasi password :</label>
        <input type="password" name="users_password2" id="users_password2">
    </li>
    <li>
        <label for="nama">Nama Lengkap :</label>
        <input type="text" name="nama" id="nama">
    </li>
    <li>
        <label for="nim">NIM :</label>
        <input type="text" name="nim" id="nim">
    </li>
    <br>
        <input type="submit" value="Register" name="register" />
</form>

</body>
</html>
