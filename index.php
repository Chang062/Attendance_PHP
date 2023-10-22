<?php
$title = "Home";
require_once 'includes/header.php';
require_once 'db/conn.php';
$results = $crud->getSpecialties();
?>


<h1 class="text-center heading">ICT WORKSHOP REGISTRATION</h1>

<form method="post" action="success.php" enctype="multipart/form-data">
    <div class="form-group">
        <label for="firstname">First Name</label>
        <input required type="text" class="form-control" id="firstname" name="firstname">
    </div>
    <div class="form-group">
        <label for="lastname">Last Name</label>
        <input required type="text" class="form-control" id="lastname" name="lastname">
    </div>
    <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="text" class="form-control" id="datepicker" name="dob">
    </div>
    <div class="form-group">
        <label for="specialty">Specilization</label>
        <select class="form-control" id="specialty" name="specialty">

            <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                <option value="<?php echo $r['specialty_id'] ?>"><?php echo $r['Name']; ?></option>
            <?php }  ?>
        </select>
    </div>
    <div class="form-group">
        <label for="email">Email Address</label>
        <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted"> Your personal information is secured.</small>
    </div>
    <div class="form-groupform-group">
        <label for="phone">Contact Number</label>
        <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp">
        <small id="phoneHelp" class="form-text text-muted"> Your personal information is secured.</small>
    </div>
    <br />
    <div class="custom-file">
        <input type="file" accept="image/*" class="custom-file-input" id="avatar" name="avatar">
        <label class="custom-file-label" for="avatar">Choose File</label>
        <small id="avatar" class="form-text text-danger">File Upload is Optional</small>

    </div>
    </br>
    </br>

    <div class="d-grid gap-2 col-6 mx-auto">
        <button type="submit" name="submit" class="btn btn-success  btn-lg btn-block">Submit</button>
    </div>

</form>

</br>
<?php require_once 'includes/footer.php';
?>