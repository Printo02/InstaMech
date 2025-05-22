 <?php
require_once("header.php");
require_once("sidebar.php");
require_once('../Connectionclass.php');
$obj = new Connectionclass();
if(isset($_POST['submit']))
{
    $type=$_POST['type'];
    $loc=$_POST['Location'];
   // echo $loc;
    $test='hai';
    $query="select * from registration,servicedetails  where servicedetails.email=registration.email and  registration.city='$loc' and reg_type='$type' and paystatus='active'";
    $result=$obj->GetTable($query);
var_dump($result);


    $sql="select * from registration,servicedetails  where servicedetails.email=registration.email and  registration.city='$loc' and reg_type='$type' and paystatus='inactive'";
    $data=$obj->GetTable($sql);
//var_dump($data);    

}
else
{
  $test=NULL;
  $result=NULL;
  $data=NULL;
}
?>
 <div class="main-panel">
    <div class="content">
        <div class="row">
            <!-- Add Company Card -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                    <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Service Detials</h4>
                    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
                            
                          <!--  <div class="form-group">
                            <label for="Name">Location</label>
                            <select class="form-control" id="Location" name="Location" required="">
                                <option value="">--select--</option>
                                <?php
                                $sqls="select distinct(city) from registration where reg_type='crane' or 'carriage'";
                                $dt=$obj->GetTable($sqls);
                                foreach ($dt as $loc) {
                                  
                                
                                ?>
                                <option><?php echo $loc['city']; ?></option>
                                <?php
                              }
                              ?>
                            </select>
                        </div>-->


                         <div class="form-row">
                            
                            <div class="form-group col-md-6">
                                <label for="inputName">Service Type</label>
                                <select class="form-control" id="type" name="type" required="">
                                <option value="">--select--</option>
                                <option value="crane">Crane</option>
                                <option value="carriage">Carriage</option>
                                
                            </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Location</label>
                                <select class="form-control" id="Location" name="Location" required="">
                                <option value="">--select--</option>
                                <?php
                              echo  $sqls="select distinct(city) from registration where reg_type='crane' or reg_type='carriage'";


                        
                                $dt=$obj->GetTable($sqls);
                                foreach ($dt as $loc) {
                                  
                                
                                ?>
                                <option><?php echo $loc['city']; ?></option>
                                <?php
                              }
                              ?>
                            </select>
                            </div>
                        </div>
                        <!-- <a class="btn btn-danger btn-sm">call-9988776655</a>-->
                        <button type="submit" class="btn btn-primary" name="submit">Search</button>
                         
                    </form>
                </div>

<?php
if($test!=NULL)
{
if($result==NULL & $data==NULL)
{
  ?>
   <section class="tables-section">
                <!-- table1 -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4" style="text-transform: uppercase;"><?php echo $type; ?> - Search Results</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Service Name</th>
                                <th scope="col">Service Details</th>
                                 <th scope="col">Rate</th>
                                  <th scope="col">Phone</th>
                                   <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                           
                          
                            <tr>
                               
                                <td colspan="7" align="center">No data available</td>
                                
                                
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
                <!--// table1 -->
            </section>

  <?php
}
else
{
  ?>


                 <!-- Tables content -->
            <section class="tables-section">
                <!-- table1 -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4" style="text-transform: uppercase;"><?php echo $type; ?> - Search Results</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Service Name</th>
                                <th scope="col">Service Details</th>
                                 <th scope="col">Rate</th>
                                  <th scope="col">Phone</th>
                                   <th scope="col"></th>
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
                                <th scope="row">1</th>
                                <td><?php echo $m['name']; ?></td>
                                <td><?php echo $m['s_name']; ?></td>
                                <td><?php echo $m['s_description']; ?></td>
                                <td><?php echo $m['s_rate']; ?></td>
                                <td><?php echo $m['phone']; ?></td>
                                <td><a href="Request_details.php?id=<?php echo $m['reg_id']; ?>" class="btn btn-primary btn-sm">Request </td>
                            </tr>
                             <?php

                            }
                            ?>

                             <?php
                          // var_dump($result);
                            $i=1;
                            foreach($data as $m)
                            {

                                ?>
                            <tr>
                                <th scope="row">1</th>
                                <td><?php echo $m['name']; ?></td>
                                <td><?php echo $m['s_name']; ?></td>
                                <td><?php echo $m['s_description']; ?></td>
                                <td><?php echo $m['s_rate']; ?></td>
                                <td><?php echo $m['phone']; ?></td>
                                <td><a href="Request_details.php?id=<?php echo $m['reg_id']; ?>" class="btn btn-primary btn-sm">Request </td>
                            </tr>
                             <?php

                            }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
                <!--// table1 -->
            </section>
   <?php
}
}
?>

                
                 <?php
require_once("footer.php");

?>