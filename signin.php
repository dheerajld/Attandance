<?php
session_start();
// include Function  file
include_once('function.php');


// Object creation
$usercredentials=new DB_con();
if(isset($_POST['signin']))
{
// Posted Values
$uname=$_POST['username'];
$pasword=md5($_POST['password']);
//Function Calling
$ret=$usercredentials->signin($uname,$pasword);
$num=mysqli_fetch_array($ret);
if($num>0)
{
  $_SESSION['uid']=$num['id'];
  $_SESSION['fname']=$num['FullName'];
// For success
echo "<script>window.location.href='index.php'</script>";
}
else
{
// Message for unsuccessfull login
echo "<script>alert('Invalid details. Please try again');</script>";
echo "<script>window.location.href='signin.php'</script>";
}
}
?>
<br />
<br />
<br />
<br />
<br />
<br /> 
<?php
include 'include/header.php';
?>
<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
<form class="form-horizontal" action='' method="POST">
  <fieldset>
    <div id="legend">
      <legend class="">User Signin </legend>
    </div>

<div class="control-group">
      <!-- Fullname -->
      <label class="control-label"  for="username">Username</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="" class="input-xlarge" required="true">
      </div>
    </div>


    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="" class="input-xlarge" required="true">
      </div>
    </div>
 

 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success" type="submit" name="signin">Signin</button>
        <a href="registration.php">Registation</a>
      </div>
    </div>

 <div class="control-group">
      <!-- Button -->
      <div class="controls">
      Not Registered yet? <a href="index.php">Register Here</a>
      </div>
    </div>

  </fieldset>
</form>

        </div>
</div>
</div>

<br /><br /><br /><br />
<?php include 'include/footer.php' ?>