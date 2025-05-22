<?php

require_once('../../Connectionclass.php');
$obj = new Connectionclass();

$name=$_POST['Name'];
$description=$_POST['desc'];
$rate=$_POST['Rate'];
$company=$_POST['Company'];

$id=$_POST['id'];

 $qry="update servicedetails set s_name='$name',s_description='$description',s_rate='$rate',comp_id='$company' where service_id='$id'";
$exe=$obj->Manipulation($qry);

echo $obj->alert("updated successfully","../service_list.php");
?>