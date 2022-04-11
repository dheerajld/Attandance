<br />
<br />
<br />
<br />
<br />
<br />

<?php 
require_once  'include/header.php';
require_once 'db/conn.php'; 

$results = $crud->getSpecialties();

if(!isset($_GET['id']))
{
   
    include 'include/errormessage.php';
    header("Location: viewattandance.php");
}
else{
    $id = $_GET['id'];
    $result = $crud->getAttendanceDetails($id);


?>


<div class="card" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title">
        <?php echo $result['firstname'] . ' ' . $result['lastname'];  ?>
    </h5>
    <h6 class="card-subtitle mb-2 text-muted">
        <?php echo $result['name'];  ?>    
    </h6>
    <p class="card-text">
        Date Of Birth: <?php echo $result['dateofbirth'];  ?>
    </p>
    <p class="card-text">
        Email Adress: <?php echo $result['emailaddress'];  ?>
    </p>
    <p class="card-text">
        Contact Number: <?php echo $result['contactnumber'];  ?>
    </p>

</div>
</div>
<br/>
    
<?php } ?>
<?php include 'include/footer.php' ?>