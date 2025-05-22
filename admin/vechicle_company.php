<?php
require_once("header.php");
require_once("sidebar.php");
require_once('../Connectionclass.php');

$obj = new Connectionclass();
$sql = "select * from vehiclecategory";
$res = $obj->GetTable($sql);

$qrys = "select * from vehiclecompany vc, vehiclecategory v where v.cat_id = vc.cat_id";
$exes = $obj->GetTable($qrys);
?>

<div class="main-panel">
    <div class="content">
        <div class="row">
            <!-- Add Company Card -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Company</h4>
                        <form action="codes/add_vehicle_company_exe.php" method="post">
                            <div class="form-group">
                                <label for="catagory">Category</label>
                                <select class="form-control" id="catagory" name="catagory" required>
                                    <option value="">--select--</option>
                                    <?php
                                    foreach($res as $c) {
                                    ?>
                                        <option value="<?php echo $c['cat_id']; ?>"><?php echo $c['cat_name']; ?></option>
                                    <?php
                                    }
                                    ?> 
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="company">Company</label>
                                <input type="text" class="form-control" id="company" placeholder="Company" required name="company" pattern="[a-zA-Z\s]+" title="Alphabets Only & Space Allowed">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Listing Company Card -->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Listing Company</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Company</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach($exes as $n) {
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $i++; ?></th>
                                    <td><?php echo $n['comp_name']; ?></td>
                                    <td><?php echo $n['cat_name']; ?></td>
                                    <td>
                                        <a href="edit_vechicle_company.php?id=<?php echo $n['comp_id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                        <a onclick="return confirm('Are you sure you want to delete?');" href="codes/company_delete.php?id=<?php echo $n['comp_id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once("footer.php");
?>
