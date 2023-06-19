<?php
//DB Connection
include "dbConn.php";
$userID = $_GET['u_id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>post_VIEW</title>
</head>
<style>
    h2 {
        text-align: center;
        display: inline-block;
        margin-left: 650px;
        margin-top: 8px;
    }

    .head-button {
        display: inline-block;
        padding-bottom: 8px;
    }


    a {
        text-decoration: none;
        color: white;
    }

    #AddEmpBtn {
        float: left;
    }
</style>

<body>
    <?php

    //VIEW QUERY
    $vsql = "SELECT * FROM core_post WHERE user_id = '$userID'";
    // }
    
    if ($result = $conn->query($vsql)) {
        ?>
        <table class="table">
            <thead class="table-dark">
                <th>
                    <div class="head-button">
                        <button class="btn btn-info" onclick="window.location.href = 'post_FORM.php?u_id=<?= $userID ?>';">
                            ADD POST </a></button>
                        <button class="btn btn-info" onclick="window.location.href = 'FORM_view.php';"> HOME </a></button>
                    </div>
                    <h2>POST DETAILS</h2>
                </th>
            </thead>
        </table>
        <?php
        //Displaying result in the form of table
        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="container">

                <div class="card-group">
                    <div class="card">
                        <img src="<?= 'Postpics/' . $row['p_img'] ?>" class="card-img-top" alt="postImg">
                        <div class="card-body">
                            <p class="card-text">
                                <?= $row["p_caption"] ?>
                            </p>

                            <p class="card-text mb-3"><small class="text-muted">
                                    <?= $row["p_hashtag"] ?>
                                </small></p>

                            <!-- DELETE Button -->
                            <button name="dlt_user_btn" class="btn btn-danger"> <a
                                    href="post_DELETE.php?u_id=<?= $userID ?>&p_id=<?= $row["id"] ?>"
                                    style='text-decoration:none;'>
                                    DELETE </a></button>

                            <!-- EDIT Button -->
                            <button name="edtbtn" class="btn btn-info"> <a
                                    href="post_EDIT.php?u_id=<?= $userID ?>&p_id=<?= $row["id"] ?>"
                                    style='text-decoration:none;'>
                                    Edit </a></button>

                        </div>
                    </div>
                </div>
                <br>
            </div>
            <?php
        }

    } else {
        echo "Error!";
    }
    ?>
</body>

</html>