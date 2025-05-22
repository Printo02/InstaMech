
<?php

require_once('../../Connectionclass.php');
$obj = new Connectionclass();

$id=$_GET['id'];
$qry="delete from vehiclecategory where cat_id='$id'";
$exe=$obj->Manipulation($qry);
//var_dump($exe);

echo $obj->alert("Delete successfully","../vechicle_cat.php");
?>

