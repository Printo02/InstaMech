<?php
require_once("../../Connectionclass.php");
$obj = new Connectionclass();
 $cat=$_POST['catagory'];
 $data="SELECT COUNT(cat_name) AS count FROM vehiclecategory where cat_name='$cat'";
 $re=$obj->GetSingleData($data);
if($re==0){
$sql="insert into vehiclecategory(cat_name)value('$cat')";
$exe=$obj->Manipulation($sql);
//var_dump($exe);
}
else{
	echo $obj->alert("Category Already Exist......","../vechicle_cat.php");

}
if($exe['status']=='true'){
		echo $obj->alert("successfully inserted","../vechicle_cat.php");
}
else{

    echo $obj->alert("Category Already Exist......","../company_category.php");

}
?>