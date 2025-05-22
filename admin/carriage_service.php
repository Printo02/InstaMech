<?php
require_once("header.php");
require_once("sidebar.php");
require_once('../Connectionclass.php');
$obj = new Connectionclass();

 $qry="select * from registration INNER JOIN login ON registration.email=login.username
  INNER JOIN servicedetails ON registration.email=servicedetails.email
  where registration.reg_type='carriage' and login.status='active'";
$exe=$obj->GetTable($qry);
//var_dump($exe);
?>
<div class="main-panel">
<div class="content">
 <!-- Tables content -->
            <section class="tables-section">
                <!-- table1 -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Carriage Providers</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Address</th>
                                <th scope="col">Service Name</th>
                                <th scope="col">Description</th>
                               <th scope="col">Rate</th>
                               
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
                                <td><?php echo $m['s_name']; ?></td>
                                <td><?php echo $m['s_description']; ?></td>
                             
                                <td><?php echo $m['s_rate']; ?></td>
                                
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