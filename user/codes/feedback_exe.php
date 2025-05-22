<?php
session_start();
require_once('../../Connectionclass.php');
$obj = new Connectionclass();
$send_from= $_SESSION['username']; 
$send_to= 'admin@gmail.com'; 
$type=$_POST['type'];
$description=$_POST['description'];
$status='active';
 $pdate=date('Y-m-d');
  $qry="insert into tbl_msg(send_from,send_to,date,description,type,status) values('$send_from','$send_to','$pdate','$description','$type','$status')";
$exe=$obj->Manipulation($qry);


if ($exe['status']=='true')
{
	echo $obj->alert("Send successfully","../index.php");
}
else
{
	echo $obj->alert("somthing went wrong","../index.php");
}
?>