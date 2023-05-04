<?php
//DB Connection
include "dbConn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>form_FORM</title>
    <style>
    .error {
        color: red;
    }

    .form-control {
        width: unset;
    }

    h1 {
        : center;
    }

    </style>
</head>
<body>
    <?php

//When Submit button is pressed
if (isset($_POST['submit'])) {
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

    $img_to_be_uploaded = '';
    if (!empty($_FILES['profile']['name'])) {
        $target_dir = "Profilepics/";
        $target_file = $target_dir . basename($_FILES["profile"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["profile"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["profile"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file)) {
                echo "The file ". htmlspecialchars( basename( $_FILES["profile"]["name"])). " has been uploaded.";
                $img_to_be_uploaded = basename( $_FILES["profile"]["name"]);
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
    

    //INSERTION QUERY
        $isql = "INSERT INTO core_form (fname, lname, uname, email, password, gender, country, state, city, bio, profile, social_media) VALUES ('$fname', '$lname', '$uname', '$email', '$password', '$gender', '$country', '$state', '$city', '$bio', '$img_to_be_uploaded', '$chk_social')";
        if ($conn -> query($isql) == true) {
            echo "<script> alert ('ADDED SUCCESSFULLY')</script>";
        } else {
            echo $conn->error;
        }
    }

?>
    <!-- ADD FORM -->
    <div class = "container" style = "background-color: aliceblue">
        <h1 class="form-outline mb-4" style = "background-color: khaki">INSERT USER DATA</h1>
        <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "post" enctype="multipart/form-data">
            
            <!-- First name input -->
            <div>
                    <div class="form-outline row mb-3" >
                        <label class="form-label col-5">First name</label>
                        <input type="text" class="form-control col-6" name = "fname" />
                    </div>
                </div>

            <!-- Last name input -->
                <div>
                    <div class="form-outline row mb-3" >
                        <label class="form-label col-5">Last name</label>
                        <input type="text" class="form-control col-6" name = "lname" />
                    </div>
                </div>

            <!-- Username input -->
                <div>
                    <div class="form-outline row mb-3" >
                        <label class="form-label col-5">User</label>
                        <input type="text" class="form-control col-6" name = "uname" />
                    </div>
                </div>

            <!-- Email input -->
                <div>
                    <div class="form-outline row mb-3 ">
                        <label class="form-label col-5">Email</label>
                        <input type="text" class="form-control col-6" name = "email" />
                    </div>
                </div>

            <!-- Password input -->
                <div>
                    <div class="form-outline row mb-3">
                        <label class="form-label col-5">Password</label>
                        <input type="password" class="form-control col-6" name = "password" />
                    </div>
                </div>

            <!-- Gender input -->
                <div>
                    <div class="form-outline row mb-3">
                        <label class="form-label col-5">Gender</label><br>
                        <div class="col-7">
                            <div >
                                <input type="radio" name="gender" value="Male">
                                <label for="Male"> Male </label>
                            </div>
                            
                            <div >
                                <input type="radio" name="gender" value="Female">
                                <label for="Female"> Female </label>
                            </div>
                                
                            <div >
                                <input type="radio" name="gender" value="Other">
                                <label for="Other"> Other </label>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- Country input -->
                <div class = "row mb-3">
                    <div class="form-outline ">
                        <label class="form-label col-5">Country</label>
                        <select name="country">
                            <option value="India">India</option>
                            <option value="Australia">Australia</option>
                            <option value="Canada">Canada</option>
                            <option value="Japan">Japan</option>
                        </select>
                    </div>
                </div>

            <!-- State input -->
                <div class = "row mb-3">
                    <div class="form-outline">
                        <label class="form-label col-5">State</label>
                        <select name="state" id="#">
                            <option value="Gujrat">Gujrat</option>
                            <option value="Rajsthan">Rajsthan</option>
                            <option value="Maharashtra"> Maharashtra</option>
                            <option value="Kerla">Kerla</option>
                        </select>
                    </div>
                </div>

            <!-- City input -->
                <div class = "row mb-3">
                    <div class="form-outline">
                        <label class="form-label col-5">City</label>
                        <select name="city" id="#">
                            <option value="Ahmedabad">Ahmedabad</option>
                            <option value="Vadodara">Vadodara</option>
                            <option value="Surat"> Surat</option>
                            <option value="Jamnagar">Jamnagar</option>
                        </select>
                    </div>
                </div>

            <!-- Bio input -->
                <div class = "row mb-3">
                    <div class="form-outline">
                        <label class="form-label col-5">Bio</label>
                        <textarea id="bio" name="bio" rows="4" cols="50"></textarea>
                    </div>
                </div>

            <!-- Profile input -->
                <div class = "row mb-3">
                    <div class="form-outline ">
                        <label class="form-label col-5">Profile</label>
                        <input type="file" name="profile">
                    </div>
                </div>

            <!-- Active social media input -->
                <div class = "row mb-3">
                    <div class="form-outline row mb-3">
                        <label class="form-label col-5">Active social media</label><br>
                        <div class="col-7">
                            <div >
                                <input type="checkbox" id="ig" name="social[]" value="instagram">
                                <label for="ig"> Instagram </label><br>
                            </div>
                            
                            <div >
                                <input type="checkbox" id="twt" name="social[]" value="twitter">
                                <label for="ig"> Twitter </label><br>
                            </div>
                                
                            <div >
                                <input type="checkbox" id="lin" name="social[]" value="linkedin">
                                <label for="ig"> LinkedIn </label><br>
                            </div>

                            <div >
                                <input type="checkbox" id="fb" name="social[]" value="facebook">
                                <label for="ig"> Facebook </label><br>
                            </div>

                            <div >
                                <input type="checkbox" id="wp" name="social[]" value="whatsapp">
                                <label for="ig"> WhatsApp </label><br>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- Submit button -->
                <div class = "row mb-3">
                    <input type = "submit" class = "btn btn-primary btn-block mb-4" name = "submit" value = "ADD">
                </div>
            
            <!-- View button -->
                <div class = "row mb-3">
                    <input type="button" class = "btn btn-primary btn-block mb-4" value="VIEW" onClick="document.location.href='form_VIEW.php'"/>
                <div>
        </form>
    <div>
</body>
</html>