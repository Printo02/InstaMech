
<?php

require_once('../../Connectionclass.php');
$obj = new Connectionclass();

$id=$_GET['id'];
$qry="delete from vehiclecompany where comp_id='$id'";
$exe=$obj->Manipulation($qry);
//var_dump($exe);

echo $obj->alert("Delete successfully","../vechicle_company.php");
?>

