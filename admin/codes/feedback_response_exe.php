<?php
require_once('../../Connectionclass.php');
$obj = new Connectionclass();
 $msgid=$_GET['mid'];
 $msg=$_POST['res'];
$qry="update feedback set response='$msg', status='responsed' where msgid='$msgid'";
$res=$obj->manipulation($qry);
//var_dump($res);
if($res['status']='true')
{
	echo $obj->alert("Success","../view_feedback.php");

}
else
{
	echo $obj->alert("Something went wrong","../view_feedback.php");

}
?>

