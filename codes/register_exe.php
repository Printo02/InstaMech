<?php
require_once('../Connectionclass.php');
$obj = new Connectionclass();
$name=$_POST['name'];
$Phoneno=$_POST['phone_number'];
$Address=$_POST['address'];
$State=$_POST['state'];
$District=$_POST['district'];
$City=$_POST['city'];
$Email=$_POST['email'];
$Photo=$_FILES['photo']['name'];
move_uploaded_file($_FILES['photo']['tmp_name'],"../resources/users/".$Photo);
$Register_type=$_POST['register_type'];

$status='Inactive';

if($Register_type=='customer')
{
	
$status='active';

}
$Password=$_POST['password'];


$checkusername="select count(*) from login where username='$Email'";
$resultcount=$obj->GetSingleData($checkusername);
if($resultcount>0)
{
 
  echo $obj->alert("Email Already exists","../register.php");  
}

else
{
 $qry1="insert into login(username,password,user_type,status) values('$Email','$Password','$Register_type','$status')";
 $exe=$obj->Manipulation($qry1);
 if($exe['status']=='true')
	{

$qry="insert into registration(name,phone,address,state,district,city,email,picture,reg_type,paystatus) values('$name','$Phoneno' ,'$Address','$State','$District', '$City' ,'$Email','$Photo' ,'$Register_type','Inactive')";
 $exe1=$obj->Manipulation($qry);
if($exe1['status']=='true')
		{
			echo $obj->alert("Registration Successfull","../login.php");
		}

else
		{
			$dqry="delete from login where username='$Email'";
			$exe2=$obj->Manipulation($dqry);
			echo $obj->alert("Something Went Wrong","../register.php");
		}
	}

else   
	{
		echo $obj->alert("Something Went Wrong","../register.php");
	} 
 
}
?>