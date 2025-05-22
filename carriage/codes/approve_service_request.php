
<?php
require_once('../../Connectionclass.php');
$obj = new Connectionclass();
$id=$_GET['s_id'];
$qry="update  servicerequest set status='active' where s_id='$id'";
$exe=$obj->manipulation($qry);
if($exe['status']=='true')
{
	echo $obj->alert("Request Approved","../view_user_req.php");

}
else
{
	echo $obj->alert("Something Went Wrong","../view_user_req.php");

}
?>

