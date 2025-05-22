<?php
session_start();
require_once("../../connectionclass.php");
$obj=new ConnectionClass();
$email=$_SESSION['username']; 
 $currentpassword=$_POST["currentpass"];
 $newpassword=$_POST["newpass"];
 $confirmpassword=$_POST["conpass"]; 
 $qry="select password from login where username='$email'"; 
 $password=$obj->GetSingleData($qry);
 if($password==$currentpassword)
 {
 	if($newpassword==$confirmpassword)
 	{
		 $qry="update login set password='$newpassword' where username='$email'";
		 $result=$obj->Manipulation($qry);
		 if($result['status']=="true")
		 {
			 echo $obj->alert("successfully updated","../dashboard.php");
		 }
		 else
		 {
			 echo $obj->alert("Failed ,try again","../change_password.php");		 
		 }
	}
	else
	{
		echo $obj->alert("Newpassword and Confirm Password are does not match ,try again","../change_password.php");
	}
 }
 else
 {
 	echo $obj->alert("Check Current Password","../change_password.php");
 }
 ?>