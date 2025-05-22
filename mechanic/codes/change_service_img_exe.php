<?php

session_start();
require_once("../../Connectionclass.php");
$obj = new Connectionclass();  
  $photo=$_FILES['photo']['name'];
  $filename =time().$photo;
  $service_id=$_POST['service_id'];

//move_uploaded_file($_FILES['photo']['tmp_name'],"../resources/mechanic_services/".$Photo);
move_uploaded_file($_FILES['photo']["tmp_name"], "../../resources/mechanic_services/".$filename);
   
    $sql="update servicedetails set picture='$filename' where service_id=$service_id";
  $exe=$obj->Manipulation($sql);


    if($result['status']='true')
	{
		 echo $obj->alert("Service Image Updated","../service_list.php");
	}
	else
	{
		 echo $obj->alert("Something Went Wrong","../service_list.php");
	}
    
?>