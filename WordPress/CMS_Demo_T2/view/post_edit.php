<?php
ob_start();
session_start();
//If directly hitting URL (Without Login) 
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: ../index.php');
    exit;
}

//DB Connection
include "../common/DBconn.php";
?>

<?php
if (isset($_GET['p_id'])) {
    $p_id = $_GET['p_id'];
    // echo $p_id; //Done

    $fetch_query = "SELECT * FROM wp_post WHERE p_id = $p_id";
    $result = mysqli_query($conn, $fetch_query);
    $result = mysqli_fetch_assoc($result);

    $fetch_caption_queryMeta = "SELECT meta_value as p_caption FROM wp_meta WHERE meta_key = 'p_caption' and post_id = $p_id";
    $resultMetaCaption = mysqli_query($conn, $fetch_caption_queryMeta);
    $resultMetaCaption = mysqli_fetch_assoc($resultMetaCaption);

    $fetch_hastag_queryMeta = "SELECT meta_value as p_hashtag FROM wp_meta WHERE meta_key = 'p_hashtag' and post_id = $p_id";
    $resultMetaHashtag = mysqli_query($conn, $fetch_hastag_queryMeta);
    $resultMetaHashtag = mysqli_fetch_assoc($resultMetaHashtag);

    $p_id = $result['p_id'];
    $p_fname = $result['p_fname'];
    $p_lname = $result['p_lname'];
    $p_email = $result['p_email'];
    $p_img = $result['p_img'];
    $p_caption = $resultMetaCaption['p_caption'];
    $p_hashtag = $resultMetaHashtag['p_hashtag'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Highlighted item style */
        .active {
            background-color: #007bff;
            color: #fff;
        }

        input:invalid:required {
            background-image: linear-gradient(to right, pink, lightgreen);
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- SIDEBAR -->
            <div class="col-md-3">
                <div class="list-group" id="sidebar">
                    <a href="dashboard.php" class="list-group-item list-group-item-action">Dashboard</a>
                    <a href="post_reg.php" class="list-group-item list-group-item-action active">Posts</a>
                    <ul>
                        <li>
                            <a href="post_reg.php" class="list-group-item list-group-item-action active">Add Posts</a>
                        </li>
                        <li>
                            <a href="post_view.php" class="list-group-item list-group-item-action">View Posts</a>
                            <ul>
                                <li>
                                    <a href="post_edit.php" class="list-group-item list-group-item-action active">Edit
                                        Posts</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <a href="userdata.php" class="list-group-item list-group-item-action">Userdata</a>

                    <!-- LOGOUT SECTION -->
                    <form method="post" id="logoutTbl">
                        <input type="submit" class="list-group-item list-group-item-action" name="logout-btn"
                            value="Log Out">
                    </form>
                    <?php
                    if (isset($_POST['logout-btn'])) {
                        session_destroy();
                        header("Location: ../index.php");
                    }
                    ?>
                </div>
            </div>



            <!-- DISPLAY CONTENT -->
            <div class="post-form">
                <form action="" method="post" enctype="multipart/form-data">

                    <!-- ID Hidden Value -->
                    <input type="hidden" value="<?= $p_id ?>" name="id" />

                    <!-- Fname input -->
                    <div class="row mb-3">
                        <div class="form-outline ">
                            <label class="form-label col-5">First Name</label>
                            <input type="text" name="p_fname" value="<?= $p_fname ?>" required>
                        </div>
                    </div>

                    <!-- Lname input -->
                    <div class="row mb-3">
                        <div class="form-outline">
                            <label class="form-label col-5">Last Name</label>
                            <input type="text" name="p_lname" value="<?= $p_lname ?>" required>

                        </div>
                    </div>

                    <!-- Email input -->
                    <div class="row mb-3">
                        <div class="form-outline">
                            <label class="form-label col-5">Email</label>
                            <input type="email" name="p_email" value="<?= $p_email ?>" required>

                        </div>
                    </div>

                    <!-- Post Image input -->
                    <div class="row mb-3">
                        <div class="form-outline ">
                            <label class="form-label col-5">Post Image</label>
                            <input type="file" name="p_img">
                            <input type="hidden" name="p_img_old" value="<?= $p_img ?>" required>
                        </div>
                    </div>

                    <!-- META TABLE INPUTS -->
                    <!-- Caption input -->
                    <div class="row mb-3">
                        <div class="form-outline">
                            <label class="form-label col-5">Caption</label>
                            <textarea name="p_caption" rows="4" cols="50"><?= $p_caption ?></textarea>
                        </div>
                    </div>

                    <!-- Hashtag input -->
                    <div class="row mb-3">
                        <div class="form-outline">
                            <label class="form-label col-5">Hashtag</label>
                            <textarea name="p_hashtag" rows="4" cols="50"><?= $p_hashtag ?></textarea>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <div class="row mb-3">
                        <input type="submit" class="btn btn-dark btn-block mb-4" name="post_submit" value="UPDATE POST">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST['post_submit'])) {
        $updt_p_id = isset($_POST['id']) ? $_POST['id'] : "";
        $new_p_fname = isset($_POST['p_fname']) ? $_POST['p_fname'] : "";
        $new_p_lname = isset($_POST['p_lname']) ? $_POST['p_lname'] : "";
        $new_p_email = isset($_POST['p_email']) ? $_POST['p_email'] : "";
        $new_p_caption = isset($_POST['p_caption']) ? $_POST['p_caption'] : "";
        $new_p_hashtag = isset($_POST['p_hashtag']) ? $_POST['p_hashtag'] : "";
        $new_p_profile = $_FILES['p_img']['name'];
        $old_profile = $_POST['p_img_old'];

        if ($new_p_profile != '') {
            $update_filename = $_FILES['p_img']['name'];
        } else {
            $update_filename = $old_profile;
        }

        //UPDATE QUERY
        $edit_post_sql = "UPDATE wp_post SET p_fname = '$new_p_fname', p_lname = '$new_p_lname', p_email = '$new_p_email', p_img = '$update_filename' WHERE p_id = '$updt_p_id'";
        $edit_result = $conn->query($edit_post_sql);
        if ($edit_result == true) {
            if ($_FILES['p_img']['name'] != '') {
                move_uploaded_file($_FILES['p_img']['tmp_name'], "uploaded_posts/" . $_FILES['p_img']['name']);
                unlink("uploaded_posts/" . $old_profile);
            }

            //Meta Query
            $edit_meta_caption_sql = "UPDATE wp_meta SET meta_value = '$new_p_caption' WHERE meta_key = 'p_caption' AND post_id = '$updt_p_id'";
            $edit_meta_caption_result = $conn->query($edit_meta_caption_sql);

            $edit_meta_hashtag_sql = "UPDATE wp_meta SET meta_value = '$new_p_hashtag' WHERE meta_key = 'p_hashtag' AND post_id = '$updt_p_id'";
            $edit_meta_hashtag_result = $conn->query($edit_meta_hashtag_sql);

            if ($edit_meta_caption_sql && $edit_meta_hashtag_result === true) {
                echo "<script> alert ('UPDATED SUCCESSFULLY')</script>";
                header("Location: post_view.php");
            }

        } else {
            echo "Error in updating!!" . $conn->error;
        }
    }


    ?>
</body>

</html>