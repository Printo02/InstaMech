<?php
require_once("header.php");
require_once("sidebar.php");
require_once('../Connectionclass.php');
$obj = new Connectionclass();

$type = $_REQUEST['type'] ?? ''; // Ensure $type is always defined
$exe = [];  // Initialize $exe as an empty array

if ($type == 'approved') {
    $qry = "SELECT * FROM registration INNER JOIN login ON registration.email = login.username WHERE registration.reg_type = 'crane' AND login.status = 'active'";
    $exe = $obj->GetTable($qry);
} elseif ($type == 'rejected') {
    $qry = "SELECT * FROM registration INNER JOIN login ON registration.email = login.username WHERE registration.reg_type = 'crane' AND login.status = 'rejected'";
    $exe = $obj->GetTable($qry);
}
?>

<div class="main-panel">
    <div class="content">
        <div class="row">
            <!-- Add Company Card -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
<!-- Tables content -->
    <section class="tables-section">
        <!-- table1 -->
        <div class="outer-w3-agile mt-3">
            <h4 class="tittle-w3-agileits mb-4">Crane List (<?php echo ucfirst($type); ?>)</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">State</th>
                        <th scope="col">City</th>
                        <th scope="col">District</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (is_array($exe) && !empty($exe)) {
                        $i = 1;
                        foreach ($exe as $m) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $i++; ?></th>
                        <td><?php echo htmlspecialchars($m['name']); ?></td>
                        <td><?php echo htmlspecialchars($m['email']); ?></td>
                        <td><?php echo htmlspecialchars($m['phone']); ?></td>
                        <td><?php echo htmlspecialchars($m['address']); ?></td>
                        <td><?php echo htmlspecialchars($m['state']); ?></td>
                        <td><?php echo htmlspecialchars($m['city']); ?></td>
                        <td><?php echo htmlspecialchars($m['district']); ?></td>
                        <td>
                            <?php if ($m['status'] == 'active') { ?>
                                <a onclick="return confirm('Are you sure you want to reject?');" href="codes/crane_reject.php?action=reject&id=<?php echo $m['reg_id']; ?>" class="btn btn-danger btn-sm">Reject</a>
                            <?php } else { ?>
                                <a href="codes/crane_approve.php?id=<?php echo $m['reg_id']; ?>" class="btn btn-success btn-sm">Approve</a>
                                <a onclick="return confirm('Are you sure you want to delete?');" href="codes/crane_reject.php?action=delete&id=<?php echo $m['reg_id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php
                        }
                    } else {
                        echo "<tr><td colspan='9'>No records found.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <!--// table1 -->
        <?php
        require_once("footer.php");
        ?>
    </section>
</div>
</div>
