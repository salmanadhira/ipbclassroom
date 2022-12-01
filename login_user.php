<?php
include("config.php");
    if( isset($_POST['login'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $username_query = pg_query("SELECT * FROM users WHERE users_username='$username'");

        //cek username
        if( pg_num_rows($username_query) === 1 ) {
            //cek password
            $row = pg_fetch_array($username_query);
            if (password_verify($password, $row['users_password'])) {
                header("Location: index_user.php");
                exit;
            }
        }

        $error = true;
    }

?>
<!DOCTYPE html>

<html>
    <head>
        <title>Halaman Login</title>

    </head>

    <body>

    <h1>Halaman Login User</h1>

    <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">username / password salah!</p>

    <?php endif; ?>

    <form action="" method="post">
        <ul>

        <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
        </li>
        <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
        </li>




</ul>
<br>
        <input type="submit" value="Login" name="login" />
    </form>
    </body>

</html>