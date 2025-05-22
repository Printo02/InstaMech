 <?php
require_once('header.php');
require_once("sidebar.php");
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
                    <h4 class="tittle-w3-agileits mb-4">Feedback</h4>
                    <form action="codes/feedback_exe.php" method="post">
                        <div class="form-row">
                            
                            <div class="form-group col-md-6">
                                <label for="inputName">Type</label>
                               
                                <select class="form-control" name="type" required="">
                                     <option value="">-- Select --</option>
                                    <option value="feedback">Feedback</option>
                                    <option value="complaint">Complaint</option>
                                </select>
                                <label for="inputName">Description</label>
                                <textarea class="form-control" placeholder="Description" name="description" style="height: 100px;"></textarea>
                            <br>
                            <button type="submit" class="btn btn-success">Send</button>
                        </div>
                       <!--  <div class="form-row">
                            
                            <div class="form-group col-md-6">
                                <label for="inputName">Description</label>
                                <textarea class="form-control" placeholder="Description" name="description"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                
                            </div>
                        </div>-->

                    </form>
                </div>



                 <?php
                 require_once('footer.php');
                ?>