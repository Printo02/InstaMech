<?php
//session_start();
require_once("header.php");
require_once("sidebar.php");
require_once('../Connectionclass.php');
$obj = new Connectionclass();
$uname=$_SESSION['username'];
 $qry="select * from servicerequest s inner join registration r on s.from_email=r.email  where s.to_email='$uname'";
$exe=$obj->GetTable($qry);
// var_dump($exe);
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
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Date</th>
                                <th scope="col">Description</th>
                                </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i=1;
                            foreach($exe as $m)
                            {
                                $comp=$m['s_id'];
                                $qry="select * from servicerequest where s_id='$comp'";
                                $exe=$obj->GetSingleRow($qry);

                                    //var_dump($exe);
                                ?>

                            <tr>
                                <th scope="row"><?php echo $i++; ?></th>
                                <td><?php echo $m['name']; ?></td>
                                <td><?php echo $m['from_email']; ?></td>
                                <td><?php echo date("d/m/Y", strtotime($m['date'])); ?></td>

                                <td><?php echo $m['description']; ?></td>
                                <!-- <td><a href="edit_service.php?s_id=<?php echo $m['s_id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                <a href="codes/delete_service.php?s_id=<?php echo $m['s_id']; ?>" class="btn btn-danger btn-sm">Delete</a></td> -->

                          
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