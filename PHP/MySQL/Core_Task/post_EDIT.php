<?php
//DB Connection
include "DBconn.php";

//GETTING ID FROM URL
       if (isset($_GET['u_id'])) {
           $u_id = $_GET['u_id'];
           $p_id = $_GET['p_id'];
           echo $u_id . "&" . $p_id;
           
           $select_sql = "SELECT * FROM core_post WHERE id = '$p_id'";
           $result = $conn -> query($select_sql);
           
           if ($result -> num_rows > 0) {
               while ($row = $result -> fetch_assoc()) {
                   $e_p_id = $row['id'];
                   $e_p_img = $row['p_img'];
                   $e_p_caption = $row['p_caption'];
            $e_p_hashtag = $row['p_hashtag'];
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>post_EDIT</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>.error {color: red;}</style>
    </head> 
<body>

<!-- UPDATE form -->
<div class = "container" style = "background-color: aliceblue">
    <h1 class="form-outline mb-4" style = "background-color: khaki">UPDATE POST</h1>
    <form action = "" method = "post" enctype = "multipart/form-data">
        
        <!-- ID Hidden Value -->
        <!-- POST ID -->
        <input type = "hidden" value = "<?=$e_p_id?>" name = "id" />
        
        
        <!-- Post input -->
        <div class = "row mb-3">
            <div class="form-outline ">
                <label class="form-label col-5">Image</label>
                <input type="file" name="p_img">
                <input type = "hidden" name = "p_img_old" value = "<?= $e_p_img?>">
            </div>
        </div>
        
        <!-- Caption input -->
        <div class = "row mb-3">
            <div class="form-outline">
                <label class="form-label col-5">Caption</label>
                <textarea name="p_caption" rows="4" cols="50"><?= $e_p_caption ?></textarea>
            </div>
        </div>
        
        <!-- Hashtag input -->
        <div class = "row mb-3">
                    <div class="form-outline">
                        <label class="form-label col-5">Hashtag</label>
                        <textarea name="p_hashtag" rows="4" cols="50"><?= $e_p_hashtag ?></textarea>
                    </div>
                </div>

            <!-- Submit button -->
                <div class = "row mb-3">
                    <input type = "submit" class = "btn btn-primary btn-block mb-4" name = "updt_post_btn" value = "UPDATE POST">
                </div>
            
            <!-- View button -->
            <div class = "row mb-3">
                <input type="button" class = "btn btn-primary btn-block mb-4" value="VIEW POST" onClick="document.location.href='post_VIEW.php?id=<?=$id?>'"/>
                <div>
                    </form>
                    <div>
                        

    <?php
     ///When EDIT button is pressed
     if (isset($_POST['updt_post_btn'])) {
         
         $updtid = $_POST['id'];  // post id
         $p_caption = $_POST['p_caption'];
         $p_hashtag = $_POST['p_hashtag'];
         
         //IMG
         $new_post = $_FILES['p_img']['name'];
         $old_post = $_POST['p_img_old'];
         
         if ($new_post != '')
         {
             $update_filename = $_FILES['p_img']['name'];
            }
            
            else
            {
                $update_filename = $old_post;
        }
        
        // if (file_exists("Postpics/" . $_FILES['p_img']['name']))
        // {
        //     $filename = $_FILES['p_img']['name'];
        //         echo "Image already exists !".$filename;
        //     }
            
        //     else
        //     {
                //UPDATE QUERY
                $edit_sql = "UPDATE core_post SET p_img = '$update_filename', p_caption = '$p_caption', p_hashtag = '$p_hashtag' WHERE id = '$updtid'";
                
                $result = $conn -> query($edit_sql);
                
                if ($result == true) {
                    if ($_FILES['p_img']['name'] != '') {
                        move_uploaded_file($_FILES['p_img']['tmp_name'], "Postpics/".$_FILES['p_img']['name']);
                        unlink("Postpics/".$old_post);
                    }
                    echo "<script> alert ('UPDATED SUCCESSFULLY')</script>";
                    header("Location: post_VIEW.php?u_id=" .$u_id);
                }
                
                else
                {
                    echo "Error in updating!!" . $conn->error;
                }
            // }
            }
    ?>
</body>
</html>