<?php
//DB Connection
include "DBconn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form_EDIT</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .error {
            color: red;
        }

        #updt-head {
            background-color: #212529;
            color: white;
            text-align: center;
        }

        .form-outline {
            padding-left: 12px;
            padding-right: 12px;
        }

        .form-label {
            padding-left: 0px;
        }
    </style>
</head>

<body>
    <?php

    //When EDIT button is pressed
    if (isset($_POST['updt_user_btn'])) {
        $updtid = $_POST['id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $country = $_POST['country'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $bio = $_POST['bio'];
        $social_arr = $_POST['social'];
        $social_str = implode(",", $social_arr);

        $new_profile = $_FILES['profile']['name'];
        $old_profile = $_POST['profile_old'];

        if ($new_profile != '') {
            $update_filename = $_FILES['profile']['name'];
        } else {
            $update_filename = $old_profile;
        }

        //Commenting validations for testing test cases
        // if (file_exists("Profilepics/" . $_FILES['profile']['name'])) {
        //     $filename = $_FILES['profile']['name'];
        //     echo "Image already exists !".$filename;
        // } else {
    
        //UPDATE QUERY
        $edit_sql = "UPDATE core_form SET fname = '$fname', lname = '$lname', uname = '$uname', email = '$email', password = '$password', gender = '$gender', country = '$country', state = '$state', city = '$city', bio = '$bio', profile = '$update_filename', social_media = '$social_str' WHERE id = '$updtid'";
        // echo $edit_sql;
        // die;
        $result = $conn->query($edit_sql);

        if ($result == true) {

            if ($_FILES['profile']['name'] != '') {
                move_uploaded_file($_FILES['profile']['tmp_name'], "Profilepics/" . $_FILES['profile']['name']);
                unlink("Profilepics/" . $old_profile);
            }
            echo "<script> alert ('UPDATED SUCCESSFULLY')</script>";
            header("Location:form_VIEW.php");
        } else {
            echo "Error in updating!!" . $conn->error;
        }
    }
    // }
    
    //GETTING ID FROM URL
    if (isset($_GET['u_id'])) {
        $id = $_GET["u_id"];
        // echo $id;
        // die;
    
        $select_sql = "SELECT * FROM core_form WHERE id = '$id'";
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
                $e_country = $row['country'];
                $e_state = $row['state'];
                $e_city = $row['city'];
                $e_bio = $row['bio'];
                $e_profile = $row['profile'];
                $e_social_media = $row['social_media'];
            }
        }
    }
    ?>

    <!-- UPDATE form -->
    <div class="container" style="background-color: aliceblue">
        <h1 class="form-outline mb-4" id="updt-head" style="background-color: #212529">UPDATE USER DATA</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"
            enctype="multipart/form-data">

            <!-- ID Hidden Value -->
            <input type="hidden" value="<?= $e_id ?>" name="id" />

            <!-- First name input -->
            <div>
                <div class="form-outline row mb-3">
                    <label class="form-label col-5">First name</label>
                    <input type="text" class="form-control col-6" name="fname" value="<?= $e_fname ?>" />
                </div>
            </div>

            <!-- Last name input -->
            <div>
                <div class="form-outline row mb-3">
                    <label class="form-label col-5">Last name</label>
                    <input type="text" class="form-control col-6" name="lname" value="<?= $e_lname ?>" />
                </div>
            </div>

            <!-- Username input -->
            <div>
                <div class="form-outline row mb-3">
                    <label class="form-label col-5">User</label>
                    <input type="text" class="form-control col-6" name="uname" value="<?= $e_uname ?>" />
                </div>
            </div>

            <!-- Email input -->
            <div>
                <div class="form-outline row mb-3 ">
                    <label class="form-label col-5">Email</label>
                    <input type="text" class="form-control col-6" name="email" value="<?= $e_email ?>" />
                </div>
            </div>

            <!-- Password input -->
            <div>
                <div class="form-outline row mb-3">
                    <label class="form-label col-5">Password</label>
                    <input type="password" class="form-control col-6" name="password" value="<?= $e_password ?>" />
                </div>
            </div>

            <!-- Gender input -->
            <div>
                <div class="form-outline row mb-3">
                    <label class="form-label col-5">Gender</label><br>
                    <div class="col-7">
                        <div>
                            <input type="radio" id="m" name="gender" value="Male" <?php if ($e_gender == "Male")
                                echo 'checked="checked"'; ?>>
                            <label for="Male"> Male </label>
                        </div>

                        <div>
                            <input type="radio" id="f" name="gender" value="Female" <?php if ($e_gender == "Female")
                                echo 'checked="checked"'; ?>>
                            <label for="Female"> Female </label>
                        </div>

                        <div>
                            <input type="radio" id="o" name="gender" value="Other" <?php if ($e_gender == "Other")
                                echo 'checked="checked"'; ?>>
                            <label for="Other"> Other </label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Country input -->
            <div class="row mb-3">
                <div class="form-outline ">
                    <label class="form-label col-5">Country</label>
                    <select name="country" id="country-dropdown">
                        <option value="">Select Country</option>
                        <?php
                        $result = mysqli_query($conn, "SELECT * FROM core_countries");
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <option value="<?php echo $row['id']; ?>">
                                <?php echo $row["name"]; ?>
                            </option>
                            <?php
                        }
                        ?>

                    </select>
                </div>
            </div>

            <!-- State input -->
            <div class="row mb-3">
                <div class="form-outline">
                    <label class="form-label col-5">State</label>
                    <select name="state" id="state-dropdown">
                    </select>
                </div>
            </div>

            <!-- City input -->
            <div class="row mb-3">
                <div class="form-outline">
                    <label class="form-label col-5">City</label>
                    <select name="city" id="city-dropdown">
                    </select>
                </div>
            </div>

            <!-- Including AJAX file for Relative dropdown  -->
            <?php include_once 'AJAX_script.php'; ?>

            <!-- Bio input -->
            <div class="row mb-3">
                <div class="form-outline">
                    <label class="form-label col-5">Bio</label>
                    <textarea id="bio" name="bio" rows="4" cols="50"><?= $e_bio ?></textarea>
                </div>
            </div>

            <!-- Profile input -->
            <div class="row mb-3">
                <div class="form-outline ">
                    <label class="form-label col-5">Profile</label>
                    <input type="file" name="profile">
                    <input type="hidden" name="profile_old" value="<?= $e_profile ?>">
                </div>
            </div>

            <!-- Active social media input -->
            <div class="row mb-3">
                <div class="form-outline row mb-3">
                    <label class="form-label col-5">Active social media</label><br>
                    <div class="col-7">
                        <?php
                        //Str to Arr for social media checkbox
                        $checked_val = explode(',', $e_social_media);
                        // print_r($b);
                        ?>
                        <div>
                            <input type="checkbox" id="ig" name="social[]" value="instagram" <?php if (in_array('instagram', $checked_val))
                                echo "Checked"; ?>>
                            <label for="ig"> Instagram </label><br>
                        </div>

                        <div>
                            <input type="checkbox" id="twt" name="social[]" value="twitter" <?php if (in_array('twitter', $checked_val))
                                echo "Checked"; ?>>
                            <label for="ig"> Twitter </label><br>
                        </div>

                        <div>
                            <input type="checkbox" id="lin" name="social[]" value="linkedin" <?php if (in_array('linkedin', $checked_val))
                                echo "Checked"; ?>>
                            <label for="ig"> LinkedIn </label><br>
                        </div>

                        <div>
                            <input type="checkbox" id="fb" name="social[]" value="facebook" <?php if (in_array('facebook', $checked_val))
                                echo "Checked"; ?>>
                            <label for="ig"> Facebook </label><br>
                        </div>

                        <div>
                            <input type="checkbox" id="wp" name="social[]" value="whatsapp" <?php if (in_array('whatsapp', $checked_val))
                                echo "Checked"; ?>>
                            <label for="ig"> WhatsApp </label><br>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Submit button -->
            <div class="row mb-3">
                <input type="submit" class="btn btn-dark btn-block mb-4" name="updt_user_btn" value="UPDATE">
            </div>

            <!-- View button -->
            <div class="row mb-3">
                <input type="button" class="btn btn-dark btn-block mb-4" value="VIEW"
                    onClick="document.location.href='form_VIEW.php'" />
                <div>
        </form>
        <div>

</body>

</html>