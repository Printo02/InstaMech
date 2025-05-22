 <?php
require_once("header.php");
require_once("sidebar.php");
require_once('../Connectionclass.php');
$obj = new Connectionclass();
 $qry="select * from registration INNER JOIN login ON registration.email=login.username  where registration.reg_type='user' and login.status='inactive'";
$exe=$obj->GetTable($qry);
//var_dump($exe);
?>

 <!-- Tables content -->
 <div class="main-panel">
 <div class="content">
            <section class="tables-section">
                <!-- table1 -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Basic Table</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">email</th>
                                <th scope="col">phone</th>
                                <th scope="col">address</th>
                                <th scope="col">state</th>
                                <th scope="col">city</th>
                                <th scope="col">district</th>
                               <!--  <th scope="col" colspan="2">actions</th>-->
                                </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i=1;
                            foreach($exe as $m)
                            {

                                ?>

                            <tr>
                                <th scope="row"><?php echo $i++; ?></th>
                                <td><?php echo $m['name']; ?></td>
                                <td><?php echo $m['email']; ?></td>
                                <td><?php echo $m['phone']; ?></td>
                                <td><?php echo $m['address']; ?></td>
                                <td><?php echo $m['state']; ?></td>
                                <td><?php echo $m['city']; ?></td>
                                <td><?php echo $m['district']; ?></td>
                                <!--<td><a href="" class="btn btn-success btn-sm">Approve</a></td>-->
                                <td><a  onclick="return confirm('Are you sure want to Reject?');" href="codes/user_reject.php?id=<?php echo $m['reg_id']; ?>" class="btn btn-danger btn-sm">Reject</a></td>
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