<?php

require_once('../../Connectionclass.php');
$obj = new Connectionclass();

$name=$_POST['Name'];
$Phone=$_POST['Phone'];
$address=$_POST['address'];
$State=$_POST['State'];
$City=$_POST['City'];
$District=$_POST['District'];
$id=$_POST['id'];

$qry="update registration set name='$name',phone='$Phone',address='$address',state='$State',city='$City',district='$District' where reg_id='$id'";
$exe=$obj->Manipulation($qry);


echo $obj->alert("updated successfully","../profile_vie.php");
?>