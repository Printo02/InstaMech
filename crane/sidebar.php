
<?php
//session_start();

require_once('../Connectionclass.php');
$obj = new Connectionclass();

$email=$_SESSION['username'];
$qry="select * from registration where email='$email'";
$exe=$obj->GetSingleRow($qry);
$id=$exe['reg_id'];


// var_dump($exe);
//var_dump($res);

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome CSS (for icons) -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <!-- <link href="path/to/your/custom.css" rel="stylesheet">
</head> -->
<!-- <body> --> 
    <div class="sidebar">
        <div class="scrollbar-inner sidebar-wrapper">
            <div class="user">
                <div class="photo">
                    <!-- <img src="assets/img/profile.jpg" alt="Profile Photo"> -->
                </div>
                <div class="info">
                    <a href="#collapseExample" data-toggle="collapse" aria-expanded="true">
                        <span>
                      <?php echo $exe['name']?>
                            <span class="user-level"><?php echo $email ?></span>
                            <br>

                            <a class="dropdown-item" href="../logout.php"><i class="fa fa-power-off"></i> Logout</a>
                            <br>

                            <a class="dropdown-item" href="change_password.php"><i class="ti-settings"></i>Change Password</a>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse show" id="collapseExample">
                        <!-- <ul class="nav">
                            <li><a href="#profile">My Profile</a></li>
                            <li><a href="#edit">Edit Profile</a></li>
                            <li><a href="#settings">Settings</a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
            <ul class="nav">
                <li class="nav-item active">
                    <a href="index.php">
                        <i class="la la-dashboard"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="profile_view.php" class="nav-link">
                        <i class="la la-keyboard-o"></i>
                        <p>Edit Profile</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="servicerequest.php" class="nav-link">
                        <i class="la la-keyboard-o"></i>
                        <p>Service Request</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#pageSubmenu3" class="nav-link" data-toggle="collapse" aria-expanded="false">
                        <i class="la la-keyboard-o"></i>
                        <p>Service Details</p>
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu3">
                        <li class="nav-item">
                            <a href="service_details.php" class="nav-link">Add</a>
                        </li>
                        <li class="nav-item">
                            <a href="service_list.php" class="nav-link">List</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <!-- jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
