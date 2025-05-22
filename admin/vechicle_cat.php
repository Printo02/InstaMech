<?php
require_once("header.php");
require_once("sidebar.php");
require_once('../Connectionclass.php');

$obj = new Connectionclass();
$qry = "select * from vehiclecategory";
$exe = $obj->GetTable($qry);
?>

<div class="main-panel">
    <div class="content">
        <div class="row">
            <!-- Add Category Card -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Category</h4>
                        <form action="codes/add_vehicle_cat_exe.php" method="post">
                            <div class="form-group">
                                <label for="catagory">Category</label>
                                <input type="text" class="form-control" id="catagory" placeholder="Category" required name="catagory" pattern="[a-zA-Z\s]+" title="Alphabets and Space Only">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Listing Category Card -->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Listing Category</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach($exe as $n) {
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $i++; ?></th>
                                    <td><?php echo $n['cat_name']; ?></td>
                                    <td>
                                        <a href="edit_vechicle_cat.php?id=<?php echo $n['cat_id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                        <a onclick="return confirm('Are you sure you want to delete?');" href="codes/catagory_delete.php?id=<?php echo $n['cat_id']; ?>" class="btn btn-danger btn-sm">Delete</a>
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
