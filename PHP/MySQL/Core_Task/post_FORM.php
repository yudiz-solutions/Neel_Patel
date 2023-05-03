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
    <title>post_FORM</title>
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
if (isset($_POST['post_submit'])) {
    
    $p_img = $_POST['p_img'];
    $p_caption = $_POST['p_caption'];
    $p_hashtag = $_POST['p_hashtag'];
    

    //INSERTION QUERY
    
        $isql = "INSERT INTO core_post (p_img, p_caption, p_hashtag) VALUES ('$p_img', '$p_caption', '$p_hashtag')";
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
            
            <!-- Post Image input -->
                <div class = "row mb-3">
                    <div class="form-outline ">
                        <label class="form-label col-5">Post Image</label>
                        <input type="file" id="postimg" name="p_img">
                    </div>
                </div>
        
            <!-- Caption input -->
                <div class = "row mb-3">
                    <div class="form-outline">
                        <label class="form-label col-5">Caption</label>
                        <textarea id="caption" name="p_caption" rows="4" cols="50"></textarea>
                    </div>
                </div>

            <!-- Hashtag input -->
                <div class = "row mb-3">
                    <div class="form-outline">
                        <label class="form-label col-5">Hashtag</label>
                        <textarea id="hashtag" name="p_hashtag" rows="4" cols="50"></textarea>
                    </div>
                </div>

            <!-- Submit button -->
            <div class = "row mb-3">
                <input type = "submit" class = "btn btn-primary btn-block mb-4" name = "post_submit" value = "ADD POST">
            </div>
            
                <!-- View button -->
            <div class = "row mb-3">
                <input type="button" class = "btn btn-primary btn-block mb-4" value="View" onClick="document.location.href='post_VIEW.php'"/>
            <div>
        </form>
        <div>
</body>
</html>