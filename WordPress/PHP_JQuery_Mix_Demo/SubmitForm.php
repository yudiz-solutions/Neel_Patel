<?php
include 'DBconn.php';

if (isset($_POST["form_submit"])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $country = $_POST['country'];
    $message = $_POST['message'];

    $chk_hobby = "";
    foreach ($_POST['hobby'] as $checked) {
        $chk_hobby .= $checked . ",";
    }

    $filename = $_FILES['img']['name'];
    $file_extension = pathinfo($filename, PATHINFO_EXTENSION);

    $pswd = $_POST['pswd'];
    $cpswd = $_POST['c_pswd'];

    if ($pswd == $cpswd) {
        //INSERT QUERY
        $isql = "INSERT INTO wp_form (fname, lname, uname, email, password, gender, dob, country, hobby, message, profile) VALUES ('$fname', '$lname', '$uname', '$email', '$pswd', '$gender', '$dob', '$country', '$chk_hobby', '$message', '$filename')";
        if ($conn->query($isql) == true) {
            move_uploaded_file($_FILES['img']['tmp_name'], "uploads/" . $_FILES['img']['name']);
            echo "<script> alert ('ADDED SUCCESSFULLY')</script>";
        } else {
            echo $conn->error;
        }
    } else {
        echo "Check your entered password!!";
    }
}
?>