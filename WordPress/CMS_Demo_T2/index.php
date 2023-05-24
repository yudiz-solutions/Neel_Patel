<?php
session_start();

include "common/DBconn.php";

$error_message = "";

if (isset($_POST['hidden'])) {

    $l_uname = $_POST['l_uname'];
    $l_pswd = $_POST['l_pswd'];

    $sql = "SELECT * FROM wp_form WHERE uname = '$l_uname' AND password = '$l_pswd'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {

        $_SESSION['l_uname'] = $l_uname;
        $_SESSION['logged_in'] = true;

        header('Location: view/dashboard.php');
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
    <!-- JQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <title>LOGIN</title>
    <style>
        /* .form-control {
            width: initial;
        } */

        #err-msg,
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <h3 class="mb-5">LOGIN</h3>
                            <form action="" method="post">
                                <div class="form-outline mb-4">
                                    <input type="text" class="form-control form-control-lg" name="l_uname" id="l_uname"
                                        placeholder="Username">
                                    <span class="error l_uname"></span>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" class="form-control form-control-lg" name="l_pswd"
                                        id="l_pswd" placeholder="Password">
                                    <span class="error l_pswd"></span>
                                </div>

                                <div class="col-sm-2 col-form-label" id="err-msg">
                                    <?= $error_message ?>
                                </div>

                                <input type="hidden" name="hidden" value="ok">

                                <button class="btn btn-primary btn-lg btn-block" type="submit"
                                    name="login-btn">Login</button>
                                <button class="btn btn-lg btn-primary" style="text-decoration:"> <a href="RegForm.php"
                                        style="color:white; text-decoration:none">Register</a></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        jQuery(document).on("submit", "form", function (e) {
            e.preventDefault();

            var l_uname = jQuery("#l_uname").val();
            if (l_uname == undefined || l_uname == "") {
                $("span.l_uname").html("Username is required");
            }

            var l_pswd = jQuery("#l_pswd").val();
            if (l_pswd == undefined || l_pswd == "") {
                $("span.l_pswd").html("Password is required");
            }

            else {
                this.submit();
            }

            console.log("ok");

        });
    </script>

</body>

</html>