

<?php

require_once('../../Connectionclass.php');
$obj = new Connectionclass();

$id=$_GET['s_id'];


$qry="select * from servicedetails where service_id='$id'";
$image=$obj->GetTable($qry);
foreach($image as $service_image)
{

$filename = "../../resources/mechanic_services/".$service_image['picture'];

if (file_exists($filename))
    {
    	unlink($filename);
//echo $filename;
    }}

$qry="delete from  servicedetails where service_id='$id'";
$exe=$obj->Manipulation($qry);
//var_dump($exe);

echo $obj->alert("Delete successfully","../service_list.php");
?>
