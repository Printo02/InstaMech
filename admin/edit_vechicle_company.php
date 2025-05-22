<?php
require_once("header.php");
require_once("sidebar.php");
require_once('../Connectionclass.php');
$obj = new Connectionclass();
$id=$_GET['id'];
 $sql="select * from  vehiclecompany inner  join vehiclecategory on vehiclecompany.cat_id=vehiclecategory.cat_id where vehiclecompany.comp_id='$id'";
$res=$obj->GetSingleRow($sql);
//var_dump($res);
$qry="select * from vehiclecategory";
$exe=$obj->GetTable($qry);

//var_dump($res);
$qrys="select * from vehiclecompany vc,vehiclecategory v where v.cat_id=vc.cat_id ";
$exes=$obj->GetTable($qrys);
//var_dump($exes);
?>
<div class="main-panel">
<div class="content">
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">company</h4>
                    <form action="codes/edit_vechicle_company_exe.php?id=<?php echo $id; ?>" method="post">
                        
                       
                        <div class="form-group">
                            <label for="Name">Catagory</label>
                            <select class="form-control" id="catagory" name="catagory" >
                                <option value="<?php echo $res['cat_id']; ?>">--<?php echo $res['cat_name']; ?>--</option>
                                <?php
                                                       foreach($exe as $c)
                            {
                            

                                ?>

                                <option value="<?php echo $c['cat_id']; ?>"><?php echo $c['cat_name']; ?></option>
                                 <?php

                            }
                            ?> 
                            </select>
                        </div>

                         <div class="form-group">
                            <label for="Name">company name</label>
                            <input type="text" class="form-control" id="company" placeholder="company" value="<?php echo $res['comp_name']; ?>" required="" name="company" pattern="[a-zA-Z\s]+" title="Alphabets and Space Only">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">submit</button>
                         <button type="reset" class="btn btn-primary">Cancel</button>
                    </form>
                </div>

<?php
 
?>




                 <section class="tables-section">
                <!-- table1 -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">company Table</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">company</th>
                                <th scope="col">category</th>
                                 <th scope="col" >actions</th>
                                </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i=1;
                            foreach($exes as $n)
                            {
                            

                                ?>

                            <tr>
                                <th scope="row"><?php echo $i++; ?></th>
                                <td><?php echo $n['comp_name']; ?></td>
                               <td><?php echo $n['cat_name']; ?></td>
                                <td><a href="edit_vechicle_company.php?id=<?php echo $n['comp_id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                <a href="codes/company_delete.php?id=<?php echo $n['comp_id']; ?>" class="btn btn-danger btn-sm">Delete</a></td>
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