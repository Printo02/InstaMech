<?php
require_once("connectionclass.php");
$obj=new Connectionclass();
require_once("smtp/otp.php");


$otp=rand(100000,max: 999999);
$reciveremail=$_POST['username'];
$subject="email verification";
$emailbody="your 6 digit otp code is:";

echo smtp_mailer($reciveremail,$subject,$emailbody.$otp);

$query="select * from forget_password where email_id='$reciveremail'";
$r=$obj->GetSingleRow($query);
if($r==null)
	{	
$query="INSERT into forget_password(email_id,random_number)values('$reciveremail','$otp')";
$responds=$obj->Manipulation($query);
if($responds["status"]=="true"){
    $url = "entercode?email=$reciveremail";
    $obj->alert("Sucessfully updated",$url);
}else{
    $url="forgot_pass.php";
    // $mesg=$responds['message'];
    $obj->alert("something went wrong",$url);
}
    }

    else{
        $query="update forget_password set random_number='$otp' where email_id='$reciveremail'";
        $responds2=$obj->Manipulation($query);
        if($responds2["status"]=="true"){
            $url = "entercode.php?email=$reciveremail";
            $obj->alert("Sucessfully updated",$url);
        }else{
            $url="forgot_pass.php";
            // $mesg=$responds['message'];
            $obj->alert("something went wrong",$url);
        }

    }

