<?php
//session_start();
require_once('header.php');
require_once("sidebar.php");
require_once('../Connectionclass.php');
$obj = new Connectionclass();
$username= $_SESSION['username']; 
$qry="select * from registration where email='$username'";
$exe=$obj->GetSingleRow($qry);
//var_dump($exe);
?>
<div class="main-panel">
<div class="content">
  <div class="outer-w3-agile mt-3">

  <div class="card">

<div class="card-header">
                    <h4 class="tittle-w3-agileits mb-4"><?php echo $exe['name']; ?></h4>
</div>
                    <form action="" method="post">
                        
          
            
              <div class="row">


                <?php
                if ($exe['picture']!=NULL) {
               
                ?>
                <div class="col-md-3 col-lg-3 " align="center"><img src="../resources/users/<?php echo $exe['picture']; ?>"  width="100" height="100"> 
                    <?php 
                 }
                 else
                 {
                  ?>

                 <div class="col-md-3 col-lg-3 " align="center"><img src="../resources/noimg.png"  width="100" height="100"> 
                  <?php
                 }
                ?>
              
                
                  <!--<img alt="User Pic" src="baby.jpg" class="img-circle img-responsive" height="100" width="100">--> <br><br>
                  <a href="change_image.php?id=<?php echo $exe['reg_id']; ?>" class="btn btn-warning btn-sm">Change Image</a>
                </div>

              
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                     
                      <tr>
                        <th>Email</th>
                        <td><?php echo $exe['email']; ?></td>
                      </tr>
                   
                    

                        
                      <tr>
                        <th>Address</th>
                        <td><?php echo $exe['address']; ?></td>
                      </tr>



                      <tr>
                        <th>State</th>
                        <td><?php echo $exe['state']; ?></a></td>
                      </tr>

                      <tr>
                        <th> District</th>
                        <td><?php echo $exe['district']; ?></td>
                      </tr>


                      <tr>
                        <th>City</th>
                        <td><?php echo $exe['city']; ?></a></td>
                      </tr>


                      <tr>
                    
                        <th>Phone Number</th>
                        <td><?php echo $exe['phone']; ?>
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
               
                  <?php 
          
        //  } ?>
                </div>
              </div>  <div class="card-footer">
                      <a href="edit_profile.php" class="btn btn-success" style="margin-left: 900px;">Edit Details</a>
                </div>

                      <br>
                        <!--<button type="submit" class="btn btn-success" align="center" style="margin-left: 900px;">Edit Details</button>-->
                    </form>
                </div>
                </div>








<div>
<blank></blank>
</div>






<?php
require_once("footer.php");
?>      