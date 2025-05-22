<?php
session_start();
require_once('../Connectionclass.php');
$obj = new Connectionclass();
$username=$_POST['uname'];
$password=$_POST['pwd'];
$qry="select * from login where username='$username' and password='$password' and status='active'";
$exe=$obj->GetSingleRow($qry);
//var_dump($exe);
//die;
$_SESSION['username']=$exe['username'];
if($exe!=NULL)
{
	if($exe['user_type']=='admin')
	{
		header("location:../Admin/Index.php");
	}
	elseif($exe['user_type']=='mechanic')
	{
		header("location:../Mechanic/Index.php");
	}
	elseif($exe['user_type']=='crane')
	{
		header("location:../Crane/Index.php");
	}
     elseif($exe['user_type']=='carriage')
	{
		header("location:../Carriage/index.php");
	}
    elseif($exe['user_type']=='customer')
	{
		header("location:../user/index.php");
	}


}
else
{
	echo $obj->alert("invalid user name or password","../login.php");
}
?>