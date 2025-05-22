
<?php
session_start();
require_once('../../Connectionclass.php');
$obj = new Connectionclass();
$uname=$_SESSION['username'];
$action=$_REQUEST['action'];
if($action=='approve')
{
	$id=$_GET['id'];
	$sql="select * from registration where reg_id='$id'";
	$exe=$obj->GetSingleRow($sql);
	$uname=$exe['email'];
	$qrys="update login set status='active' where username='$uname'";
	$obj->Manipulation($qrys);
	
	if($res['status']='true')
	{
		echo $obj->alert("Successfully Updated","../list_customer.php?type=approved");

	}
	else
	{
		echo $obj->alert("Something went wrong","../list_customer.php?type=approved");

	}
}
elseif ($action=='reject')
{

	$id=$_GET['id'];
	$sql="select * from registration where reg_id='$id'";
	$exe=$obj->GetSingleRow($sql);
	$uname=$exe['email'];
	$qry="update login set status='rejected' where username='$uname'";
	$res=$obj->manipulation($qry);
	
	
	if($res['status']='true')
	{
		echo $obj->alert("Update successfully","../list_customer.php?type=rejected");
		

	}
	else
	{
		echo $obj->alert("Something went wrong","../list_customer.php?type=rejected");
		
	}
}
elseif ($action=='delete') 
{
	$id=$_GET['id'];
	$sql="select * from registration where reg_id='$id'";
	$exe=$obj->GetSingleRow($sql);
	$uname=$exe['email'];
	$qry="delete from login where username='$uname'";
	$obj->manipulation($qry);
	$qrys="delete from registration where reg_id='$id'";
	$res=$obj->manipulation($qrys);
	
	if($res['status']='true')
	{
		echo $obj->alert("Deleted successfully","../list_customer.php?type=rejected");

	}
	else
	{
		echo $obj->alert("Something went wrong","../list_customer.php?type=rejected");
		
	}

}

?>


