<?php
session_start();
require_once('../../Connectionclass.php');
$obj = new Connectionclass();

$email=$_SESSION['username'];
$type=$_POST['type'];
$description=$_POST['desc'];
$current_date= date("Y-m-d");

$qry="select * from login where user_type='admin'";

$exe=$obj->GetSingleRow($qry);

$admin_email=$exe['username'];

$qry="insert into tbl_msg(send_from,send_to,date,description,type) values('$email','$admin_email','$current_date','$description','$type')";



$exe=$obj->Manipulation($qry);


echo $obj->alert("inserted  successfully","../feedback.php");
?>