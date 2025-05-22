<?php
session_start();
require_once("../../Connectionclass.php");
$obj = new Connectionclass();
echo $email=$_SESSION['username'];
 /*$name=$_POST['Name'];
 //$des=$_POST['dese'];
  $Rate=$_POST['Rate'];
   $Pic=$_POST['Picture'];
   $com =$_POST['Company'];
    $sql="insert into servicedetails(s_name,s_description,s_rate,email,picture,comp_id)values('$name','$des','$Rate','$email','$Pic','$com')";
    $exe=$obj->Manipulation($sql);*/
    //echo $obj->alert("successfully uploaded","../service_details.php");
?>