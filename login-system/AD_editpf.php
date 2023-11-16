<?php
$conn = mysqli_connect('localhost', 'root', '', 'user_db');
session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login.php');
}

if(!isset($_SESSION['admin_email'])){
    header('location:login.php');
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
    <form method="POST" action="AD_profile.php">
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
                        <img src="pfp.png" class=" rounded-circle" alt=" # "> <br><br>
                        <label class="form-label"> <?php echo $_SESSION['admin_name']; ?> </label><br> <br>
                    </div>
                </div>
            </div>

            <div class="card-single-pf">
                <div class="col-md-8 mt-1">
                    <div class="card mb-3 content">
                        <h1 class="m-3 pt-3"> Profile </h1><br>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-3">
                                    <h5> Username </h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    <input type="text" name="update_name" placeholder="Enter your username" id="username" value="<?php echo $_SESSION['admin_name']; ?>">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <h5> Age </h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    <input type="text" name="age" placeholder="Enter your age" id="age" value="<?php echo $_SESSION['admin_age']; ?>">
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-3">
                                    <h5> Birthday </h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    <input type="text" name="bday" placeholder="Enter your birthday" id="birthday" value="<?php echo $_SESSION['admin_bday']; ?>">
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-3">
                                    <h5> Email (cannot be changed)</h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    <input type="text" name="update_email" placeholder="Enter your email" id="email" value="<?php echo $_SESSION['admin_email']; ?>" readonly>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-3">
                                    <h5> Phone </h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    <input type="text" name="phone" placeholder="Enter your contact number"
                                        id="phonenumber" value="<?php echo $_SESSION['admin_phone']; ?>">
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-3">
                                    <h5> Address </h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    <input type="text" name="address" placeholder="Enter your address" id="address" value="<?php echo $_SESSION['admin_address']; ?>">
                                </div>
                            </div>

                         
                                <input type="submit" name="update_profile" value="UPDATE" class="btn-login" />
                           


                        </div>
                    </div>
                </div>
            </div>
        </main>


    </div>
</body>

</html>