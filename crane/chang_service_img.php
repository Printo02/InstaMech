 <?php
require_once('header.php');
require_once('../Connectionclass.php');
$obj = new Connectionclass();
$username= $_SESSION['username']; 

$qry="select * from servicedetails where email='$username'";
$exe=$obj->GetSingleRow($qry);
 
?>

 <h4 class="tittle-w3-agileits mb-4">Change Image</h4>
 <form action="codes/edit_service_exe.php?id=<?php echo $exe['service_id']; ?>" method="post" enctype="multipart/form-data">

    <div>
        <img src="../../resources/mechanic_services/<?php echo $exe['picture']; ?>" width="200" height="200">
    </div>
    
<input type="file" name="photo">

<br>
<button>Change image</button>

 <input type="hidden" name="hidd" value="<?php echo $exe['service_id']; ?>">
        
                    </form>
              



                 <?php
                 require_once('footer.php');
?>
    







                   