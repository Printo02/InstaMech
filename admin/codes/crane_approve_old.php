
<?php
session_start();
require_once('../../Connectionclass.php');
$obj = new Connectionclass();
$uname=$_SESSION['username'];
  $id=$_GET['id'];
$qry="update login set status='active' where username='$uname'";
$obj->manipulation($qry);
$qrys="update registration set status='active' where reg_id='$id'";
$obj->manipulation($qrys);
echo $obj->alert("update successfully","../crane_list.php");
?>

