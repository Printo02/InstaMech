<?php
require_once("header.php");
require_once('../Connectionclass.php');
$obj = new Connectionclass();
$sid=$_GET['s_id'];
 $qry="select * from servicedetails where service_id='$sid'";
$exe=$obj->GetSingleRow($qry);
?>

<!-- Forms-3 -->
<div class="main-panel">
    <div class="content">
        <div class="row">
            <!-- Add Company Card -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Service Detials</h4>
                    <form action="codes/edit_service_exe.php?sid=<?php echo $sid;  ?>" method="post">
                        
                        <div class="form-group">
                            <label for="Name">Service Name</label>
                            <input type="text" class="form-control" id="Name" placeholder="Name" required="" name="Name" pattern="[a-zA-Z\s]+" title="alphabets only & space allowed" value="<?php echo $exe['s_name'];?>">
                        </div>
                        <div class="form-group">
                            <label for="Description">Description</label>
                            <textarea class="form-control" name="desc"><?php echo $exe['s_description'];?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="Rate">Rate</label>
                            <input type="text" class="form-control" id="Rate" placeholder="Rate" required="" pattern="\d*" title="Numbers Only" name="Rate" value="<?php echo $exe['s_rate'];?>">
                        </div>
                        
                        <!--<div class="form-group">
                            <label for="Picture">Picture</label>
                            <input type="file" class="form-control" id="Picture" placeholder="Picture"  name="Picture">
                        </div>-->
                        <?php
                        $sql="select * from  vehiclecompany";
                        $res=$obj->GetTable($sql);
                        $compid=$exe['comp_id'];
                        $qrys="select * from  vehiclecompany where comp_id='$compid'";
                        $data=$obj->GetSingleRow($qrys);

                        ?>
                        
                         <div class="form-group">
                            <label for="Name">Company</label>
                            <select class="form-control" id="Company" name="Company">
                                <option value="<?php echo $data['comp_id']; ?>"><?php echo $data['comp_name']; ?></option>
                                
                                       <?php
                                                       foreach($res as $c)
                            {
                            

                                ?>

                                <option value="<?php echo $c['comp_id']; ?>"><?php echo $c['comp_name']; ?></option>
                                 <?php

                            }
                            ?> 
                                      </select>
                        </div>
                        
                        <input type="hidden" name="id" value="<?php echo $sid ?>">

                        <button type="submit" class="btn btn-primary">save</button>
                         <button type="reset" class="btn btn-primary">Cancel</button>
                    </form>
                </div>
                <!--// Forms-3 -->
                 <?php
require_once("footer.php");

?>