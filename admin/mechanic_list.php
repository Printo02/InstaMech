 <?php
require_once("header.php");
require_once("sidebar.php");
require_once('../Connectionclass.php');
$obj = new Connectionclass();
$type=$_REQUEST['type'];
if($type=='approve')
{

 $qry="select * from registration INNER JOIN login ON registration.email=login.username  where registration.reg_type='mechanic' and login.status='active'";
 $exe=$obj->GetTable($qry);
}
elseif($type=='reject')
{
    $qry="select * from registration INNER JOIN login ON registration.email=login.username  where registration.reg_type='mechanic' and login.status='rejected'";
 $exe=$obj->GetTable($qry);
}

//var_dump($exe);
?>


 <div class="main-panel">
    <div class="content">
        <div class="row">
            <!-- Add Company Card -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
            <section class="tables-section">
                <!-- table1 -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">mechanic list</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Address</th>
                                <th scope="col">State</th>
                                <th scope="col">City</th>
                                <th scope="col">District</th>
                                 <th scope="col" colspan="2">Actions</th>
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
                                <?php
                                if($m['status']=='active')
                                {
                                ?>
                                <td><a onclick="return confirm('Are you sure want to Reject?');" href="codes/mechanic_reject.php?action=reject&id=<?php echo $m['reg_id']; ?>" class="btn btn-danger btn-sm">Reject</a></td>
                                 <?php
                             }
                             else
                             {
                                ?>
                                <td><a  href="codes/mechanic_approve.php?id=<?php echo $m['reg_id']; ?>" class="btn btn-success btn-sm">Approve</a>
                                <a onclick="return confirm('Are you sure want to Delete?');" href="codes/mechanic_reject.php?action=delete&id=<?php echo $m['reg_id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                                 <?php
                             }
                                ?>
                            </tr>
                           
                                <?php

                            }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
                <!--// table1 -->
                </div>
                </div>
              

            </section>

            <!--// Tables content -->
             <?php
require_once("footer.php");

?>