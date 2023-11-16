<?php
$conn = mysqli_connect('localhost', 'root', '', 'user_db');
session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login.php');
}

if(!isset($_SESSION['admin_email'])){
    header('location:login.php');
 }

 if (isset($_POST['update_profile'])) {
	
	$username = $_POST['update_name'];
	$age = $_POST['age'];
	$bday = $_POST['bday'];
	$email = $_POST['update_email'];
	$phoneNumber = $_POST['phone'];
	$address = $_POST['address'];

    $u = "SELECT username FROM user_data WHERE username='$username'";
 $uu = mysqli_query($conn, $u);

 $error = array();

 if (mysqli_num_rows($uu) > 0) {
     $error['u'] = "Username already exists!";
     $sql = "UPDATE user_data SET age = '".$age."', bday = '".$bday."', phone = '".$phoneNumber."',
    address = '".$address."' WHERE email='".$email."'";
    mysqli_query($conn, $sql);
    $_SESSION['admin_email'] = $email;
      $_SESSION['admin_age'] = $age;
      $_SESSION['admin_bday'] = $bday;
      $_SESSION['admin_phone'] = $phoneNumber;
      $_SESSION['admin_address'] = $address;
 }


	if (count($error) == 0) {
    $sql = "UPDATE user_data SET username='".$username."', age = '".$age."', bday = '".$bday."', phone = '".$phoneNumber."',
    address = '".$address."' WHERE email='".$email."'";
    mysqli_query($conn, $sql);
      $_SESSION['admin_name'] = $username;
      $_SESSION['admin_email'] = $email;
      $_SESSION['admin_age'] = $age;
      $_SESSION['admin_bday'] = $bday;
      $_SESSION['admin_phone'] = $phoneNumber;
      $_SESSION['admin_address'] = $address;
	}
     else {
	  $conn->error;
	}
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Interface </title>
    <link rel="stylesheet" href="profile.css">

</head>

<body>

    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span> Group 2 </h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="UI_admin.php"><span class="las la-igloo"> Dashboard </span></a>
                </li>
                <li>
                    <a href="AD_profile.php" class="active"> <span class="las la-users"> Profile </span></a>
                </li>
                <li>
                    <a href="AD_loghistory.php"> <span class="las la-history"> Login History </span></a>
                </li>
            </ul>
        </div>
    </div>

    <form method="POST" action="#">
    <div class="main-content">
        
        <header>
            <h2>
                Dashboard
            </h2>

            <div class="user-wrapper">
                <img src="profile.png" width="40px" height="40px" alt="#">
                <h4> <?php echo $_SESSION['admin_name']; ?> </h4>
                <small> Admin </small>
            </div>
            <hr>
            <a href="logout.php" class="sub-menu-link">
                <img src="logout.png">
                <p> Logout </p>
            </a>
        </header>

        <main class="adminpf">
            <div class="single-pf">
                <div>
                    <div class="pf">
                        <img src="pfp.png" class="rounded-circle" alt=" # "> <br><br>
                        <label class="form-label"> <?php echo $_SESSION['admin_name']; ?> </label><br>
                        <small> Admin </small>
                    </div>
                </div>
            </div>

            <div class="card-single-pf">
                <div class="col-md-8 mt-1">
                    <div class="card mb-3 content">
                        <h1 class="m-3 pt-3"> Profile </h1><br>

                        <?php
                        if (isset($error['u'])) {
                            echo '<span class="error-msg">' . $error['u'] . '</span>';
                        };
                        ?>
                        <div class="card-body">
                            
      
                            <div class="row">
                                <div class="col-md-3">
                                    
                                    <h5> Username </h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                <input type="text" value="<?php echo $_SESSION['admin_name']; ?>" readonly>
                                </div>
                            </div>
                            

                            <div class="row">
                                <div class="col-md-3">
                                    <h5> Age </h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                <input type="text" value="<?php echo $_SESSION['admin_age']; ?>" readonly>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-3">
                                    <h5> Birthday </h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                <input type="text" value="<?php echo $_SESSION['admin_bday']; ?>" readonly>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-3">
                                    <h5> Email </h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                <input type="text" value="<?php echo $_SESSION['admin_email']; ?>" readonly>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-3">
                                    <h5> Phone </h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                <input type="text" value="<?php echo $_SESSION['admin_phone']; ?>" readonly>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <h5> Address </h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                <input type="text" value="<?php echo $_SESSION['admin_address']; ?>" readonly>
                                </div> <br>
                            </div>

                            <a href="AD_editpf.php" class="editpfp">
                                <img src="edit.png">
                                <p> Edit profile </p>
                            </a>


                        </div>
                    </div>
                </div>
            </div>
        </main>


    </div>
</body>

</html>