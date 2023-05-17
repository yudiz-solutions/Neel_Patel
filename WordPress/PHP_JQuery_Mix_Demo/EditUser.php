<?php
include "DBconn.php";

if (isset($_GET["u_id"])) {
    $id = $_GET['u_id'];
    $select_sql = "SELECT * FROM wp_form WHERE id = '$id'";

    $query_run = mysqli_query($conn, $select_sql);

    // echo "<pre>";
    // print_r(mysqli_fetch_array($query_run, MYSQLI_ASSOC));
    // echo "</pre>";
    // exit;

    if (mysqli_num_rows($query_run) == 1) {
        $user = mysqli_fetch_array($query_run, MYSQLI_ASSOC);

        $res = [
            'statusID' => 1,
            'message' => 'User Fetch Successfully by id',
            'data' => $user
        ];
        echo json_encode($res);
        return;
    } else {
        $res = [
            'statusID' => 0,
            'message' => 'User Id Not Found'
        ];
        echo json_encode($res);
        return;
    }

}
?>

<?php
if (isset($_POST['updt_btn'])) {

    $e_id = isset($_POST['id']) ? $_POST['id'] : '';
    $fname = isset($_POST['e_fname']) ? $_POST['e_fname'] : '';

    $lname = isset($_POST['e_lname']) ? $_POST['e_lname'] : '';
    $uname = isset($_POST['e_uname']) ? $_POST['e_lname'] : '';
    $email = isset($_POST['e_email']) ? $_POST['e_email'] : '';
    $password = isset($_POST['e_password']) ? $_POST['e_password'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $dob = isset($_POST['e_dob']) ? $_POST['e_dob'] : '';
    $country = isset($_POST['e_country']) ? $_POST['e_country'] : '';
    $message = isset($_POST['e_message']) ? $_POST['e_message'] : '';
    $hobby_arr = $_POST['hobby'];
    $hobby_str = implode(",", $hobby_arr);

    $new_img = $_FILES['img']['name'];
    $old_img = $_POST['e_img_old'];

    if ($new_img != '') {
        $update_filename = $_FILES['img']['name'];
    } else {
        $update_filename = $old_img;
    }

    //////////////////////////////////////////////////

    // $updateQu = "";
    // $updateQu .= "UPDATE wp_form SET ";

    // if ($fname) {
    //     $updateQu .= "fname = '$fname' ";
    // }
    // if ($lname) {
    //     $updateQu .= "lname = '$lname' ";
    // }
    // if ($uname) {
    //     $updateQu .= "uname = '$uname' ";
    // }

    // if ($email) {
    //     $updateQu .= "email = '$email' ";
    // }

    // if ($password) {
    //     $updateQu .= "password = '$password' ";
    // }

    // if ($gender) {
    //     $updateQu .= "gender = '$gender' ";
    // }

    // if ($dob) {
    //     $updateQu .= "dob = '$dob' ";
    // }

    // if ($country) {
    //     $updateQu .= "country = '$country' ";
    // }

    // if ($message) {
    //     $updateQu .= "message = '$message' ";
    // }

    // if ($hobby_str) {
    //     $updateQu .= "hobby = '$hobby_str' ";
    // }

    // if ($updt_filename) {
    //     $updateQu .= "hobby = '$hobby_str' ";
    // }

    // $updateQu .= " WHERE id = '$e_id'";


    $edit_sql = "UPDATE wp_form SET fname = '$fname', lname = '$lname', uname = '$uname', email = '$email', password = '$password', gender = '$gender', dob = '$dob', country = '$country', hobby = '$hobby_str', message = '$message', profile = '$update_filename' WHERE id = '$e_id'";
    $query_run = mysqli_query($conn, $edit_sql);
    if ($query_run = true) {
        if ($_FILES['img']['name'] != '') {
            move_uploaded_file($_FILES['img']['tmp_name'], "uploads/" . $_FILES['img']['name']);
            unlink("uploads/" . $old_img);
        }
    }
    // print_r($query_run);
    // die();

    if ($query_run) {

        $res = [
            'u_id' => 1,
            'message' => 'Student Updated Successfully'
        ];
        echo json_encode($res);
        return;
    } else {
        $res = [
            'u_id' => 0,
            'message' => 'Student Not Updated'
        ];
        echo json_encode($res);
        return;
    }
}

?>