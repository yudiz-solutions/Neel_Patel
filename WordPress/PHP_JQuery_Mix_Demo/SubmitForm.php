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
    if (isset($_POST['hobby'])) {
        foreach ($_POST['hobby'] as $checked) {
            $chk_hobby .= $checked . ",";
        }
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
            $res = [
                'id' => 1,
                'message' => "ADDED SUCCESSFULLY"
            ];
            echo json_encode($res);
            return;
        } else {
            // $res = $conn->error;
            $res = [
                'id' => 0,
                'message' => "Error"
            ];
            echo json_encode($res);
            return;
        }
    } elseif ($pswd !== $cpswd) {

        $res = [
            'c_pswd' => "Check your entered password!!",
            'status' => false,
        ];
        echo json_encode($res);
    } elseif ($fname == "") {

        $res = [
            'fname' => "Enter Firstname!!",
            'status' => false,
        ];
        echo json_encode($res);
    } elseif ($lname == "") {
        $res = [
            'lname' => "Enter Lastname!!",
            'status' => false,
        ];
        echo json_encode($res);
    }
}
?>