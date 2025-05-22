<?php
session_start();
require_once('../../Connectionclass.php');
$obj = new Connectionclass();
$username= $_SESSION['username']; 
$mid=$_POST['mechid'];
$sql="select * from registration where reg_id='$mid'";
$exe=$obj->GetSingleRow($sql);
//var_dump($exe);
 $toemail=$exe['email'];
$fromemail=$_SESSION['username'];
$s_date=$_POST['sdate'];
$des=$_POST['desc'];
$postdate=date('Y-m-d');
$qry="insert into  servicerequest(from_email,to_email,s_date,description,date,status)values('$fromemail','$toemail','$s_date','$des','$postdate','inactive')";
$res=$obj->Manipulation($qry);



$query="select * from registration where email='$username'";
 $exe=$obj->GetSingleRow($query);


	$getmail="select  from servicerequest where to_email='$toemail'";
      $email_id=$obj->GetSingleData($getmail);


//var_dump($res);
if($res['status']='true')
{
	echo $obj->alert("successfully inserted","../dashboard.php");

}
else
{
	echo $obj->alert("Something went wrong","../dashboard.php");

}
?>