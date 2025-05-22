<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Navigation</title>
    <!-- Bootstrap CSS -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome CSS (for icons) -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"> -->
<!-- </head> -->
<body> --> -->
<div class="sidebar">
    <div class="scrollbar-inner sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item active">
                <a href="index.php">
                    <i class="la la-dashboard"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="profile_view.php">
                    <i class="la la-table"></i>
                    <p>Edit Profile</p>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <i class="la la-keyboard-o"></i>
                    <p>My Service Request</p>
                    <i class="fas fa-angle-down fa-pull-right"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="my_service_request.php">Service Request</a></li>
                    <li><a class="dropdown-item" href="payed_service.php">Payed Service Request</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="search_mechanics.php">
                    <i class="la la-table"></i>
                    <p>Search Mechanic</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="search_service.php">
                    <i class="la la-table"></i>
                    <p>Search Crane or Carriage</p>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="la la-keyboard-o"></i>
                    <p>Feedback</p>
                    <i class="fas fa-angle-down fa-pull-right"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="feedback.php">Send Feedback</a></li>
                    <li><a class="dropdown-item" href="view_feedback.php">View Feedback</a></li>
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
