<?php
session_start();
require_once("header.php");
require_once("sidebar.php");
require_once('../Connectionclass.php');
$obj = new Connectionclass();
$username= $_SESSION['username']; 

$qry="select r1.name as from_name,r1.address as from_address,
 r1.phone as from_phone, r1.city as from_city, r1.district as 
 from_district,s.description,s.s_date,s.s_id,sr.s_rate, r2.name as
  to_name,r2.address as to_address, r2.phone as to_phone, r2.city as
   to_city, r2.district as to_district,r2.reg_type as to_regtype,s.date 
   from registration r1 INNER JOIN servicerequest s ON r1.email=s.from_email
    INNER JOIN registration r2 ON r2.email=s.to_email INNER JOIN 
    servicedetails sr ON sr.email=s.to_email where s.from_email='$username' and s.status='inactive' ";
$exe=$obj->GetTable($qry);
?>
<div class="main-panel">
<div class="content">

<section class="tables-section">
                <!-- table1 --> 
                <div class="outer-w3-agile mt-3" style="overflow-x:auto;">
                <div class="card">

<div class="card-header">
                    <h4 class="tittle-w3-agileits mb-4"> Service Request</h4></div>

                    <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                        <th scope="col" >Si No</th>
                            <th scope="col">Service Request</th>
                                <th scope="col" >Service Date</th>
                                <th scope="col">Service Provider</th>
                                <th scope="col" >Service Provider Details</th>
                                <th scope="col" >Service Amount</th>
                                <th scope="col">Service Request Date</th>
                               
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
<td><?php echo $m['s_rate']; ?></td>
                                <td><?php echo date('d-m-Y', strtotime($m['date'])) ?></td>
            <td>
            <a href="payment.php?s_id=<?php echo $m['s_id']; ?>&s_rate=<?php echo $m['s_rate'];?>" class="btn btn-info">Pay Now</a>
     
            
            
            </td>
                            
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