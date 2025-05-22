 <?php
require_once('header.php');
require_once("sidebar.php");
$msgid=$_GET['mid'];


?>
<div class="main-panel">
<div class="content">
 <!-- Forms-3 -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Send Response</h4>
                    <form action="codes/feedback_response_exe.php?mid=<?php echo $msgid; ?>" method="post">
                        <div class="form-row">
                            
                           
                            <div class="form-group col-md-6">
                                <label for="inputName">Response</label>
                                <textarea class="form-control" placeholder="type here..." name="res" style="height: 100px;"></textarea>
                            </div>
                             <div class="form-group col-md-6">
                                
                            </div>
                        </div>
                       <!--  <div class="form-row">
                            
                            <div class="form-group col-md-6">
                                <label for="inputName">Description</label>
                                <textarea class="form-control" placeholder="Description" name="description"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                
                            </div>
                        </div>-->
                        
                     
                        
                         
                      
                        <button type="submit" class="btn btn-success">Send</button>
                    </form>
                </div>
                 <?php
                 require_once('footer.php');
?>