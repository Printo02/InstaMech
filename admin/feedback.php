<?php
session_start();
require_once("header.php");
require_once("sidebar.php");
require_once('../Connectionclass.php');

$obj = new Connectionclass();
$email=$_SESSION['username'];
$qry = "select * from tbl_msg  m inner join registration r on m.send_from=r.email ";
$exe = $obj->GetTable($qry);
?>

<div class="main-panel">
    <div class="content">
        <div class="row">
            <!-- Add Category Card -->
           

            <!-- Listing Category Card -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> Feedback</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Sl.No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Response</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach($exe as $n) {
                                ?>
                                <tr>
                                <th scope="row"><?php echo $i++; ?></th>
                                <td><?php echo $n['name']; ?></td>
                                <td><?php echo $n['description']; ?></td>
                                <td><?php echo date('d-m-Y',strtotime ($n['date'])); ?></td>
                                <td><?php echo $n['type']; ?></td>

                                <td>

                                <form action="codes/feedback_exe.php"method="post">

                                <div class="form-group">
                                 <br>
                                 <textarea  class="form-control" id="desc" name="desc" rows="4"   cols="35">
<?php echo $n['response']?>

                                 </textarea>
                                 <input type="hidden" name="msgid"value="<?php echo $n['msgid']?>">

                                 <br>
                                 <button type="submit" class="btn btn-primary">Update</button>
                                 </div>


                                 </form>
                                <!-- <a href="codes/delete.php?id=<?php echo $n['msgid']; ?>" class="btn btn-danger btn-sm">Response</a> -->
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
