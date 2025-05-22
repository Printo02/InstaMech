<?php
session_start();
require_once("connectionclass.php");
$obj=new Connectionclass();

$email=$_POST['email'];
$otp=$_POST['otp'];


$query="select * from forget_password where email_id='$email'";
$responds=$obj->GetSingleRow($query);

$otp2=$responds['random_number'];

if($otp== $otp2)
{
    $url = "resetpassword.php?email=$email";
    
    
        // $mesg=$responds['message'];
        $obj->alert("Please Set New Password",$url);
}

else{
    $url="forgotpassword.php";
    // $mesg=$responds['message'];
    $obj->alert("invalid otp",$url);
}
?>