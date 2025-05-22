<?php
require_once("Connectionclass.php");
$obj = new Connectionclass();
$rid=$GET['id'];
 $name=$_POST['Name'];
  $add=$_POST['address'];
  $em=$_POST['Email'];
  $ph=$_POST['Phone'];
  $state=$_POST['State'];
  $City=$_POST['City'];
  $dist=$_POST['District'];
$qry="update registration set Name='$name',address='$add',Email='$em',Phone='$ph',State='$sate',City='$city',District='$dist'";
$exe=$obj->Manipulation($qry);

		echo $obj->alert("successfully uploaded","../edit_profile.php");
?>