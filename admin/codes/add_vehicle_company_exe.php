<?php
require_once("../../Connectionclass.php");
$obj = new Connectionclass();
 $cat=$_POST['catagory'];
 $com=$_POST['company'];

 $data="SELECT COUNT(comp_name) AS count FROM vehiclecompany where comp_name='$com'AND cat_id='$cat'";
 $re=$obj->GetSingleData($data);
if($re==0){

$sql="insert into vehiclecompany(cat_id,comp_name)value('$cat','$com')";
$exe=$obj->Manipulation($sql);
//var_dump($exe);
}
else{
	echo $obj->alert("Category Already Exist......","../vechicle_company.php");

}

if($exe['status']=='true'){
		echo $obj->alert("successfully inserted","../vechicle_company.php");
}
else{

    echo $obj->alert("Category Already Exist......","../vechicle_company.php");

}
?>