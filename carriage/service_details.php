<?php
require_once("header.php");
require_once("sidebar.php");
require_once('../Connectionclass.php');
$obj = new Connectionclass();
$qry="select * from  vehiclecompany";
$exe=$obj->GetTable($qry);

//var_dump($res);
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
                    <form action="codes/add_service.php" method="post"  enctype="multipart/form-data">
                        
                        <div class="form-group">
                            <label for="Name">Service Name</label>
                            <input type="text" class="form-control" id="Name" placeholder="Name" required="" name="Name" pattern="[a-zA-Z\s]+" title="alphabets only & space allowed">
                        </div>
                        <div class="form-group">
                            <label for="Description">Description</label>
                            <textarea class="form-control" name="dese" ></textarea>                        
                          </div>


                        <div class="form-group">
                            <label for="Rate">Rate</label>
                            <input type="text" class="form-control" id="Rate" placeholder="Rate" required="" name="Rate">
                        </div>
                        
                       
                        


                          <div class="form-group">
                            <label for="Name">Company</label>
                            <select  class="form-control" id="Company" name="Company" pattern="[a-zA-Z\s]+" title="alphabets only & space allowed">
                              <option value="">--select--</option>
                               <?php
                              $sql="select * from vehiclecategory";
                              $exe=$obj->GetTable($sql);

                              foreach($exe as $cat)
                              {
                                 $catid=$cat['cat_id'];
                                ?>

                            <optgroup label="<?php echo $cat['cat_name'];?>">

                               <?php
                              $qry="select * from vehiclecompany where cat_id='$catid'";
                              $res=$obj->GetTable($qry);

                              foreach($res as $com)
                              {
                                ?>
                              <option value="<?php echo $com['comp_id'];?>"><?php echo $com['comp_name'];?></option>
                                <?php
                          }
                          ?>
                            </optgroup>
                            <?php
                          }
                          ?>
                          </select>
                        </div>


                         
               
                         <div class="form-group">

                 <!-- <label for="photo">Image</label>
              <input type="file" name="photo">
            </div> -->
            <br>
            <br>
                        
                        <button type="submit" class="btn btn-primary">Update</button>
                         <button type="reset" class="btn btn-primary">Cancel</button>
                    </form>
                </div>
                <!--// Forms-3 -->
                 <?php
require_once("footer.php");

?>