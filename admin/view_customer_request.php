<?php
require_once('header.php');
require_once("sidebar.php");
require_once('../Connectionclass.php');
$obj = new Connectionclass();
$qry="select * from registration INNER JOIN login ON registration.email=login.username where registration.reg_type='customer' and login.status='inactive'";
$exe=$obj->GetTable($qry);
//var_dump($exe);
?>
<div class="main-panel">
<div class="content">
  <!-- Tables content -->
            <section class="tables-section">
                
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Customer Details</h4>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Address</th>
                                
                                <th scope="col">State</th>
                                <th scope="col">City</th>
                                <th scope="col">District</th>
                                <th scope="col">Status</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i=1;
                            foreach ($exe as $value)
                            {
                              
                            
                            ?>
                            <tr>
                                <td scope="row"><?php echo $i++; ?></td>
                                <td ><img src="../resources/users/<?php echo $value['picture'];?>"  width="100" height="100"> </td>
                                <td><?php  echo $value['name']; ?></td>
                                <td><?php  echo $value['email']; ?></td>
                                <td><?php  echo $value['phone']; ?></td>
                                <td><?php  echo $value['address']; ?></td>
                                <td><?php  echo $value['state']; ?></td>
                                <td><?php  echo $value['city']; ?></td>
                                <td><?php  echo $value['district']; ?></td>
                                <td><?php  echo $value['status']; ?></td>
                                <td><a href="codes/customer_exe.php?action=approve&id=<?php  echo $value['reg_id']; ?>" class="btn btn-success btn-sm">Approve</a>
                                 <td><a onclick="return confirm('Are you sure want to Reject?');" href="codes/customer_exe.php?action=reject&id=<?php  echo $value['reg_id']; ?>" class="btn btn-danger btn-sm">Reject</a>
                                    
                                 </td>
                            </tr>
                            <?php
                            }
                            ?>
                            <!--<tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>-->
                        </tbody>
                    </table>

                    
                </div>
                <!--// table2 -->

               

              
               
               

            </section>
             <?php
            require_once('footer.php');
            ?>