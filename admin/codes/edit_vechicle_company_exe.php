
<?php

require_once('../../Connectionclass.php');
$obj = new Connectionclass();
$cid=$_GET['id'];
$cat_id=$_POST['catagory'];
$com=$_POST['company'];
$qry="update vehiclecompany set cat_id='$cat_id',comp_name='$com' where comp_id='$cid'";
$exe=$obj->Manipulation($qry);
//var_dump($exe);

echo $obj->alert("updated successfully","../vechicle_company.php");
?>

