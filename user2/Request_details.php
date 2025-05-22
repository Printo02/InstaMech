<?php
require_once("header.php");
require_once("sidebar.php");
require_once('../Connectionclass.php');
$obj = new Connectionclass();
$mid=$_GET['id'];
?>

<!-- Forms-3 -->
<div class="main-panel">
<div class="content">
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Details</h4>
                    <form action="codes/request_submit.php" method="post">
                        
                        <div class="form-group">
                            <label for="Date">Date</label>
                            <input type="date" class="form-control" id="sdate" placeholder="Date" required="" name="sdate">
                        </div>
                        <div class="form-group">
                            <label for="Description">Description</label>
                            <textarea class="form-control" name="desc"></textarea>
                        </div>
                     <input type="hidden" name="mechid" value="<?php echo $mid; ?>">
                       
                        
                        
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
               
                    </form>
                </div>
                <!--// Forms-3 -->
                 <?php
require_once("footer.php");

?>