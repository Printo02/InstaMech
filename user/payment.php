<?php
session_start();
require_once("header.php");
require_once("sidebar.php");
require_once('../Connectionclass.php');
$obj = new Connectionclass();
//session_start();
$email=$_SESSION['username'];
$s_id=$_REQUEST['s_id'];
$s_rate=$_REQUEST['s_rate'];



$getcust="select regid from registration where email='$email'";
$reg_id=$obj->GetSingleData($getcust);




//var_dump($exe);
?>
<div class="main-panel">
<div class="content">
  <div class="outer-w3-agile mt-3">

  <div class="card">
           
    <div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="fresh-vegetables">
		<div class="container">

        <div class="card-header">
			<h3>Pay Now</h3>

            </div>

            <div class="card-body">
			
<form class="form-horizontal" method="post" action="codes/payment_exe.php?s_id=<?php echo $s_id?>">

                        
                        <div class="panel-body">
                            <div class="position-center">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Card Number</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="cardno" required="" pattern="\d*" title="Please enter numbers only" maxlength="16" minlength="16">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputPassword1">Expire Month</label>
                               
                               <input type="text" class="form-control" id="exampleInputPassword1" name="expmonth" required="">
                            </div>   
                                 <div class="form-group">
                          

                                 <label for="exampleInputPassword1">Expire Year</label>
                                 <input type="text" class="form-control" id="exampleInputPassword1" name="expyear" required="">
                      
                                 
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Cvv</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="cvv" required="" pattern="\d*" title="Please enter numbers only" maxlength="3" minlength="3">
                                 </div>   
                            
                                 <div class="form-group">
        <label for="exampleInputPassword1">Amount</label>
        <!-- Replace "9999" with the actual maximum value you want -->
        <input type="number" id="amount" name="amount" placeholder="amount" class="form-control input-md" max="<?php echo $s_rate ?>" required>
    </div>
                                <div>

</div>

<div class="card-footer">
                                    <center>
     <button type="submit" class="btn btn-info">Pay Now</button>
</center>

                            </form>

                            </div>
                            </div>

                        </div>
                    </section>

            </div>
        </div>

</div>

</div>

</div>

<?php

require_once('footer.php');
?>







