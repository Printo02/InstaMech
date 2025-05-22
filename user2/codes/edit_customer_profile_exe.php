<?php
session_start();
require_once('../../Connectionclass.php');
$obj = new Connectionclass();

$action=$_REQUEST['action'];
if($action=='edit')
{

	$id=$_GET['id'];
	$name=$_POST['name'];
	$Phoneno=$_POST['phone_no'];
	$Address=$_POST['address'];
	$State=$_POST['state'];
	$District=$_POST['district'];
	$City=$_POST['city'];
	$Email=$_POST['email'];
	$uname=$_SESSION['username'];
	$qry="update registration set name='$name',phone='$Phoneno',address='$Address', state='$State',district='$District',city='$City',email='$Email' where reg_id='$id'";
	$exe=$obj->Manipulation($qry);
	if($res['status']='true')
	{
		echo $obj->alert("Successfully Updated","../profile_view.php");

	}
	else
	{
		echo $obj->alert("Something went wrong","../profile_view.php");

	}
}
elseif ($action=='changeimage') 
{
	$rid=$_GET['id'];
	
    $imgpath="../../resources/users/";
	$img_path=str_replace("\\","/",$imgpath);
	$imagename=$_FILES['images']['name'];
	$ww=explode(".",$imagename);
	$extension=end($ww);
	$imgname=time().".".$extension;
	move_uploaded_file($_FILES['images']['tmp_name'],$img_path.$imgname); 

	$sql="select * from registration where reg_id='$rid'";
	$res=$obj->GetSingleRow($sql);
	$oldimage=$res['picture'];
	$pah='../../resources/users/';
    $str = str_replace('\\', '/', $pah);
    $pathn=$str.$oldimage;
    if(is_file($pathn))
    unlink($pathn);

	$qry="update registration set picture='$imgname' where reg_id='$rid'";
	$exe=$obj->Manipulation($qry);
	//var_dump($exe);
	if($exe['status']=="true")
	{
		
		$obj->alert("Successfully Updated","../profile_view.php");
	}
	else
 	{
 		$obj->alert("Something went wrong","../profile_view.php");

	}
}


/*$id=$_GET['id'];
$name=$_POST['name'];
$Phoneno=$_POST['phone_no'];
$Address=$_POST['address'];
$State=$_POST['state'];
$District=$_POST['district'];
$City=$_POST['city'];
$Email=$_POST['email'];
$uname=$_SESSION['username'];
//$Photo=$_FILES['photo']['name'];
//move_uploaded_file($_FILES['photo']['tmp_name'],"../resources/users/".$Photo);


$qry="update registration set name='$name',phone='$Phoneno',address='$Address', state='$State',district='$District',city='$City',email='$Email' where reg_id='$id'";
$exe=$obj->Manipulation($qry);
//var_dump($exe) ;                  
 $qry1="update login  set username='$Email' where username='$uname'";
 $exe=$obj->Manipulation($qry1);
 //var_dump($exe);
 header("location:../dashboard.php");*/
?>