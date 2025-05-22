<?php
require_once('header.php');
require_once("sidebar.php");
require_once('../Connectionclass.php');
$obj = new Connectionclass();
$qry="select * from tbl_msg";
$exe=$obj->GetTable($qry);
//$obj ="select * from tbl_msg inner join registration ON registration.email=tbl_msg.send_from";
//$exe=$obj->GetTable($qry);
//var_dump($exe);
?>
<?php
  if ($exe!=NULL) {
  ?>
  <div class="main-panel">
  <div class="content">
            <section class="tables-section">
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Feedback</h4>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Type</th>
                                <th scope="col">Send From</th>
                                <th scope="col">Date</th>
                                <th scope="col">Description</th>
                                 <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i=1;
                            foreach ($exe as $value)
                            {
                               $dt = strtotime($value['date']);
                              $new_date = date("d-m-Y", $dt);
                            
                            ?>
                            <tr>
                                <td scope="row"><?php echo $i++; ?></td>
                                 <td><?php  echo $value['type']; ?></td>
                                
                                <td><?php  echo $value['send_from']; ?></td>

                                <td><?php  echo  $new_date; ?></td>
                               
                            <td><?php  echo $value['description']; ?></td>
                               
                                <?php
                           if($value['status']=='active')
                           {
                            ?>
                               <td><a href="feedback_response.php?mid=<?php  echo $value['msgid']; ?>" class="btn btn-success btn-sm">Reply</a>
                                <?php
                            }
                            ?>
                                 <!--< <td><a href="codes/reject_mechanic.php?mid=<?php  echo $value['reg_id']; ?>" class="btn btn-danger btn-sm">Reject</a>
                                    
                                 </td>-->
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
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Feedback</h4>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Send From</th>
                                <th scope="col">Send To</th>
                                <th scope="col">Date</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Description</th>
                                
                                <th scope="col">Type</th>
                                <th scope="col">status</th>
                                
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