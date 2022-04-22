
<?php
session_start();
if (strlen($_SESSION['uid']) == "") {
    header('location:logout.php');
} else {

?>


       

<?php } ?>
<?php include 'include/header.php';
 include 'db/conn.php';
 
 $results = $crud->getAttendance();
 
 ?>
 <div class="ghost-element">
</div>
<h1 class="text-center">View Attandance</h1>
           <table class="table"> 
           <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Specialty</th>
                <th scope="col">Action</th>
                </tr>
                </thead>
              
                <?php while($r = $results->fetch(PDO::FETCH_BOTH)) { ?>
                    <tr> 
         <td><?php echo $r['attendee_id'] ?></td>
         <td><?php echo $r['firstname'] ?></td>
         <td><?php echo $r['lastname'] ?></td>
         <td><?php echo $r['name'] ?></td>
         <td>
                    <a href="view.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-primary">View</a>
                    <a href="edit.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-warning">Edit</a>
                    <a onclick="return confirm('Are you sure you want to delete this record?');" href="delete.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-danger">Delete</a>
                </td>
              <?php }?>
              <tr>
            </table>

     



<br /><br /><br /><br />
<?php include 'include/footer.php' ?>