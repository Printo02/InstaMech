<?php
require_once("header.php");
require_once("sidebar.php");
require_once('../Connectionclass.php');
$obj = new Connectionclass();


 $qry="select  r1.name as from_name,r1.address as from_address, r1.phone as from_phone, r1.city as from_city,  r1.district as from_district,s.description,s.s_date,
r2.name as to_name,r2.address as to_address, r2.phone as to_phone, r2.city as to_city,  r2.district as to_district,r2.reg_type as to_regtype,s.date
from registration r1 INNER JOIN servicerequest s ON r1.email=s.from_email 
  INNER JOIN registration r2 ON r2.email=s.to_email where s.status='inactive'";
$exe=$obj->GetTable($qry);

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
                <div class="outer-w3-agile mt-3" style="overflow-x:auto;">
                    <h4 class="tittle-w3-agileits mb-4"> Service Request</h4>
                    <table class="table"  style="width:1000px">
                        <thead>
                            <tr>
                                <th scope="col" >#</th>
                                <th scope="col" style="width:100px">Name</th>
                                   <th scope="col" style="width:100px">address</th>
                                <th scope="col">phone</th>
                                  <th scope="col">City</th>
                                <th scope="col">District</th>
                                <th scope="col" style="width:100px">Service Request</th>
                                <th scope="col" style="width:100px">Service Date</th>
                                <th scope="col" style="width:100px">Service Provider</th>
                                <th scope="col" style="width:200px">Service Provider Details</th>
                                 
                                     <th scope="col"style="width:200px">Service Request Date</th>
                               
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
                                <td><?php echo $m['from_name']; ?></td>
                                <td><?php echo $m['from_address']; ?></td>
                                <td><?php echo $m['from_phone']; ?></td>
                                <td><?php echo $m['from_city']; ?></td>
                                <td><?php echo $m['from_district']; ?></td>
                                <td><?php echo $m['description']; ?></td>
                                <td><?php echo date('d-m-Y', strtotime($m['s_date']))?></td>
                                   <td><?php echo $m['to_regtype']; ?></td>
                               <td>
                              <strong> 	<?php echo $m['to_name']; ?></strong>
                               	<?php echo"<br>";?>
                               	<?php echo $m['to_address']; ?>
                               	        	<?php echo"<br>";?>
                                   <?php echo $m['to_phone']; ?>
                                           	<?php echo"<br>";?>
                                   <?php echo $m['to_city']; ?>
                                           	<?php echo"<br>";?>
                                   <?php echo $m['to_district']; ?>
</td>
                            
                                <td><?php echo date('d-m-Y', strtotime($m['date'])) ?></td>
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