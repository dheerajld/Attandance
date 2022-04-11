





<?php require_once 'include/header.php';
      require_once 'db/conn.php';

    if(isset($_POST['submit'])){
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $contact = $_POST['phone'];
        $specialty = $_POST['specialty'];

        $isSuccess = $crud->insertAttandace($fname,$lname,$dob,$email,$contact,$specialty);

        if($isSuccess){
            echo  include 'include/successmessage.php';;
        }else{
            echo include 'include/errormessage.php';
        }
    }


 ?>
<br /><br /><br /><br />
<div class="card text-center">
  <div class="card-header">
  <h1 class="text-center">Info</h1>
  </div>
  <div class="card-body">
    <h5 class="card-titles"><?php echo $_POST['firstname']; ?></h5>
    <h5 class="card-title"><?php echo $_POST['lastname']; ?></h5>
    <h5 class="card-title"><?php echo $_POST['dob']; ?></h5>
    <h5 class="card-title"><?php echo $_POST['specialty']; ?></h5>
    <h5 class="card-title"><?php echo $_POST['email']; ?></h5>
    <h5 class="card-title"><?php echo $_POST['phone']; ?></h5>
    
   
   
</div>

<br /><br /><br /><br />
<?php include 'include/footer.php' ?>