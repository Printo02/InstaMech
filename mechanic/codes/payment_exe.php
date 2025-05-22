<?php
session_start();
require_once('../../connectionclass.php');
$obj=new connectionclass();
$cardno=$_POST['cardno'];
$expmonth=$_POST['expmonth'];
$expyear=$_POST['expyear'];
$cvv=$_POST['cvv'];
$amount=$_POST['amount'];
$from_user=$_SESSION['username'];
$pdate=date('Y-m-d');



$qry="Select * from bank where cardno='$cardno' and cvvno='$cvv' and expirmonth='$expmonth' and expiryear='$expyear'";
$exe=$obj->GetSingleRow($qry);
if($exe!=null)
{
    
        $camount=$exe['amount'];
        $bank_id=$exe['bank_id'];
        if($camount>=$amount)
        {
            $newamt=$camount-$amount;
           $sql1="update bank set amount='$newamt' where bank_id='$bank_id'";
          $res1=$obj->Manipulation($sql1);
           

              
$sqlqry="update registration set paystatus='active' where email='$from_user'";
        $result=$obj->Manipulation($sqlqry);   
         echo $obj->alert("Payment Successfull","../index.php");
             }   
                else
                {
                    
    echo $obj->alert("Insufficient Balance ","../payment.php");
                }
            
            
       
    }
    
    else
    {
        
               echo $obj->alert("Card doe not exist","../payment.php");
        }
   

  
