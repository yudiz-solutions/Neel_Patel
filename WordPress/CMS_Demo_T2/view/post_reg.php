<?php
session_start();
//If directly hitting URL (Without Login) 
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: ../index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Highlighted item style */
        .active {
            background-color: #007bff;
            color: #fff;
        }

        .error {
            color: red;
        }

        input:invalid:required {
            background-image: linear-gradient(to right, pink, lightgreen);
        }
    </style>
</head>

<body>
    <?php
    //DB Connection
    include "../common/DBconn.php";
    ?>
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

                    <!-- Fname input -->
                    <div class="row mb-3">
                        <div class="form-outline ">
                            <label class="form-label col-5">
                                First Name
                                <span class="error p_fname">*</span>
                            </label>
                            <input type="text" name="p_fname" required>
                        </div>
                    </div>

                    <!-- Lname input -->
                    <div class="row mb-3">
                        <div class="form-outline">
                            <label class="form-label col-5">
                                Last Name
                                <span class="error p_lname">*</span>
                            </label>
                            <input type="text" name="p_lname" required>
                        </div>
                    </div>

                    <!-- Email input -->
                    <div class="row mb-3">
                        <div class="form-outline">
                            <label class="form-label col-5">
                                Email
                                <span class="error p_email">*</span>
                            </label>
                            <input type="email" name="p_email" required>
                        </div>
                    </div>

                    <!-- Post Image input -->
                    <div class="row mb-3">
                        <div class="form-outline ">
                            <label class="form-label col-5">Post Image</label>
                            <input type="file" name="p_img">
                        </div>
                    </div>

                    <!-- META TABLE INPUTS -->
                    <!-- Caption input -->
                    <div class="row mb-3">
                        <div class="form-outline">
                            <label class="form-label col-5">Caption</label>
                            <textarea name="p_caption" rows="4" cols="50"></textarea>
                        </div>
                    </div>

                    <!-- Hashtag input -->
                    <div class="row mb-3">
                        <div class="form-outline">
                            <label class="form-label col-5">Hashtag</label>
                            <textarea name="p_hashtag" rows="4" cols="50"></textarea>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <div class="row mb-3">
                        <input type="submit" class="btn btn-dark btn-block mb-4" name="post_submit" value="ADD POST">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST["post_submit"])) {
        $p_fname = isset($_POST['p_fname']) ? $_POST['p_fname'] : "";
        $p_lname = isset($_POST['p_lname']) ? $_POST['p_lname'] : "";
        $p_email = isset($_POST['p_email']) ? $_POST['p_email'] : "";

        $filename = $_FILES['p_img']['name'];
        $file_extension = pathinfo($filename, PATHINFO_EXTENSION);

        //Meta-table values
        $p_caption = isset($_POST['p_caption']) ? $_POST['p_caption'] : "";
        $p_hashtag = isset($_POST['p_hashtag']) ? $_POST['p_hashtag'] : "";


        //Post Query
        $post_sql = "INSERT INTO wp_post (p_fname, p_lname, p_email, p_img) VALUES ('$p_fname', '$p_lname', '$p_email', '$filename')";

        if ($conn->query($post_sql) == true) {
            move_uploaded_file($_FILES['p_img']['tmp_name'], "uploaded_posts/" . $_FILES['p_img']['name']);

            $last_id = mysqli_insert_id($conn);
            // echo $last_id;
            // die;
    
            $exceptional_fields = array(
                'p_fname',
                'p_lname',
                'p_email',
                'p_img',
                'post_submit'
            );

            foreach ($_POST as $key => $val) {
                if (in_array($key, $exceptional_fields)) {
                    continue;
                }

                //Meta Query
                $meta_sql = "INSERT INTO wp_meta (post_id, meta_key, meta_value) VALUES ('$last_id', '$key', '$val')";
                if ($conn->query($meta_sql) == true) {
                    echo "<script> alert ('POST ADDED SUCCESSFULLY')</script>";
                }
            }
        } else {
            echo $conn->error;
        }
    }
    ?>
</body>

</html>