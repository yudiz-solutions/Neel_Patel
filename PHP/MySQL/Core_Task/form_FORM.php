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
    <title>CORE_FORM</title>
    <style>
    .error {
        color: red;
    }

    .form-control {
        width: unset;
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
    $profile = $_POST['profile'];
    $social = $_POST['social'];
    
    
    //INSERTION QUERY
    
        $isql = "INSERT INTO core_form (fname, lname, uname, email, password, gender, country, state, city, bio, profile, social_media) VALUES ('$fname', '$lname', '$uname', '$email', '$password', '$gender', '$country', '$state', '$city', '$bio', '$profile', '$social')";
        if ($conn -> query($isql) == true) {
            echo "<script> alert ('ADDED SUCCESSFULLY')</script>";
        } else {
            echo $conn->error;
        }
    }

?>
    <!-- ADD FORM -->
    <div class= "container">
        <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "post">
            
            <!-- <div class="row mb-4"> -->
            
            <!-- First name input -->
            <div>
                    <div class="form-outline row" >
                        <label class="form-label col-5">First name</label>
                        <input type="text" class="form-control col-6" name = "fname" />
                    </div>
                </div>

            <!-- Last name input -->
                <div>
                    <div class="form-outline row" >
                        <label class="form-label col-5">Last name</label>
                        <input type="text" class="form-control col-6" name = "lname" />
                    </div>
                </div>

            <!-- Username input -->
                <div>
                    <div class="form-outline row" >
                        <label class="form-label col-5">User</label>
                        <input type="text" class="form-control col-6" name = "uname" />
                    </div>
                </div>

                <!-- Email input -->
                <div>
                    <div class="form-outline row ">
                        <label class="form-label col-5">Email</label>
                        <input type="text" class="form-control col-6" name = "email" />
                    </div>
                </div>

                <!-- Password input -->
                <div>
                    <div class="form-outline row">
                        <label class="form-label col-5">Password</label>
                        <input type="password" class="form-control col-6" name = "password" />
                    </div>
                </div>

                <!-- Gender input -->
                <div>
                    <div class="form-outline row">
                        <label class="form-label col-5">Gender</label><br>
                        
                        <input type="radio" class="form-control col-6" id="m" name="gender" value="Male">
                        <label for="html" class="form-label col-5">Male</label><br>
                        
                        <input type="radio" class="form-control col-6" id="f" name="gender" value="Female">
                        <label for="css" class="form-label col-5">Female</label><br>
                        
                        <input type="radio" class="form-control col-6" id="o" name="gender" value="Other">
                        <label for="javascript" class="form-label col-5">Other</label>
                    </div>
                </div>

                <!-- Country input -->
                <div>
                    <div class="form-outline ">
                        <label class="form-label col-5">Country</label>
                        <select name="country" id="#">
                            <option value="India">India</option>
                            <option value="Australia">Australia</option>
                            <option value="Canada">Canada</option>
                            <option value="Japan">Japan</option>
                        </select>
                    </div>
                </div>

                <!-- State input -->
                <div>
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
                <div>
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
                <div>
                    <div class="form-outline">
                        <label class="form-label col-5">Bio</label>
                        <textarea id="bio" name="bio" rows="4" cols="50"></textarea>
                    </div>
                </div>

                <!-- Profile input -->
                <div>
                    <div class="form-outline">
                        <label class="form-label col-5">Profile</label>
                        <input type="file" id="profile" name="profile">
                    </div>
                </div>

                <!-- Active social media input -->
                <div>
                    <div class="form-outline row">
                        <label class="form-label col-5">Active social media</label>
                        <input class="form-control col-6" type="checkbox" id="ig" name="social" value="Instagram">
                        <label for="ig" class="form-label col-5"> Instagram </label><br>
                        <input class="form-control col-6" type="checkbox" id="twtr" name="social" value="Twitter">
                        <label for="twtr" class="form-label col-5"> Twitter </label><br>
                        <input class="form-control col-6" type="checkbox" id="lkdin" name="social" value="LinkedIn">
                        <label for="lkdin" class="form-label col-5"> LinkedIn </label><br>
                        <input class="form-control col-6" type="checkbox" id="fb" name="social" value="Facebook">
                        <label for="fb" class="form-label col-5"> Facebook</label><br>
                        <input class="form-control col-6" type="checkbox" id="wp" name="social" value="WhatsApp">
                        <label for="wp" class="form-label col-5"> WhatsApp</label><br>
                    </div>
                <!-- </div> -->

            <br>

            <!-- Submit button -->
                <input type = "submit" class = "btn btn-primary btn-block mb-4" name = "submit" value = "ADD">
            
                <br>

                <!-- View button -->
                <input type="button" class = "btn btn-primary btn-block mb-4" value="View" onClick="document.location.href='form_VIEW.php'"/>
                <div>
        </form>
          <div>
</body>
</html>