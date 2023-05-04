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
    <title>form_VIEW</title>
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
$vsql = "SELECT * FROM core_form";
// }

if ($result = $conn->query($vsql)) {
    ?>
    <center><h2>USER DETAILS</h2></center>
    <table id = "searchTbl" class = "table">
        <thead class = "table-dark">
            <th> <button id = "AddEmpBtn" class="btn btn-info" onclick="window.location.href = 'form_FORM.php';"> Add Users </a></button> </th>
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
                <th> FIRSTNAME </th>
                <th> LASTNAME </th>
                <th> USERNAME </th>
                <th> EMAIL </th>
                <th> GENDER </th>
                <th> COUNTRY </th>
                <th> STATE </th>
                <th> CITY </th>
                <th> BIO </th>
                <th> PROFILE </th>
                <th> SOCIAL MEDIA PLATFORMS </th>
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
                <?=$row["fname"] ?>
            </td>
            <td>
                <?=$row["lname"] ?>
            </td>
            <td>
                <?=$row["uname"] ?>
            </td>
            <td>
                <?=$row["email"] ?>
            </td>
            <td>
                <?=$row["gender"] ?>
            </td>
            <td>
                <?=$row["country"] ?>
            </td>
            <td>
                <?=$row["state"] ?>
            </td>
            <td>
                <?=$row["city"] ?>
            </td>
            <td>
                <?=$row["bio"] ?>
            </td>
            <td>
                <img src = "<?= 'Profilepics/'.$row['profile']?>" width = "100px"  alt = "profile_pic">
            </td>
            <td>
                <?=$row["social_media"] ?>
            </td>
            <td>
                <!-- DELETE Button -->
                <form action="form_DELETE.php" method="post">
                    <input type="hidden" value="<?=$row["id"]?>" name="dID" />
                    <input type="submit" class="btn btn-danger" value="DELETE" name="dlt_user_btn" />
                    
                    <!-- EDIT Button -->
                    <button name = "e_user" class="btn btn-info" > <a href="form_EDIT.php?id=<?=$row['id']?>" style='text-decoration:none;'> EDIT USER </a></button>

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