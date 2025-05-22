<?php
require_once("header.php");
require_once("sidebar.php");
require_once('../Connectionclass.php');
$obj = new Connectionclass();
//session_start();
$uname=$_SESSION['username'];


//var_dump($exe);
?>
           
           <div class="main-panel">
<div class="content">
                <div class="outer-w3-agile mt-3">
                <div class="card">

                <div class="card-header">
                      
                            PAYMENT 
</div>
                        <div class="card-body">
                            <div class="position-center">
                                <form role="form" method="post" action="codes/payment_exe.php" >
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Card Number</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="cardno" required="" pattern="\d*" title="Please enter numbers only" maxlength="16" minlength="16">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Expire Month</label>
                                    <select size="1" name="expmonth" class="form-control">
                                        <option  value="January">Select</option>
<option value="January">January</option>
<option value="February">February</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
</select>
                                    
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Expire Year</label>
                                   <?php
//get the current year
$Startyear=date('Y');
$endYear=$Startyear+10;


$yearArray = range($Startyear,$endYear);
?>

<select name="expyear" class="form-control">
    <option value="">Select Year</option>
    <?php
    foreach ($yearArray as $year) {

        $selected = ($year == $Startyear) ? '' : '';
        echo '<option '.$selected.' value="'.$year.'">'.$year.'</option>';
    }
    ?>
</select>
                                 
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Cvv</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="cvv" required="" pattern="\d*" title="Please enter numbers only" maxlength="3" minlength="3">
                                 </div>   
                            
                                    <div class="form-group">
                                    <label for="exampleInputPassword1">Amount</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="amount" value="<?php echo 100 ?>" readonly >
                                </div>
                                <div>
                            <button type="submit" class="btn btn-info">Pay Now</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
        </div>



<?php
require_once('footer.php');
?>







