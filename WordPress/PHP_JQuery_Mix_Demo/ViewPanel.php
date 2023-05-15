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
</style>

<body>
    <?php

    //VIEW QUERY
    $vsql = "SELECT * FROM wp_form";
    // echo $vsql;
    // die;
    
    if ($result = $conn->query($vsql)) {
        ?>
        <table class="table">
            <thead class="table-dark">
                <th>
                    <button id="AddEmpBtn" class="btn btn-info" onclick="window.location.href = 'RegForm.php';"> ADD NEW
                        USER </a></button>
                    <h2>USER DETAILS</h2>
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
                        <button id="dlt_btn" class="btn btn-danger" value="<?= $row["id"] ?>">DELETE</button>
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

                        <!-- EDIT Button -->
                        <button id="e_user" class="btn btn-info"> <a href="EditUser.php?u_id=<?= $row['id'] ?>"
                                style='text-decoration:none;'> EDIT USER </a></button>
                        <button id="edt_btn" class="btn btn-danger" value="<?= $row["id"] ?>">EDIT</button>
                        <script>
                            $(document).on('click', '#edt_btn', function (e) {
                                e.preventDefault();

                                var eID = $(this).val();
                                alert(eID);
                                die();
                                $.ajax({
                                    type: "POST",
                                    url: "EditUser.php",
                                    data: {
                                        'edt_btn': true,
                                        'eID': eID
                                    },
                                    success: function (response) {
                                        console.log(response);
                                        var res = jQuery.parseJSON(response);
                                        if (res.u_id == 0) {
                                            alert(res.message);
                                            die();
                                        } else {
                                            alert(res.message);
                                            $('#view-table').load(location.href + " #view-table");
                                        }
                                    }
                                });
                                // die();
                            });
                        </script>
                    </td>
                </tr>
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