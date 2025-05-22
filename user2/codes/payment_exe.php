<?php
session_start();
require_once('../../connectionclass.php');
$obj=new connectionclass();
$cardno=$_POST['cardno'];
$expmonth=$_POST['expmonth'];
$expyear=$_POST['expyear'];
$cvv=$_POST['cvv'];
$amount=$_POST['amount'];
$customer=$_SESSION['username'];
$pdate=date('Y-m-d');
$s_id=$_REQUEST['s_id'];



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
         
          
          $sql3="update bank set amount='$amount' where user_type='admin'";
         $res6=$obj->Manipulation($sql3);

         $sqlqry = "UPDATE servicerequest SET status='payed', amount='$amount' WHERE s_id='$s_id'";

        $result=$obj->Manipulation($sqlqry);   
         echo $obj->alert("Payment Successfull","../dashboard.php");
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
   

  
