<?php
$conn = mysqli_connect('localhost', 'root', '', 'user_db');
session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:login.php');
}

$username = $_SESSION['user_name']
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> User Interface </title>
    <link rel="stylesheet" href="logs.css">

</head>

<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span> Group 2 </h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="UI_user.php"><span class="las la-igloo"> Dashboard </span></a>
                </li>
                <li>
                    <a href="USER_profile.php"> <span class="las la-users"> Profile </span></a>
                </li>
                <li>
                    <a href="USER_loghistory.php" class="active"> <span class="las la-history"> Login History </span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                Dashboard
            </h2>

            <div class="user-wrapper">
                <img src="profile.png" width="40px" height="40px" alt="#">
                <h4> <?php echo $_SESSION['user_name']; ?> </h4>
                <small> User </small>
            </div>
            <hr>
            <a href="logout.php" class="sub-menu-link">
                <img src="logout.png">
                <p> Logout </p>
            </a>
        </header>

        <main class="admin">
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1> Log History </h1> <br> <span> Accounts </span>
                        <table border="1px" ; style="width:1000px; line-height:50px;">
                            <thead>
                                <tr>
                                    <th> Name </th>
                                    <th> Last Activity </th>

                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $select = "SELECT * FROM login WHERE username='".$username."' ORDER BY id DESC";
                                $result = mysqli_query($conn, $select);
                                if (mysqli_num_rows($result) > 0) {
                                    foreach ($result as $row) {
                                ?>
                                        <tr>
                                            <td style="padding-left: 15px"> <?php echo $row['username']; ?></td>
                                            <td style="padding-left: 15px"><?php echo $row['datetime']; ?></td>
                                        </tr>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td>No Record Available</td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>

                    </div>







                    <div>
                        <span class="las la-users"></span>
                    </div>

                </div>
            </div>
        </main>

    </div>
</body>

</html>