
<?php
session_start();
require_once('../../Connectionclass.php');
$obj = new Connectionclass();
$uname=$_SESSION['username'];
$id=$_GET['id'];
$sql="select * from registration where reg_id='$id'";
$exe=$obj->GetSingleRow($sql);
$uname=$exe['email'];
$qry="update login set status='active' where username='$uname'";
$obj->manipulation($qry);
/*$qrys="update registration set status='active' where reg_id='$id'";
$obj->manipulation($qrys);
echo $obj->alert("update successfully","../mechanic_list.php?type=approve");*/
if($res['status']='true')
{
	echo $obj->alert("Successfully Updated","../mechanic_list.php?type=approve");

}
else
{
	echo $obj->alert("Something went wrong","../mechanic_list.php?type=approve");

}
?>

