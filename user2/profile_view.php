<?php
session_start();
require_once("header.php");
require_once("sidebar.php");
require_once('../Connectionclass.php');
$obj = new Connectionclass();

$email=$_SESSION['username'];
$qry="select * from registration where email='$email'";
$exe=$obj->GetSingleRow($qry);
$id=$exe['reg_id'];


// var_dump($exe);
//var_dump($res);

?>

<!-- Forms-3 -->
<div class="main-panel">
<div class="content">
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4"><b>Edit Your Profile</b></h4>
                    <form action="codes/update.php" method="post"  enctype="multipart/form-data">
                        
                        <div class="form-group">
                            <label for="Name">Name</label>
                            <input type="text" class="form-control" id="Name" placeholder="Name" value="<?php echo $exe['name']; ?>" required="" name="Name" >
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" placeholder="Phone" value="<?php echo $exe['phone']; ?>" required="" name="Phone">
                        </div>
                        <div class="form-group">
                            <label for="address">Address </label>
                            <input type="text" class="form-control" id="Address" placeholder="Address" value="<?php echo $exe['address']; ?>" required="" name="address">
                        </div>
                        <div class="form-group">
                            <label for="state">State</label>
                            <input type="text" class="form-control" id="state" placeholder="State" required="" value="<?php echo $exe['state']; ?>" name="State">
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" placeholder="City" required=""  value="<?php echo $exe['city']; ?>" name="City">
                        </div>

                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <div class="form-group">
                            <label for="city">District</label>
                            <input type="text" class="form-control" id="district" placeholder="District" required=""   value="<?php echo $exe['district']; ?>" name="District">
                        </div>
                        
                          <br>  
                        <button type="submit"  class="btn btn-primary">Update</button>
                         <!-- <button type="reset" class="btn btn-primary">Cancel</button> -->
                    </form>
                </div>
                <br>
                <!--// Forms-3 -->

                 <?php
require_once("footer.php");

?>