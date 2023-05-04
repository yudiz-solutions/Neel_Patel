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
    <title>post_VIEW</title>
</head>
<style>
    
    h2 {
        display: inline-block;
    }

    #AddEmpBtn {
        float: left;
        /* margin-right: 260px;
        margin-top: 4px; */
    }

</style>
<body>
<?php

// if (isset($_POST['searchBtn'])) {
    //SEARCH QUERY
//     $vsql = "SELECT id, fname, lname, uname, email, gender, country, state, city, bio, profile, social_media FROM core_form WHERE empid LIKE '% ".$empid." %'";
// } else {
//VIEW QUERY
$vsql = "SELECT * FROM core_post";
// }

if ($result = $conn->query($vsql)) {
    ?>
    <center><h2>POST DETAILS</h2></center>
    <table id = "searchTbl" class = "table">
        <thead class = "table-dark">
            <th> <button class="btn btn-info" onclick="window.location.href = 'post_FORM.php';"> Add Post </a></button> </th>
            <th>
                <!-- SEARCHBAR -->
                <!-- <form action = "search.php" method = "POST">
                    <input type = "text" name = "keyword" placeholder = "Search">
                    <input type = "submit" name = "searchBtn" value = "SEARCH">
                </form> -->
            </th>
        </thead>
    </table>
    <table class = "table">
        <thead class = "table-dark">
            <tr>
                <th> ID </th>
                <th> IMAGE </th>
                <th> CAPTION </th>
                <th> HASHTAG </th>
                <th> ACTION </th>
            </tr>
        </thead>
        
    <?php
    //Displaying result in the form of table
    while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td>
                <?=$row["id"] ?>
            </td>
            <td>
                <?=$row["p_img"] ?>
            </td>
            <td>
                <?=$row["p_caption"] ?>
            </td>
            <td>
                <?=$row["p_hashtag"] ?>
            </td>
            <td>
                <!-- DELETE Button -->
                <form action="post_DELETE.php" method="post">
                    <input type="hidden" value="<?=$row['id']?>" name="dID" />
                    <input type="submit" class="btn btn-danger" value="DELETE" name="dlt_user_btn" />
                    
                    <!-- EDIT Button -->
                    <button name = "edtbtn" class="btn btn-info" > <a href="post_EDIT.php?id=<?=$row['id']?>" style='text-decoration:none;'> Edit </a></button>

                    <!-- VIEW POST Button -->
                    <button name = "vpostbtn" class="btn btn-info" > <a href="post_VIEW.php" style='text-decoration:none;'> VIEW POSTS </a></button>
                </td>
                </form>
            </tr>
    <?php
    }
    ?>
    </table>
    <?php
    } else {
        echo "Error!";
    }
?>
</body>
</html>