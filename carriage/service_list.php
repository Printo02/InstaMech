<?php
//session_start();
require_once("header.php");
require_once("sidebar.php");
require_once('../Connectionclass.php');
$obj = new Connectionclass();
$uname=$_SESSION['username'];
 $qry="select * from servicedetails where email='$uname'";
$exe=$obj->GetTable($qry);
//var_dump($exe);
?>
<div class="main-panel">
    <div class="content">
        <div class="row">
            <!-- Add Company Card -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
 <!-- Tables content -->
            <section class="tables-section">
                <!-- table1 -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Service List</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Sl.No</th>
                                <th scope="col">Service Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Rate</th>
                                <th scope="col">Company</th>
                          
                                 <th scope="col" colspan="2">Actions</th>
                                </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i=1;
                            foreach($exe as $m)
                            {
                                $comp=$m['comp_id'];
                                $qry="select * from vehiclecompany where comp_id='$comp'";
                                $exe=$obj->GetSingleRow($qry);

                                    //var_dump($exe);
                                ?>

                            <tr>
                                <th scope="row"><?php echo $i++; ?></th>
                                <td><?php echo $m['s_name']; ?></td>
                                <td><?php echo $m['s_description']; ?></td>
                                <td><?php echo $m['s_rate']; ?></td>
                                <td><?php echo $exe['comp_name']; ?></td>
                                <td><a href="edit_service.php?s_id=<?php echo $m['service_id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                <a href="codes/delete_service.php?s_id=<?php echo $m['service_id']; ?>" class="btn btn-danger btn-sm">Delete</a></td>

                          
                            </tr>
                           
                                <?php


                            }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
                <!--// table1 -->

              

            </section>

            <!--// Tables content -->
             <?php
require_once("footer.php");

?>