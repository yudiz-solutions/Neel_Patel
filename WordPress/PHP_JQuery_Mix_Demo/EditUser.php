<?php
include "DBconn.php";

if (isset($_GET["u_id"])) {
    $id = $_GET['u_id'];
    $select_sql = "SELECT * FROM wp_form WHERE id = '$id'";
    // $select_sql = "SELECT *,c.name AS country_name, s.name AS state_name, ct.name AS city_name FROM core_form JOIN core_countries AS c ON c.id = core_form.country JOIN core_states AS s ON s.id = core_form.state JOIN core_cities AS ct ON ct.id = core_form.city WHERE core_form.id = '$id'";

    $result = $conn->query($select_sql);
    // print_r($result);
// die;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // print_r($row);
            // die;
            $e_id = $row['id'];
            $e_fname = $row['fname'];
            $e_lname = $row['lname'];
            $e_uname = $row['uname'];
            $e_email = $row['email'];
            $e_password = $row['password'];
            $e_gender = $row['gender'];
            $e_dob = $row['dob'];
            $e_country = $row['country'];
            $e_hobby = $row['hobby'];
            $e_message = $row['message'];
            $e_profile = $row['profile'];
        }
    }

}
?>

<div class="container" style="background-color: aliceblue">
    <h1 class="form-outline mb-4" id="form-head">INSERT NEW USER DATA</h1>
    <form action="" method="post" id="regForm" enctype="multipart/form-data">

        <!-- ID Hidden Value -->
        <input type="hidden" value="<?= $e_id ?>" name="id" />

        <!-- Firstname -->
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Firstname</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="fname" value="<?= $e_fname ?>">
            </div>
        </div>

        <!-- Lastname -->
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Lastname</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="lname" value="<?= $e_lname ?>">
            </div>
        </div>

        <!-- Username -->
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="uname" value="<?= $e_uname ?>">
            </div>
        </div>

        <!-- Email -->
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-8">
                <input type="email" class="form-control" name="email" value="<?= $e_email ?>">
            </div>
        </div>

        <!-- Password -->
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" name="pswd" value="<?= $e_password ?>">
            </div>
        </div>

        <!-- Confirm Password -->
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Confirm Password</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" name="c_pswd">
            </div>
        </div>

        <!-- DOB Password -->
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Birthdate</label>
            <div class="col-sm-8">
                <input type="date" class="form-control" name="dob" value="<?= $e_dob ?>">
            </div>
        </div>

        <!-- Gender -->
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
            <div class="col-sm-8" id="selectors">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="male" <?php if ($e_gender == "male")
                        echo 'checked="checked"'; ?>>
                    <label class="form-check-label" for="gender8">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="female" <?php if ($e_gender == "female")
                        echo 'checked="checked"'; ?>>
                    <label class="form-check-label" for="gender">
                        Female
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="other" <?php if ($e_gender == "other")
                        echo 'checked="checked"'; ?>>
                    <label class="form-check-label" for="gender">
                        Other
                    </label>
                </div>
            </div>
        </fieldset>

        <!-- Hobby -->
        <div class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Hobby</legend>
            <div class="col-sm-8">
                <?php
                //Str to Arr for social media checkbox
                $checked_val = explode(',', $e_hobby);
                // print_r($b);
                ?>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="hobby[]" value="h1" <?php if (in_array('h1', $checked_val))
                        echo "Checked"; ?>>
                    <label class="form-check-label" for="gridCheck1">
                        h1
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="hobby[]" value="h2" <?php if (in_array('h2', $checked_val))
                        echo "Checked"; ?>>
                    <label class=" form-check-label" for="gridCheck1">
                        h2
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="hobby[]" value="h3" <?php if (in_array('h3', $checked_val))
                        echo "Checked"; ?>>
                    <label class=" form-check-label" for="gridCheck1">
                        h3
                    </label>
                </div>
            </div>
        </div>

        <!-- Country input -->
        <div class="row mb-3">
            <div class="form-outline ">
                <label class="col-sm-2 col-form-label">Country</label>
                <select name="country" id="country-dropdown">
                    <option value="">Select Country</option>
                    <option value="India">India</option>
                    <option value="USA">USA</option>
                    <option value="Australia">Australia</option>
                    <option value="Canada">Canada</option>
                </select>
            </div>
        </div>

        <!-- Message -->
        <div class="row mb-3">
            <div class="form-outline">
                <label class="col-sm-2 col-form-label">Message</label>
                <textarea name="message" rows="4" cols="50"><?= $e_message ?></textarea>
            </div>
        </div>

        <!-- Profile Image -->
        <div class="row mb-3">
            <div class="form-outline ">
                <label class="col-sm-2 col-form-label">Profile Image</label>
                <!-- <input type="file" name="img"> -->
                <input type="file" name="img">
                <input type="hidden" name="img_old" value="<?= $e_profile ?>">
            </div>
        </div>

        <!-- Submit -->
        <div class="row mb-3">
            <button type="submit" class="btn btn-dark btn-block mb-4x" id="form_submit"
                name="form_submit">Submit</button>
        </div>
        <?php
        if (isset($_POST['form_submit'])) {
            $e_id = $_POST['id'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $uname = $_POST['uname'];
            $email = $_POST['email'];
            // $password = $_POST['password'];
            $gender = $_POST['gender'];
            $dob = $_POST['dob'];
            $country = $_POST['country'];
            // $city = $_POST['city'];
            $message = $_POST['message'];

            $hobby_arr = $_POST['hobby'];
            $hobby_str = implode(",", $hobby_arr);

            $new_img = $_FILES['img']['name'];
            $old_img = $_POST['img_old'];

            if ($new_img != '') {
                $update_filename = $_FILES['img']['name'];
            } else {
                $update_filename = $old_img;
            }

            //     $query = "UPDATE students SET name='$name', email='$email', phone='$phone', course='$course'
            // WHERE id='$student_id'";
            $edit_sql = "UPDATE wp_form SET fname = '$fname', lname = '$lname', uname = '$uname', email = '$email', gender = '$gender', dob = '$dob', country = '$country', hobby = '$hobby_str', message = $message, profile = '$update_filename' WHERE id = '$e_id'";
            $query_run = mysqli_query($conn, $edit_sql);

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