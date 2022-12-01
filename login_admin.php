<?php
include("config.php");
    if( isset($_POST['loginadmin'])) {

        $username = $_POST['admins_username'];
        $password = $_POST['admins_password'];

        $username_query = pg_query("SELECT * FROM admins WHERE admins_username='$username'");

        //cek username
        if( pg_num_rows($username_query) === 1 ) {
            //cek password
            $row = pg_fetch_array($username_query);
            if (password_verify($password, $row['admins_password'])) {
                header("Location: index_admin.php");
                exit;
            }

            $error = true;
        }
        var_dump($username);
        var_dump($password);
    }

?>
<!DOCTYPE html>

<html>
    <head>
        <title>Halaman Login</title>

    </head>

    <body>

    <h1>Halaman Login Admin</h1>

    <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">username / password salah!</p>

    <?php endif; ?>

    <form action="" method="post">
        <ul>

        <li>
                <label for="admins_username">Username :</label>
                <input type="text" name="admins_username" id="admins_username">
        </li>
        <li>
                <label for="admins_password">Password :</label>
                <input type="password" name="admins_password" id="admins_password">
        </li>




</ul>
<br>
        <input type="submit" value="Login" name="loginadmin" />
    </form>
    </body>

</html>