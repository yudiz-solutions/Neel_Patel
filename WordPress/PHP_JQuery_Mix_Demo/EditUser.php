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
        $student = mysqli_fetch_array($query_run, MYSQLI_ASSOC);

        $res = [
            'statusID' => 1,
            'message' => 'Student Fetch Successfully by id',
            'data' => $student
        ];
        echo json_encode($res);
        return;
    } else {
        $res = [
            'statusID' => 0,
            'message' => 'Student Id Not Found'
        ];
        echo json_encode($res);
        return;
    }

}
?>

<?php
if (isset($_POST['updt_btn'])) {

    $e_id = isset($_POST['id']) ? $_POST['id'] : '';
    $fname = isset($_POST['efname']) ? $_POST['efname'] : '';

    $lname = isset($_POST['elname']) ? $_POST['elname'] : '';
    $uname = $_POST['euname'];
    $email = $_POST['eemail'];
    // $password = $_POST['password'];
    $gender = $_POST['egender'];
    $dob = $_POST['edob'];
    $country = $_POST['ecountry'];
    // $city = $_POST['city'];
    $message = $_POST['emessage'];

    $hobby_arr = $_POST['ehobby'];
    $hobby_str = implode(",", $hobby_arr);

    $new_img = $_FILES['img']['name'];
    $old_img = $_POST['img_old'];

    if ($new_img != '') {
        $update_filename = $_FILES['img']['name'];
    } else {
        $update_filename = $old_img;
    }

    $updateQu = "";
    $updateQu .= "UPDATE wp_form SET ";

    if ($fname) {
        $updateQu .= "fname = '$fname' ";
    }
    if ($lname) {
        $updateQu .= "lname = '$fname' ";
    }
    if ($uname) {
        $updateQu .= "uname = '$fname' ";
    }

    // if ($fname) {
    //     $updateQu .= "fname = $fname";
    // }


    $updateQu .= " WHERE id = '$e_id'";


    // $edit_sql = "UPDATE wp_form SET fname = '$fname', lname = '$lname', uname = '$uname', email = '$email', gender = '$gender', dob = '$dob', country = '$country', hobby = '$hobby_str', message = $message, profile = '$update_filename' WHERE id = '$e_id'";
    // print_r($updateQu);
    $query_run = mysqli_query($conn, $updateQu);

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