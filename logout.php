<?php
session_start();
session_destroy();
$home_url='http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/index.php';
header('location:'.$home_url);
?>