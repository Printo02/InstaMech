<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Navigation</title>
    <!-- Bootstrap CSS -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    Font Awesome (for icons) -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head> -->
<!-- <body> --> -->
<div class="sidebar">
    <div class="scrollbar-inner sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <!--<img src="assets/img/profile.jpg" alt="Profile Photo">--->
            </div>
            <div class="info">
                <a href="#collapseExample" data-toggle="collapse" aria-expanded="true">
                    <span>
                        Admin
                        <span class="user-level">Administrator</span>
                        <span class="caret"></span>
                    </span>
                </a>
                <div class="clearfix"></div>
                <div class="collapse show" id="collapseExample">
                    <!-- Uncomment these if needed -->
                    <!-- <ul class="nav">
                        <li><a href="#profile">My Profile</a></li>
                        <li><a href="#edit">Edit Profile</a></li>
                        <li><a href="#settings">Settings</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item">
                <a href="index.php">
                    <i class="la la-dashboard"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="vechicle_cat.php">
                    <i class="la la-table"></i>
                    <p>Category</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="vechicle_company.php">
                    <i class="la la-keyboard-o"></i>
                    <p>Vehicle Company</p>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <i class="la la-keyboard-o"></i>
                    <p>Manage Mechanic</p>
                    <!-- <i class="fas fa-angle-down fa-pull-right"></i> -->
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="mechanic_viewreq.php">View Request</a>
                    <a class="dropdown-item" href="mechanic_list.php?type=approve">Approved Request</a>
                    <a class="dropdown-item" href="mechanic_list.php?type=reject">Rejected Request</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <i class="la la-keyboard-o"></i>
                    <p>Manage Crane</p>
                    <!-- <i class="fas fa-angle-down fa-pull-right"></i> -->
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="crane_viewreq.php">View Request</a>
                    <a class="dropdown-item" href="crane_list.php?type=approve">Approved Request</a>
                    <a class="dropdown-item" href="crane_list.php?type=reject">Rejected Request</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <i class="la la-keyboard-o"></i>
                    <p>Manage Carriage</p>
                    <!-- <i class="fas fa-angle-down fa-pull-right"></i> -->
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="carriage_viewreq.php">View Request</a>
                    <a class="dropdown-item" href="carriage_list.php?type=approve">Approved Request</a>
                    <a class="dropdown-item" href="carriage_list.php?type=reject">Rejected Request</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="#serviceSubmenu" class="nav-link" data-toggle="collapse" aria-expanded="false">
                    <i class="la la-keyboard-o"></i>
                    <p>Services</p>
                    <!-- <i class="fas fa-angle-down fa-pull-right"></i> -->
                </a>
                <ul class="collapse list-unstyled" id="serviceSubmenu">
                    <li><a class="nav-link" href="mechanic_service.php">Mechanic</a></li>
                    <li><a class="nav-link" href="crane_services.php">Crane Providers</a></li>
                    <li><a class="nav-link" href="carriage_service.php">Carriage Providers</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="Report.php">
                    <i class="la la-table"></i>
                    <p>Permium Accounts</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="view_service_request.php" class="nav-link">
                    <i class="la la-keyboard-o"></i>
                    <p>Service Request</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="service_request_payed.php" class="nav-link">
                    <i class="la la-keyboard-o"></i>
                    <p>Service Request Paid</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="feedback.php" class="nav-link">
                    <i class="la la-keyboard-o"></i>
                    <p>View Feedback</p>
                </a>
            </li>
        </ul>
    </div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
