
<?php

require_once('../../Connectionclass.php');
$obj = new Connectionclass();
$cid=$_GET['id'];
$cat_name=$_POST['catagory'];
$qry="update vehiclecategory set cat_name='$cat_name' where cat_id='$cid'";
$exe=$obj->Manipulation($qry);
//var_dump($exe);

echo $obj->alert("updated successfully","../vechicle_cat.php");
?>

