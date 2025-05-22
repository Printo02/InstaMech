<?php
require_once('header.php');
require_once("sidebar.php");
require_once('../Connectionclass.php');
$obj = new Connectionclass();
$username= $_SESSION['username']; 
$qry="select * from feedback  where send_from='$username'";
$exe=$obj->GetTable($qry);
//var_dump($exe);
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
                    <h4 class="tittle-w3-agileits mb-4">Feedbacks</h4>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Description</th>
                                <th scope="col">Date</th>
                                <th scope="col">Response</th>
                               
                                
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
                            <?php
                                if($value['response']!='')
                                {
                                ?>
                            <tr style="background: #55ef84bf;">
                                <td scope="row"><?php echo $i++; ?></td>
                               
                                <td><?php  echo $value['description']; ?></td>
                                <td><?php  echo $new_date; ?></td>
                                <td><?php  echo $value['response']; ?></td>
                                
                                
                                
                                
                                
                            </tr >
                             <?php
                                }
                                else
                                {
                                ?>
                                <tr style="background: pink;">
                                <td scope="row"><?php echo $i++; ?></td>
                               
                                <td><?php  echo $value['description']; ?></td>
                                <td><?php  echo $new_date; ?></td>
                           
                                
                            </tr>

                            <?php
                        }
                            }
                            ?>
                          
                             
                        </tbody>
                    </table> 
                 </div>
               </section>

            <?php

  }
 ?>           <?php
            require_once('footer.php');
            ?>