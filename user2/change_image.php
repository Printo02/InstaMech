 <?php
require_once('header.php');
require_once('../Connectionclass.php');
$obj = new Connectionclass();
$username= $_SESSION['username']; 
$qry="select * from registration where email='$username'";
$exe=$obj->GetSingleRow($qry);
?>

 <SCRIPT type="text/javascript">
//************************************************************************************************************************************

    function ValidateFileUpload() 
    {
        var fuData = document.getElementById('fileupload');
        var FileUploadPath = fuData.value;

//To check if user upload any file
        if (FileUploadPath == '') 
        {
            alert("Please upload an image");

        } else {
            var Extension = FileUploadPath.substring(
                    FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

//The file uploaded is an image

if (Extension == "gif" || Extension == "png" || Extension == "bmp" || Extension == "jpeg" || Extension == "jpg") 
                    {

// To Display
                if (fuData.files && fuData.files[0]) 
                {
                    var reader = new FileReader();

                    reader.onload = function(e) 
                    {
                        $('#blah').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(fuData.files[0]);
                }

            } 

//The file upload is NOT an image
else {
                 
                alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP.");
                location.href="change_image.php?id=<?php echo $exe['reg_id']; ?>";
               

            }
        }
        
    }
    
//*************************************************************************************************************************
    
</SCRIPT>

 <!-- Forms-3 -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Change Image</h4>
                    <form action="codes/edit_customer_profile_exe.php?action=changeimage&id=<?php echo $exe['reg_id']; ?>" method="post" enctype="multipart/form-data">
                         <div class="form-row">
                            
                            <div class="form-group col-md-6">
                                <?php
                                if ($exe['picture']!=NULL) {
                               
                                ?>
                               
                                <img src="../resources/users/<?php echo $exe['picture']; ?>" width="200" height="200">
                                 <?php 
                                 }
                                 else
                                 {
                                  ?>

                                   <img src="../resources/noimg.png" width="200" height="200">

                                 
                                  <?php
                                 }
                                ?>


                            </div>
                            <div class="form-group col-md-6">
                               
                            </div>
                        </div>
                       
                        <div class="form-row">
                            
                            <div class="form-group col-md-6">
                                <label for="inputName">Image</label>
                                <input type="file" class="form-control"  id="fileupload" onChange="return ValidateFileUpload()" required="" name='images' >
                            </div>
                            <div class="form-group col-md-6">
                               
                            </div>
                        </div>
                       
                       
                       
                       <!-- <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Check me out
                                </label>
                            </div>
                        </div>-->
                        <button type="submit" class="btn btn-success">Update</button>
                    </form>
                </div>
                 <?php
                 require_once('footer.php');
?>