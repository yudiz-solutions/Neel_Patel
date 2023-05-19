<?php
include 'DBconn.php';

if (isset($_POST["form_submit"])) {


    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['pswd'];
    $c_password = $_POST['c_pswd'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $country = $_POST['country'];
    $message = $_POST['message'];

    $chk_hobby = "";
    if (isset($_POST['hobby'])) {
        foreach ($_POST['hobby'] as $checked) {
            $chk_hobby .= $checked . ",";
        }
    }

    $filename = $_FILES['img']['name'];
    $file_extension = pathinfo($filename, PATHINFO_EXTENSION);

    $pswd = $_POST['pswd'];
    $cpswd = $_POST['c_pswd'];


    $res[] = "";
    $has_error = false;

    if (empty($fname)) {
        $res['fname'] = 'Please enter Firstname';
        $has_error = true;
    }

    if (empty($lname)) {
        $res['lname'] = 'Please enter Lastname';
        $has_error = true;
    }

    if (empty($uname)) {
        $res['uname'] = 'Please enter Username';
        $has_error = true;
    }

    if (empty($email)) {
        $res['email'] = 'Please enter Email';
        $has_error = true;
    }

    if (empty($password)) {
        $res['pswd'] = 'Please enter Password';
        $has_error = true;
    }

    if (empty($c_password)) {
        $res['c_pswd'] = 'Please enter Confirm Password';
        $has_error = true;
    }

    if ($password !== $c_password) {
        $res['c_pswd'] = "Your password and confirmation password do not match.";
        $has_error = true;
    }

    if (!$has_error) {
        //INSERT QUERY
        $isql = "INSERT INTO wp_form (fname, lname, uname, email, password, gender, dob, country, hobby, message, profile) VALUES ('$fname', '$lname', '$uname', '$email', '$pswd', '$gender', '$dob', '$country', '$chk_hobby', '$message', '$filename')";
        if ($conn->query($isql) == true) {
            move_uploaded_file($_FILES['img']['tmp_name'], "uploads/" . $_FILES['img']['name']);
            $res['status'] = true;
        }
    }
    echo json_encode($res);
}
?>