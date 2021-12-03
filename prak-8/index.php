<?php
require_once 'app/User.php';

$user = new User();


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $login = $user->authenticate($_POST['uname'], $_POST['pass']);
    if ($login){
        // Login Success
        header("location:home.php");
    }else{
        // Login Failed
        $msg= 'Username / password wrong';
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>percobaan m8</title>

    <link rel="stylesheet" type="text/css" href="assets/css/style-index.css">

</head>

<body>
    <!-- <img src="./assets/wave.svg" alt="wave background" class="body-bg"> -->
    <div class="bucket">
        <p>Login For Continue </p>
        <form action="" method="POST" class="login" name="login">
            <label for="uname">Username</label>
            <input type="text" name="uname" id="uname" placeholder="Username..." class="login-field">
            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass" placeholder="Pasword..." class="login-field">
            <input type="submit" name="login" value="Login" class="login-btn-submit">
        </form>
    </div>
</body>

</html>