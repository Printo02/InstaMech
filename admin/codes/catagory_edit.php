<?php

require_once('../../Connectionclass.php');
$obj = new Connectionclass();

  $id=$_GET['cat_id'];
$qry="delete from vehiclecatagory where cat_id='$id'";
$obj->manipulation($qry);
//$qrys="update registration set status='rejected' where reg_id='$id'";
//$obj->manipulation($qrys);
echo $obj->alert("Edit successfully","../vechicle_cat.php");
?>

