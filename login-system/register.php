<?php

$conn = mysqli_connect('localhost', 'root', '', 'user_db');

if (isset($_POST['submit'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];

    $u = "SELECT username FROM user_data WHERE username='$username'";
    $uu = mysqli_query($conn, $u);

    $e = "SELECT email FROM user_data WHERE email='$email'";
    $ee = mysqli_query($conn, $e);

    $pss = " SELECT * FROM user_data WHERE password = '$password'";

    $error = array();

    if (mysqli_num_rows($uu) > 0) {
        $error['u'] = "Username already exists!";
    }

    if (mysqli_num_rows($ee) > 0) {
        $error['e'] = "Email already exists!";
    }

    if ($password != $cpassword) {
        $error['p'] = 'Password not matched!';
    }

    if (count($error) == 0) {
        $insert = "INSERT INTO user_data(username, email, password, user_type) VALUES('$username','$email','$password','$user_type')";
        mysqli_query($conn, $insert);
        header('location:login.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register form</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <!-- Tabs Titles -->

                <h2 class="active"> Sign Up </h2>

                <form method="POST" action="#">
                    <div class="form_input">

                        <input type="text" name="username" required placeholder="Enter your username" id="username"
                            autocomplete="off" value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>">
                            <?php
                        if (isset($error['u'])) {
                            echo '<span class="error-msg">' . $error['u'] . '</span>';
                        };
                        ?>

                        <input
                            pattern='^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$'
                            type="text" name="email" required placeholder="Enter your email" autocomplete="off" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
                            <?php
                        if (isset($error['e'])) {
                            echo '<span class="error-msg">' . $error['e'] . '</span>';
                        };
                        ?>
                        
                            <input type="password" name="password" required placeholder="Enter your password"
                            autocomplete="off">
                        <input type="password" name="cpassword" required placeholder="Confirm your password"
                            autocomplete="off">
                            <?php
                        if (isset($error['p'])) {
                            echo '<span class="error-msg">' . $error['p'] . '</span>';
                        };
                        ?>
                        <select name="user_type">
                            <option value="user">USER</option>
                            <option value="admin">ADMIN</option>
                        </select>
                        <input type="submit" name="submit" value="SIGN UP" class="btn-login" />

                    </div>
                </form>

                <div id="formFooter">
                    <a>Already have an account?</a>
                    <a class="underlineHover" href="login.php">Login now</a>
                </div>

            </div>

        </div>

</body>

</html>