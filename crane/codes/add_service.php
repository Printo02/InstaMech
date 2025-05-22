<?php

session_start();
require_once("../../Connectionclass.php");
$obj = new Connectionclass();
$email=$_SESSION['username'];
 $name=$_POST['Name'];
 $des=$_POST['dese'];
  $Rate=$_POST['Rate'];
  $Photo=$_FILES['photo']['name'];
//move_uploaded_file($_FILES['photo']['tmp_name'],"../resources/mechanic_services/".$Photo);
move_uploaded_file($_FILES['photo']["tmp_name"], "../../resources/mechanic_services/".$Photo);
   $com =$_POST['Company'];
    $sql="insert into servicedetails(s_name,s_description,s_rate,email,comp_id,picture)values('$name','$des','$Rate','$email','$com','$Photo')";
  $exe=$obj->Manipulation($sql);


    if($result['status']='true')
	{
		echo $obj->alert("Service Added","../service_list.php");
	}
	else
	{
		echo $obj->alert("Something Went Wrong","../service_list.php");
	}
    
?>