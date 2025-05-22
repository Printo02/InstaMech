<?php
require_once("header.php");
require_once("sidebar.php");
require_once('../Connectionclass.php');
$obj = new Connectionclass();
$id=$_GET['id'];
 $sql="select * from vehiclecategory where cat_id='$id'";
$res=$obj->GetSingleRow($sql);
//var_dump($res);
?>
<div class="main-panel">
<div class="content">
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">CATEGORY</h4>
                    <form action="codes/edit_vehicle_cat_exe.php?id=<?php echo $id; ?>" method="post">
                        
                        <div class="form-group">
                            <label for="Name">Category</label>
                            <input type="text" class="form-control" id="catagory" placeholder="catagory" value="<?php echo $res['cat_name']; ?>" required="" name="catagory" pattern="[a-zA-Z\s]+" title="Alphabets and Space Only">
                        </div>
                        
                        
                        <button type="submit" class="btn btn-primary">submit</button>
                         <button type="reset" class="btn btn-primary">Cancel</button>
                    </form>
                </div>

<?php
 $qry="select * from vehiclecategory";
$exe=$obj->GetTable($qry);
?>




                  <section class="tables-section">
                <!-- table1 -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">catagory Table</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">catagory</th>
                                
                                 <th scope="col" >actions</th>
                                </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i=1;
                            foreach($exe as $n)
                            {
                            

                                ?>

                            <tr>
                                <th scope="row"><?php echo $i++; ?></th>
                                <td><?php echo $n['cat_name']; ?></td>
                               
                                <td><a href="edit_vechicle_cat.php?id=<?php echo $n['cat_id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                <a href="codes/catagory_delete.php?id=<?php echo $n['cat_id']; ?>" class="btn btn-danger btn-sm">Delete</a></td>
                            </tr>
                           
                                <?php

                            }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
                <!--// table1 -->

              

            </section>

                <!--// Forms-3 -->
                 <?php
require_once("footer.php");

?>