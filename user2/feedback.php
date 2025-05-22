<?php
session_start();
require_once("header.php");
require_once("sidebar.php");
require_once('../Connectionclass.php');

$obj = new Connectionclass();
$email=$_SESSION['username'];
$qry = "select * from tbl_msg where send_from='$email'";
$exe = $obj->GetTable($qry);
?>

<div class="main-panel">
    <div class="content">
        <div class="row">
            <!-- Add Category Card -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Enter Your Feedback</h4>
                        <form action="codes/feedback_exe.php" method="post">
                            <div class="form-group">

                                <label for="feedback">Feedback </label>
                                <select class="form-control" id="type"  name="type" required>
                                <option value="complaint">--Select-- </option>
                                <option value="complaint">Complaint</option>
                                <option value="Feedback">Feedback</option>
                                </select>
                            </div>
                            <div class="form-group">
                            <label for="desc"> <b> Description </b> </label>
                            <br>
                            <textarea  class="form-control" id="desc" name="desc" rows="4" cols="45">

                            </textarea>
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
                        <h4 class="card-title">My Feedback</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Sl.No</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Type</th>
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
                                <td><?php echo $n['description']; ?></td>
                                <td><?php echo date('d-m-Y',strtotime ($n['date'])); ?></td>
                                <td><?php echo $n['type']; ?></td>

                                <td>
                                <a onclick="return confirm('Are you sure you want to delete?');" href="codes/delete.php?id=<?php echo $n['msgid']; ?>" class="btn btn-danger btn-sm">Delete</a>
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
