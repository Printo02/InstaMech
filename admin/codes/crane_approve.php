
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
$res=$obj->manipulation($qry);
/*$qrys="update registration set status='active' where reg_id='$id'";
$obj->manipulation($qrys);
echo $obj->alert("update successfully","../crane_list.php?type=approved");*/
if($res['status']='true')
{
	echo $obj->alert("Successfully Updated","../crane_list.php?type=approved");

}
else
{
	echo $obj->alert("Something went wrong","../crane_list.php?type=approved");

}
?>

