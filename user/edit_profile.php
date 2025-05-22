<?php
session_start();
require_once('header.php');
require_once('sidebar.php');
require_once('../Connectionclass.php');
$obj = new Connectionclass();
$username= $_SESSION['username']; 
$qry="select * from registration where email='$username'";
$exe=$obj->GetSingleRow($qry);
?>
 <!-- Forms-3 -->
 <div class="main-panel">
 <div class="content">
                <div class="outer-w3-agile mt-3">
                <div class="card">

<div class="card-header">
                    <h4 class="tittle-w3-agileits mb-4">EDIT PROFILE</h4></div>

                
<div class="card-body">
                    <form action="codes/edit_customer_profile_exe.php?action=edit&id=<?php echo $exe['reg_id']; ?>" method="post">
                        <div class="form-row">
                            
                            <div class="form-group col-md-6">
                                <label for="inputName">Name</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Name" required=""  pattern="[a-zA-Z ]+" title="Characters only" name='name' value="<?php echo $exe['name']; ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Invalid Email Format" name='email' value="<?php echo $exe['email']; ?>" readonly >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Address" required="" name='address' value="<?php echo $exe['address']; ?>">
                        </div>
                    
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputdistrict">District</label>
                                <input type="text" class="form-control" id="inputdistrict" required="" name='district'  pattern="[a-zA-Z ]+" title="Characters only" value="<?php echo $exe['district']; ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputcity">City</label>
                                <input type="text" class="form-control" id="inputCity" required="" name='city'  pattern="[a-zA-Z ]+" title="Characters only" value="<?php echo $exe['city']; ?>">
                            </div>
                            <!--<div class="form-group col-md-2">
                                <label for="inputZip">Zip</label>
                                <input type="text" class="form-control" id="inputZip" required="">
                            </div>-->
                        </div>
                         <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputstate">State</label>
                                <input type="text" class="form-control" id="inputstate" required="" name='state'  pattern="[a-zA-Z ]+" title="Characters only" value="<?php echo $exe['state']; ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPhone_no">Phone_number</label>
                                <input type="text" class="form-control" id="inputPhone_no" required=""  pattern="[9876][0-9]{9}" title="Enter a valid mobile number" maxlength="10" minlength="10" name='phone_no' value="<?php echo $exe['phone']; ?>">
                            </div>
                            <!--<div class="form-group col-md-2">
                                <label for="inputZip">Zip</label>
                                <input type="text" class="form-control" id="inputZip" required="">
                            </div>-->
                        </div>
                       <!-- <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Check me out
                                </label>
                            </div>
                        </div>-->
</div>
<div class="card-footer">
                        <button type="submit" class="btn btn-success">Update</button>
</div>
                    </form>
</div>
                </div>
                 <?php
                 require_once('footer.php');
?>