<?php

require_once('../../Connectionclass.php');
$obj = new Connectionclass();

$id=$_GET['id'];


$qry="delete from tbl_msg where msgid='$id'";
$exe=$obj->Manipulation($qry);
// var_dump($exe);
// die();

echo $obj->alert("Delete successfully","../feedback.php");
?>