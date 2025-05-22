<?php
session_start();
$email_id=$_SESSION['email_id'];
$random=$_SESSION['random'];
$code=$_POST['code'];
$bj="";
require_once("../ConnectionClass.php");
if($random==$code)
{
	header("location:../resetpassword.php");
}
else
{
	
$obj=new connectionclass();
	echo $obj->alert("Invalid OTP","../entercode.php");

}
?>