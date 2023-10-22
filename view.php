<?php
$title = 'View Record';

require_once 'includes/header.php';
require_once 'includes/auth_check.php';
require_once 'db/conn.php';

if (!isset($_GET['id'])) {
    include 'includes/errormessage.php';
} else {
    $id = $_GET['id'];
    $result = $crud->getAttendeeDetails($id);


?>
    <style>
        .card .btn {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    <div class="card" style="width: 80rem;">
        <div class="card-body">
            <img src="<?php echo empty($result['avatar_path']) ? "uploads/blank.jpg" : $result['avatar_path']; ?>" class="rounded-circle" style="width: 20%; height: 20%" />
            <h5 class="card-title text-center">
                <?php echo $result['firstname'] . ' ' . $result['lastname'];  ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?php echo $result['Name'];  ?>
            </h6>
            <p class="card-text">
                Date of Birth: <?php echo $result['dateofbirth'];  ?>
            </p>
            <p class="card-text">
                Email Adress: <?php echo $result['email'];  ?>
            </p>
            <p class="card-text">
                Contact Number: <?php echo $result['phone'];  ?>
            </p>

        </div>
    </div>
    <br>
    <br>

    <a href="viewrecords.php" class="btn btn-info">Back to List</a>
    <a href="edit.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-warning">Edit</a>
    <a onclick="return confirm('Are you sure you want to delete this record?');" href="delete.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-danger">Delete</a>
<?php } ?>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>