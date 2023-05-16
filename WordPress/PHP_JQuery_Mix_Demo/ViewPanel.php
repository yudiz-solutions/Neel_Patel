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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <title>View Panel</title>
</head>
<style>
    h2 {
        text-align: center;
    }

    a {
        color: black;
    }

    #AddEmpBtn {
        float: left;
        margin-top: 4px;
    }

    .mycustomform {
        display: none;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        position: fixed;
        height: 80vh;
        width: 80vw;
        overflow: auto;
        z-index: 2;
    }

    .overlay {
        display: none;
        z-index: 1;
        background: #00000020;
        display: none;
        position: fixed;
        left: 0;
        top: 0;
        width: 100vw;
        height: 100vh;
    }
</style>

<body>
    <?php

    if (isset($_POST['searchBtn'])) {
        // echo "HELLO";
        $searchBar = $_POST['keyword'];
        // echo $searchBar;
        //SEARCH QUERY
        $vsql = "SELECT id, fname, lname, uname, email, gender, dob, country, hobby, message, profile FROM wp_form WHERE uname LIKE '%$searchBar%'";
    } else {
        //VIEW QUERY
        $vsql = "SELECT * FROM wp_form";
        // echo $vsql;
        // die;
    }

    if ($result = $conn->query($vsql)) {
        ?>
        <table class="table">
            <thead class="table-dark">
                <th>
                    <button id="AddEmpBtn" class="btn btn-info" onclick="window.location.href = 'RegForm.php';"> ADD NEW
                        USER </a></button>
                    <h2>USER DETAILS</h2>
                    <table id="searchTbl" class="table">
                        <thead class="table-dark">
                            <th>
                                <form action="ViewPanel.php" method="POST">
                                    <input type="text" name="keyword" placeholder="Search">
                                    <input type="submit" name="searchBtn" value="SEARCH">
                                </form>
                            </th>
                        </thead>
                    </table>

                </th>
            </thead>
        </table>
        <table class="table" id="view-table">
            <thead class="table-dark">
                <tr>
                    <th> ID </th>
                    <th> FIRSTNAME </th>
                    <th> LASTNAME </th>
                    <th> USERNAME </th>
                    <th> EMAIL </th>
                    <th> GENDER </th>
                    <th> DOB </th>
                    <th> COUNTRY </th>
                    <th> HOBBY </th>
                    <th> MESSAGE </th>
                    <th> PROFILE </th>
                    <th> ACTION </th>
                </tr>
            </thead>

            <?php
            //Displaying result in the form of table
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td>
                        <?= $row["id"] ?>
                    </td>
                    <td>
                        <?= $row["fname"] ?>
                    </td>
                    <td>
                        <?= $row["lname"] ?>
                    </td>
                    <td>
                        <?= $row["uname"] ?>
                    </td>
                    <td>
                        <?= $row["email"] ?>
                    </td>
                    <td>
                        <?= $row["gender"] ?>
                    </td>
                    <td>
                        <?= $row["dob"] ?>
                    </td>
                    <td>
                        <?= $row["country"] ?>
                    </td>
                    <td>
                        <?= $row["hobby"] ?>
                    </td>
                    <td>
                        <?= $row["message"] ?>
                    </td>
                    <td>
                        <img src="<?= 'uploads/' . $row['profile'] ?>" width="100px" alt="profile_pic">
                    </td>
                    <td>

                        <!-- DELETE Button -->
                        <button class="btn btn-danger" value="<?= $row["id"] ?>">DELETE</button>
                        <script>



                            $(document).on('click', '#dlt_btn', function (e) {
                                e.preventDefault();

                                if (confirm('Are you sure you want to delete this data?')) {
                                    var dID = $(this).val();
                                    // console.log(dID); //3
                                    $.ajax({
                                        type: "POST",
                                        url: "DeleteUser.php",
                                        data: {
                                            'dlt_btn': true,
                                            'dID': dID
                                        },
                                        success: function (response) {
                                            console.log(response);
                                            var res = jQuery.parseJSON(response);
                                            if (res.d_id == 0) {
                                                alert(res.message);
                                                die();
                                            } else {
                                                alert(res.message);
                                                $('#view-table').load(location.href + " #view-table");
                                            }
                                        }
                                    });
                                }
                                die();
                            });
                        </script>
                        <div class="overlay"></div>
                        <!-- EDIT Button -->
                        <button class="btn btn-danger edit-btn" value="<?= $row["id"] ?>">EDIT</button>
                    </td>
                </tr>
                <!-- EDIT FORM -->
                <div class="container mycustomform" style="background-color: aliceblue">
                    <h1 class="form-outline mb-4" id="form-head">UPDATE USER DATA</h1>
                    <form action="" method="post" class="updt-form" id='<?= $row["id"] ?>' enctype="multipart/form-data">

                        <input type="hidden" name="id" id="e_id" />

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Firstname</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control fname" name="efname" id="e_fname">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Lastname</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control lname" name="elname">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control uname" name="euname">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control email" name="eemail">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control pswd" name="epswd">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Confirm Password</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" name="c_pswd">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Birthdate</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control dob" name="edob">
                            </div>
                        </div>

                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                            <div class="col-sm-8" id="selectors">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="egender" value="male">
                                    <label class="form-check-label" for="gender8">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="egender" value="female">
                                    <label class="form-check-label" for="gender">
                                        Female
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="egender" value="other">
                                    <label class="form-check-label" for="gender">
                                        Other
                                    </label>
                                </div>
                            </div>
                        </fieldset>

                        <div class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Hobby</legend>
                            <div class="col-sm-8">
                                <?php
                                //Str to Arr for social media checkbox
                                // $checked_val = explode(',', $e_hobby);
                                // print_r($b);
                                ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="ehobby[]" value="h1">
                                    <label class="form-check-label" for="gridCheck1">
                                        h1
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="ehobby[]" value="h2">
                                    <label class=" form-check-label" for="gridCheck1">
                                        h2
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="ehobby[]" value="h3">
                                    <label class=" form-check-label" for="gridCheck1">
                                        h3
                                    </label>
                                </div>
                            </div>
                        </div>

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

                        <div class="row mb-3">
                            <div class="form-outline">
                                <label class="col-sm-2 col-form-label">Message</label>
                                <textarea name="message" rows="4" cols="50"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="form-outline ">
                                <label class="col-sm-2 col-form-label">Profile Image</label>
                                <input type="file" name="img">
                                <input type="hidden" name="img_old">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <button type="submit" class="btn btn-dark btn-block mb-4x updt_btn" name="updt_btn">UPDATE</button>
                        </div>

                        <!-- Error Msg -->
                        <div id="err-msg">
                    </form>
                </div>


                <script>
                    $(document).on('click', '.edit-btn', function (e) {
                        e.preventDefault();

                        //Invoking form
                        $(this).next(".mycustomform").show();
                        $(".overlay").show();

                        var eID = $(this).val(); //done
                        // alert(eID);
                        // die();
                        $.ajax({
                            type: "GET",
                            url: "EditUser.php?u_id=" + eID,
                            success: function (response) {
                                // console.log(url);
                                // die();
                                console.log(response);
                                var res = jQuery.parseJSON(response);
                                // console.log(res.fname);

                                if (res.statusID == 0) {
                                    alert(res.message);
                                    // die();
                                } else {
                                    console.log(res.data.id);
                                    $('#e_id').val(res.data.id);
                                    // $('#e_fname').val(res.data.fname);
                                    // console.log(eID);
                                    $(`#${eID} .fname`).val(res.data.fname);
                                    $(`#${eID} .lname`).val(res.data.lname);
                                    $(`#${eID} .uname`).val(res.data.uname);
                                    $(`#${eID} .email`).val(res.data.email);
                                    $(`#${eID} .pswd`).val(res.data.password);
                                    $(`#${eID} .dob`).val(res.data.dob);
                                }
                            }
                        });

                        $(document).on('submit', '.updt-form', function (e) {
                            console.log("OHOOHOOO");
                            die();
                            e.preventDefault();

                            var updateFormData = new FormData(this);
                            updateFormData.append("updt_btn", true);

                            $.ajax({
                                type: "POST",
                                url: "EditUser.php",
                                data: updateFormData,
                                processData: false,
                                contentType: false,
                                success: function (response) {

                                    var res = jQuery.parseJSON(response);
                                    // console.log(res);
                                    if (res.u_id == 0) {
                                        $('#err-msg').text(res.message);
                                    } else if (res.u_id == 1) {
                                        $('#err-msg').text(res.message);
                                        $('.updt-form')[0].reset();
                                        // $(".mycustomform").hide();
                                        // $(".overlay").hide();
                                    }
                                }
                            });
                        });
                        // die();
                    });
                </script>

                <?php
            }
            ?>
        </table>
        <?php
    } else {
        echo "Error!", $conn->error;
    }
    ?>
</body>

</html>