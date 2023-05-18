<?php
session_start();

include "DBconn.php";

$error_message = "";

if (isset($_POST['hidden'])) {

  $l_uname = $_POST['l_uname'];
  $l_pswd = $_POST['l_pswd'];

  $sql = "SELECT * FROM wp_form WHERE uname = '$l_uname' AND password = '$l_pswd'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {

    $_SESSION['l_uname'] = $l_uname;
    $_SESSION['logged_in'] = true;

    header('Location: profile.php');
    exit;

  } else {
    $error_message = 'Invalid username or password. Please try again.';
  }


  // $conn->close();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap 5.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  <title>LogIn</title>
  <style>
    .form-control {
      width: initial;
    }

    #err-msg {
      color: red;
    }
  </style>
</head>

<body>
  <div>
    <form action="" method="post">
      <div class="row mb-3">
        <label for="username" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="l_uname" id="l_uname">
          <span class="error l_uname"></span>
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" name="l_pswd" id="l_pswd">
        </div>
      </div>
      <div class="col-sm-2 col-form-label" id="err-msg">
        <?= $error_message ?>
      </div>
      <input type="hidden" name="hidden" value="ok">
      <button type="submit" class="btn btn-primary" name="login-btn">Login</button>
      <button class="btn btn-primary" style="text-decoration:"> <a href="RegForm.php"
          style="color:white; text-decoration:none">Register</a></button>
    </form>
  </div>

  <script>
    jQuery(document).on("submit", "form", function (e) {
      e.preventDefault();

      var l_uname = jQuery("#l_uname").val();
      if (l_uname == undefined || l_uname == "") {
        console.log("sfsdf");
        $("span.l_uname").html("this field is required");
      } else {
        this.submit();
      }

      console.log("ok");

    });
  </script>

</body>

</html>