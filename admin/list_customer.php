<?php
require_once('header.php');
require_once("sidebar.php");
require_once('../Connectionclass.php');
$obj = new Connectionclass();
/*$qry="select * from registration INNER JOIN login ON registration.email=login.username where registration.reg_type='customer' and login.status='active'";
$exe=$obj->GetTable($qry);
var_dump($exe);*/

$type=$_REQUEST['type'];
if($type=='approved')
{

$qry="select * from registration INNER JOIN login ON registration.email=login.username  where registration.reg_type='customer' and login.status='active'";
$exe=$obj->GetTable($qry);

}
elseif($type=='rejected')
{
    $qry="select * from registration INNER JOIN login ON registration.email=login.username  where registration.reg_type='customer' and login.status='rejected'";
 $exe=$obj->GetTable($qry);
}
?>
  <!-- Tables content -->
  <?php
  if ($exe!=NULL) {
     
  ?>
  <div class="main-panel">
  <div class="content">
            <section class="tables-section">
                <!-- table1 -->
               
                <!--// table1 -->

                <!-- table2 -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Customer List(<?php echo $type; ?>)</h4>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Photo</th>
                                <th scope="col">name</th>
                                <th scope="col">email</th>
                                <th scope="col">phone</th>
                                <th scope="col">address</th>
                                
                                <th scope="col">state</th>
                                <th scope="col">city</th>
                                <th scope="col">district</th>
                                <th scope="col">status</th>
                                <th>Action</th>
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
                                <td > <img src="../resources/users/<?php echo $value['picture'];?>"  width="100" height="100"> </td>
                                <td><?php  echo $value['name']; ?></td>
                                <td><?php  echo $value['email']; ?></td>
                                <td><?php  echo $value['phone']; ?></td>
                                <td><?php  echo $value['address']; ?></td>
                                <td><?php  echo $value['state']; ?></td>
                                <td><?php  echo $value['city']; ?></td>
                                <td><?php  echo $value['district']; ?></td>
                                <td><?php  echo $value['status']; ?></td>

                                 <?php
                                if($value['status']=='active')
                                {
                                ?>
                                <td><a onclick="return confirm('Are you sure want to Reject?');" href="codes/customer_exe.php?action=reject&id=<?php echo $value['reg_id']; ?>" class="btn btn-danger btn-sm">Reject</a></td>
                                 <?php
                                 }
                                 else
                                 {
                                ?>
                                <td><a  href="codes/customer_exe.php?action=approve&id=<?php echo $value['reg_id']; ?>" class="btn btn-success btn-sm">Approve</a>
                                <a onclick="return confirm('Are you sure want to Delete?');" href="codes/customer_exe.php?action=delete&id=<?php echo $value['reg_id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                                 <?php
                                 }
                                ?>

                                
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

  }
  else
  {

            ?>
            <section class="tables-section">
                <!-- table1 -->
               
                <!--// table1 -->

                <!-- table2 -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Customer List(<?php echo $type; ?>)</h4>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Photo</th>
                                <th scope="col">name</th>
                                <th scope="col">email</th>
                                <th scope="col">phone</th>
                                <th scope="col">address</th>
                                
                                <th scope="col">state</th>
                                <th scope="col">city</th>
                                <th scope="col">district</th>
                                <th scope="col">status</th>
                                <th colspan="2"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <td colspan="13" align="center" style="font-size: larger;
    font-weight: bold;">No Data Available...</td>
                                
                        </tbody>
                    </table>

                    
                </div>
                <!--// table2 -->

               

              
               
               

            </section>



<?php
}
?>



             <?php
            require_once('footer.php');
            ?>