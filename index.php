<?php 
 require_once 'include/header.php'; 
 require_once 'db/conn.php'; 

 $results = $crud->getSpecialties();
?>

<div class="ghost-element">
</div>

<h1 class="text-center">Registration for IT Conference</h1>
<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
            <form action="success.php" method="POST">
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control" id="firstname" aria-describedby="firstname" placeholder="Enter firstname" name="firstname">

                </div>
                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" class="form-control" id="lastname" aria-describedby="lastname" placeholder="Enter lastname" name="lastname">

                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" id="lastname" aria-describedby="dob" placeholder="Date of Birth" name="dob">

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
                    <small id="email" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">

                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <small id="phone" class="form-text text-muted">We'll never share your number with anyone else.</small>
                    <input type="text" class="form-control" id="phone" aria-describedby="phoneHelp" placeholder="Enter phone" name="phone">

                </div>
                <!-- <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div> -->


                <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
            </form>

        </div>
    </div>
</div>














<br /><br /><br /><br />
<?php include 'include/footer.php' ?>