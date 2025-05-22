
<?php
session_start();
require_once('../../Connectionclass.php');
$obj = new Connectionclass();
$uname=$_SESSION['username'];
$action=$_REQUEST['action'];
if($action=='reject')
{

	$id=$_GET['id'];
	$sql="select * from registration where reg_id='$id'";
	$exe=$obj->GetSingleRow($sql);
	$uname=$exe['email'];
	$qry="update login set status='rejected' where username='$uname'";
	$res=$obj->manipulation($qry);
	/*$qrys="update registration set status='rejected' where reg_id='$id'";
	$obj->manipulation($qrys);
	echo $obj->alert("update successfully","../crane_list.php?type=rejected");*/
	if($res['status']='true')
	{
		echo $obj->alert("Successfully Updated","../crane_list.php?type=rejected");

	}
	else
	{
		echo $obj->alert("Something went wrong","../crane_list.php?type=rejected");

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
	//echo $obj->alert("Deleted successfully","../crane_list.php?type=rejected");
	if($res['status']='true')
	{
		echo $obj->alert("Successfully Deleted","../crane_list.php?type=rejected");

	}
	else
	{
		echo $obj->alert("Something went wrong","../crane_list.php?type=rejected");

	}

}


?>

