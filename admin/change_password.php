<?php 
require_once('header.php');
require_once("sidebar.php");
?>
 
    <!--grid--><div class="main-panel">
<div class="content">
         <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Change Password</h4>
                    <form action="codes/change_pwd_exe.php" method="post">

   <form method="post" action="codes/change_pwd_exe.php"> 
                      <div class="form-group"> 
                        <label for="exampleInputEmail1">Current Password</label> 
                        <input type="Password" class="form-control" required="" id="exampleInputEmail1" placeholder="" name="currentpass">
                      </div> 
                      <div class="form-group" >
                        <label for="exampleInputPassword1">New Password</label> 
                        <input type="password"  required="" class="form-control" id="exampleInputPassword1" placeholder="" name="newpass"> 
                      </div> 
                      <div class="form-group" >
                        <label for="exampleInputPassword1">Confirm Password</label> 
                        <input type="password"  required="" class="form-control" id="exampleInputPassword1" placeholder="" name="conpass"> 
                      </div>   
          
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form> 
</div>






  

 

<?php 
require_once('footer.php');
?>