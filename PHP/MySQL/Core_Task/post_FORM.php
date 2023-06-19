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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>post_FORM</title>
    <style>
        .form-control {
            width: unset;
        }

        .error {
            color: red;
        }

        #updt-head {
            background-color: #212529;
            color: white;
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- ADD FORM -->
    <div class="container" style="background-color: aliceblue">
        <h1 class="form-outline mb-4" id="updt-head">CREATE POST</h1>
        <form action="" method="post" enctype="multipart/form-data">

            <!-- Post Image input -->
            <div class="row mb-3">
                <div class="form-outline ">
                    <label class="form-label col-5">Post Image</label>
                    <input type="file" name="p_img">
                </div>
            </div>

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
        <div>

            <?php
            // Getting user_id from URL
            $u_id = $_GET['u_id'];

            //When Submit button is pressed
            if (isset($_POST['post_submit'])) {

                $p_caption = $_POST['p_caption'];
                $p_hashtag = $_POST['p_hashtag'];

                //Commenting validations for testing test cases
                // $p_img_to_be_uploaded = $_FILES['p_img']['name'];
                // $allowed_extension = array('jpg', 'png', 'jpeg', 'gif');
                $filename = $_FILES['p_img']['name'];
                $file_extension = pathinfo($filename, PATHINFO_EXTENSION);

                // if (!in_array($file_extension, $allowed_extension)) {
                //     echo "Only jpg, jpeg, png, gif allowed !";
                // } else {
                //     if (file_exists("Postpics/" . $_FILES['p_img']['name'])) {
                //         $filename = $_FILES['p_img']['name'];
                //         echo "Image already exists !".$filename;
                //     } else {
            
                //INSERTION QUERY
                $isql = "INSERT INTO core_post (user_id, p_img, p_caption, p_hashtag) VALUES ('$u_id', '$filename', '$p_caption', '$p_hashtag')";
                // echo $isql;
                // die;
            
                if ($conn->query($isql) == true) {
                    move_uploaded_file($_FILES['p_img']['tmp_name'], "Postpics/" . $_FILES['p_img']['name']);
                    // echo "<script> alert ('POST ADDED SUCCESSFULLY')</script>";
                    header("Location: post_VIEW.php?u_id=" . $u_id);
                } else {
                    echo $conn->error;
                }
            }
            //     }
// }
            
            ?>
</body>

</html>