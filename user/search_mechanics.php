<?php
require_once("header.php");
require_once("sidebar.php");
require_once('../Connectionclass.php');
$obj = new Connectionclass();

if(isset($_POST['submit'])) {
    $compid = $_POST['compid'];
    $loc = $_POST['location'];
    $test = 'hai';

    $qryfirst = "SELECT * FROM registration, servicedetails 
                 WHERE servicedetails.comp_id = '$compid' 
                 AND registration.city = '$loc' 
                 AND reg_type = 'mechanic' 
                 AND paystatus = 'active' 
                 AND servicedetails.email = registration.email";
    $result = $obj->GetTable($qryfirst);

    $sql = "SELECT * FROM registration, servicedetails 
            WHERE servicedetails.comp_id = '$compid' 
            AND registration.city = '$loc' 
            AND reg_type = 'mechanic' 
            AND paystatus = 'inactive' 
            AND servicedetails.email = registration.email";
    $data = $obj->GetTable($sql);
} else {
    $test = NULL;
    $result = NULL;
    $data = NULL;
}
?>

<div class="main-panel">
    <div class="content">
        <div class="row">
            <!-- Form Section -->
            <div class="col-md-12">
                <div class="outer-w3-agile mt-3">
                <div class="card">

<div class="card-header">
                    <h4 class="tittle-w3-agileits mb-4">Service Details</h4></div>
                    <div class="card-body">

                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="form-group">
                            <label for="compid">Company</label>
                            <select class="form-control" id="compid" name="compid">
                                <option value="">--select--</option>
                                <?php
                                $sql = "SELECT * FROM vehiclecategory";
                                $exe = $obj->GetTable($sql);

                                foreach ($exe as $cat) {
                                    $catid = $cat['cat_id'];
                                    ?>
                                    <optgroup label="<?php echo $cat['cat_name']; ?>">
                                        <?php
                                        $qry = "SELECT * FROM vehiclecompany WHERE cat_id = '$catid'";
                                        $res = $obj->GetTable($qry);

                                        foreach ($res as $com) {
                                            ?>
                                            <option value="<?php echo $com['comp_id']; ?>"><?php echo $com['comp_name']; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </optgroup>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="location">Location</label>
                            <select class="form-control" id="location" name="location" required="">
                                <option value="">--select--</option>
                                <?php
                                $sqls = "SELECT DISTINCT(city) FROM registration WHERE reg_type = 'mechanic'";
                                $dt = $obj->GetTable($sqls);
                                foreach ($dt as $loc) {
                                    ?>
                                    <option><?php echo $loc['city']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary" name="submit">Search</button>
                    </form>
                </div>
            </div>

            <!-- Results Section -->
            <div class="col-md-12">
            <div class="card">
                <?php
                if ($test != NULL) {
                    if ($result == NULL && $data == NULL) {
                        ?>
                        <div class="outer-w3-agile mt-3">
                            <div class="card-header">
                            <h4 class="tittle-w3-agileits mb-4">Results</h4>
                            <div class="alert alert-warning" role="alert">
                                No data available.
                            </div>
                        </div>
                        <?php
                    } else {
                        ?>
                        <div class="outer-w3-agile mt-3">
                        <div class="card-header">
                            <h4 class="tittle-w3-agileits mb-4">Results</h4></div>
                            <div class="row">
                                <?php
                                // Display active service requests
                                foreach ($result as $m) {
                                    ?>
                                    <div class="col-md-12 mb-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $m['name']; ?></h5>
                                                <h6 class="card-subtitle mb-2 text-muted"><?php echo $m['s_name']; ?></h6>
                                                <p class="card-text"><?php echo $m['s_description']; ?></p>
                                                <p class="card-text"><strong>Rate:</strong> <?php echo $m['s_rate']; ?></p>
                                                <p class="card-text"><strong>Phone:</strong> <?php echo $m['phone']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }

                                // Display inactive service requests
                                foreach ($data as $m) {
                                    ?>
                                    <div class="col-md-6 mb-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title"><strong>Name:</strong><?php echo $m['name']; ?></h5>
                                                <h6 class="card-subtitle mb-2 text-muted"><?php echo $m['s_name']; ?></h6>
                                                <p class="card-text"><strong>Description:</strong><?php echo $m['s_description']; ?></p>
                                                <p class="card-text"><strong>Rate:</strong> <?php echo $m['s_rate']; ?></p>
                                                <p class="card-text"><strong>Phone:</strong> <?php echo $m['phone']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                            </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
            </div>
            </div>
            </div>

        <?php
        require_once("footer.php");
        ?>
    </div>
</div>
