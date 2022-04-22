<?php
// include Function  file
include_once('function.php');
// Object creation
$userdata = new DB_con();
if (isset($_POST['submit'])) {
  // Posted Values
  $fname = $_POST['fullname'];
  $uname = $_POST['username'];
  $uemail = $_POST['email'];
  $pasword = md5($_POST['password']);
  //Function Calling
  $sql = $userdata->registration($fname, $uname, $uemail, $pasword);
  if ($sql) {
    // Message for successfull insertion
    echo "<script>alert('Registration successfull.');</script>";
    echo "<script>window.location.href='signin.php'</script>";
  } else {
    // Message for unsuccessfull insertion
    echo "<script>alert('Something went wrong. Please try again');</script>";
    echo "<script>window.location.href='signin.php'</script>";
  }
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Attendance</title>
  <link rel="shortcut icon" type="image/png" href="img/fav_mini.png" />
  <link rel="stylesheet" href="css/foundation.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">

  <script src="assests/jquery-1.11.1.min.js"></script>
  <script src="assests/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script>
    function checkusername(va) {
      $.ajax({
        type: "POST",
        url: "check_availability.php",
        data: 'username=' + va,
        success: function(data) {
          $("#usernameavailblty").html(data);
        }
      });

    }
  </script>
</head>

<body>
  <header>

    <div class="main-header large-12 columns no-padding">

      <div class="global-page-container">

        <div class="logo small-6 small-offset-3 large-3 large-offset-0 columns no-padding">
          <a href="index.php" title="home">
            <div class="table">
              <div class="table-cell">
                <h1> <span class="square">&nbsp;</span>Attendance</h1>
              </div>
            </div>
          </a>
        </div>

        <div id="hamburguer-icon" class="hamburguer-icon small-2 columns text-right">
          <div class="table">
            <div class="table-cell">
              <img src="img/menu/hamburguer.svg">
            </div>
          </div>
        </div>

        <div class="right-space small-1 columns"></div>

      </div>
    </div>

    <div id="sliding-header-menu-outer" class="sliding-header-menu-outer">
      <div class="sliding-header-menu">

        <div id="sliding-header-menu-close-button" class="sliding-header-menu-close-button small-12 columns">
          <div class="table">
            <div class="table-cell">
              <img class="close-icon" src="img/menu/close.svg">
            </div>
          </div>
        </div>




      </div>

  </header><br />
  <br />
  <br />
  <br />
  <div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
      <div class="col-10 col-md-8 col-lg-6">
        <form class="form-horizontal" action='' method="POST">
          <fieldset>
            <div id="legend" align="center">
              <legend class="">User Registration</legend>
            </div>

            <div class="control-group">
              <!-- Fullname -->
              <label class="control-label" for="username">Fullname</label>
              <div class="controls">
                <input type="text" id="username" name="fullname" placeholder="" class="input-xlarge" required="true">
              </div>
            </div>


            <div class="control-group">
              <!-- Username -->
              <label class="control-label" for="username">Username</label>
              <div class="controls">
                <input type="text" id="username" name="username" onblur="checkusername(this.value)" class="input-xlarge" required="true">
                <span id="usernameavailblty"></span>
              </div>
            </div>

            <div class="control-group">
              <!-- E-mail -->
              <label class="control-label" for="email">E-mail</label>
              <div class="controls">
                <input type="email" id="email" name="email" placeholder="" class="input-xlarge" required="true">
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
                <button class="btn btn-success" type="submit" id="submit" name="submit">Register</button>
              </div>
            </div>

            <div class="control-group">
              <div class="controls">
                Already registered <a href="signin.php">Signin</a>
              </div>
            </div>

          </fieldset>
        </form>
      </div>
    </div>
  </div>
  <script type="text/javascript">
  </script>
</body>

</html>