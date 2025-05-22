<?php

require_once('../../Connectionclass.php');
$obj = new Connectionclass();

$name=$_POST['Name'];
$Phone=$_POST['Phone'];
$address=$_POST['address'];
$State=$_POST['State'];
$City=$_POST['City'];
$District=$_POST['District'];


$qry="update registration set name='$name',phone='$Phone',address='$address',state='$State',city='$City',district='$District' where reg_type='carriage'";
$exe=$obj->Manipulation($qry);


echo $obj->alert("updated successfully","../index.php");
?>