<?php

$conn = mysqli_connect('localhost', 'root', '', 'user_db');

session_start();

if(isset($_POST['submit'])){

   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $password = md5($_POST['password']);
   $datetime = $_POST['username'];

   $select = " SELECT * FROM user_data WHERE username = '$username' && password = '$password' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['username'];
         $_SESSION['admin_email'] = $row['email'];
         $_SESSION['admin_age'] = $row['age'];
         $_SESSION['admin_bday'] = $row['bday'];
         $_SESSION['admin_phone'] = $row['phone'];
         $_SESSION['admin_address'] = $row['address'];
         $_SESSION['admin_image'] = $row['image'];
         $insert = "SELECT * from user_data";
        $insert  = "INSERT INTO login (username, datetime) VALUES ('$username', NOW())";
        mysqli_query($conn, $insert) or die(mysqli_error($conn));
         header('location:UI_admin.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['username'];
         $_SESSION['user_email'] = $row['email'];
         $_SESSION['user_age'] = $row['age'];
         $_SESSION['user_bday'] = $row['bday'];
         $_SESSION['user_phone'] = $row['phone'];
         $_SESSION['user_address'] = $row['address'];
         $insert = "SELECT * from user_data";
        $insert  = "INSERT INTO login (username, datetime) VALUES ('$username', NOW())";
        mysqli_query($conn, $insert) or die(mysqli_error($conn));
         header('location:UI_user.php');

      }
     
   }else{
      $error[] = 'Incorrect username or password!';
   }

};
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Login Form </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="wrapper fadeInDown">
            <div id="formContent">

                <h2 class="active"> Sign In </h2>

                <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

                <form method="POST" action="#">
                    <div class="form_input">
                        <input type="text" name="username" required placeholder="Username" value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>"/>
                    </div>

                    <div class="form_input">
                        <input type="password" name="password" required placeholder="Password" />
                    </div>
                    <input type="submit" name="submit" value="LOG IN" class="btn-login" />
                </form>

                <div id="formFooter">
                    <a class="underlineHover" href="register.php"> Sign up</a>
                </div>


            </div>

</body>

</html>