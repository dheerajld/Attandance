<?php
session_start();
if (strlen($_SESSION['uid']) == "") {
    header('location:logout.php');
} else {

?>





<div class="ghost-element">
</div>

    <form class="form-horizontal" action='' method="POST">
        <fieldset>
            <div id="legend">
                <legend class="" align="center">Welcome Back : <?php echo  $_SESSION['fname']; ?></legend>
            </div>

            <div class="control-group" align="center">
                <!-- Button -->
                <div class="controls">
                    <a href="logout.php" class="btn btn-success" type="submit" name="signin">Logout</a>
                </div>
            </div>

        </fieldset>
    </form>
  

<?php } ?>

<?php
$title = 'Index';

require_once 'include/header.php';
require_once 'db/conn.php';

$results = $crud->getSpecialties();

?>


<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
        <h1 class="text-center">Registration for IT Conference </h1>
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
                    <label for="dob">Date Of Birth</label>
                    <input type="text" class="form-control" id="dob" name="dob">
                </div>
                <div class="form-group">
                    <label for="specialty">Area of Expertise</label>
                    <select class="form-control" id="specialty" name="specialty">
                        <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                            <option value="<?php echo $r['specialty_id'] ?>"><?php echo $r['name']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-groupform-group">
                    <label for="phone">Contact Number</label>
                    <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp">
                    <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
                </div>
                <br />
                <div class="custom-file">
                    <input type="file" accept="img/upload" class="custom-file-input" id="avatar" name="avatar">
                    <label class="custom-file-label" for="avatar">Choose File</label>
                    <small id="avatar" class="form-text text-danger">File Upload is Optional</small>

                </div>


                <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<?php require_once 'include/footer.php'; ?>