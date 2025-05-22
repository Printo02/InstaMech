
<?php
session_start();
require_once('../../Connectionclass.php');
$obj = new Connectionclass();

	$response=$_POST['desc'];
	
	$msgid=$_POST['msgid'];
	$qrys="update tbl_msg set response='$response' where msgid='$msgid'";
	$res=$obj->Manipulation($qrys);


	var_dump($res);
	
	if($res['status']='true')
	{
		echo $obj->alert("Successfully Updated","../feedback.php");

	}
	else
	{
		echo $obj->alert("Something went wrong","../feedback.php");

	}

	

?>


