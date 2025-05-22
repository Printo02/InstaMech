
<?php

require_once('../../Connectionclass.php');
$obj = new Connectionclass();

$id=$_GET['s_id'];
$qry="delete from  servicedetails where service_id='$id'";
$exe=$obj->Manipulation($qry);
//var_dump($exe);

echo $obj->alert("Delete successfully","../service_list.php");
?>

