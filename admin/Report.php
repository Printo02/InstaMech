<?php
require_once("header.php");
require_once("sidebar.php");
require_once('../Connectionclass.php');
$obj = new Connectionclass();
if(isset($_POST['submit']))
{
    echo $cat=$_POST['category'];
    echo $type=$_POST['type'];
    
    $sql="select * from registration  where  reg_type='$cat' and paystatus='$type'";
    $result=$obj->GetTable($sql);


}
else
{
  
  $result=NULL;
 
}
?>
<div class="main-panel">
    <div class="content">
        <div class="row">
            <!-- Add Category Card -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                    <h4 class="tittle-w3-agileits mb-4">Report</h4>
                    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
                            
                          
                          


                         <div class="form-row">
                            
                            <div class="form-group col-md-6">
                                <label for="inputName">Category</label>
                                <select class="form-control" id="type" name="category" required="">
                                <option value="">--select--</option>
                                <option value="mechanic">Mechanic</option>
                                <option value="crane">Crane</option>
                                <option value="carriage">Carriage</option>
                                
                            </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Type</label>
                                <select class="form-control" id="type" name="type" required="">
                                <option value="">--select--</option>
                                <option value="active">Paid</option>
                                <option value="inactive">Unpaid</option>
                               
                            </select>
                            </div>
                        </div>
                       
                        <button type="submit" class="btn btn-primary" name="submit">Search</button>
                         
                    </form>
                </div>

<?php
if($result!=NULL)
{

  ?>
                 <!-- Tables content -->
            <section class="tables-section">
                <!-- table1 -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4" style="text-transform: uppercase;"><!--<?php echo $type; ?>--> </h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone </th>
                                 <th scope="col">Address</th>
                                  <th scope="col">RegType</th>
                                   <th scope="col">State</th>
                                   <th scope="col">City</th>
                                   <th scope="col">District</th>
                                   <th scope="col">Paystatus</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php
                          // var_dump($result);
                            $i=1;
                            foreach($result as $m)
                            {

                                ?>
                            <tr>
                                <th scope="row"><?php echo $i++; ?></th>
                                <td><?php echo $m['name']; ?></td>
                                <td><?php echo $m['email']; ?></td>
                                <td><?php echo $m['phone']; ?></td>
                                <td><?php echo $m['address']; ?></td>
                                <td><?php echo $m['reg_type']; ?></td>
                                <td><?php echo $m['state']; ?></td>
                                <td><?php echo $m['city']; ?></td>
                                <td><?php echo $m['district']; ?></td>
                                <td><?php echo $m['paystatus']; ?></td>
                               
                            </tr>
                             <?php

                            }
                            ?>

                            
                        </tbody>
                    </table>
                </div>
                </div>
                </div>
                <!--// table1 -->
            </section>
   <?php
}

?>

                
                 <?php
require_once("footer.php");

?>