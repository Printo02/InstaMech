 <?php
require_once('header.php');
require_once('../Connectionclass.php');
$obj = new Connectionclass();
$username= $_SESSION['username']; 
$service_id=$_GET["id"];
$qry="select * from servicedetails where service_id='$service_id'";
$servicedetails=$obj->GetSingleRow($qry);
if(is_array($servicedetails)){
?>
<div class="outer-w3-agile col-xl">
 <h4 class="tittle-w3-agileits mb-4">Change Image</h4>
 <form action="codes/change_service_img_exe.php" method="post" enctype="multipart/form-data">

    <div>
        <img src="../resources/mechanic_services/<?php echo $servicedetails['picture']; ?>" width="200" height="200">
    </div>
    
<input type="file" name="photo">
  <div class="form-group">
                        <label class="col-sm-3 control-label"></label>
                        <div class="col-sm-6">
                             <button type="submit" class="btn btn-success">Update</button>
             
                        </div>
                    </div>
                    

 <input type="hidden" name="service_id" value="<?php echo $servicedetails['service_id']; ?>">
        
                    </form>
                
                <?php

}else{
	echo "No Data found";
}

                ?>
            </div>
                 <?php
                 require_once('footer.php');
?>
    







                   