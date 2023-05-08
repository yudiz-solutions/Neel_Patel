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

    a{
        text-decoration: none;
        color  : white;
    }

</style>
<body>
<?php

//VIEW QUERY
$vsql = "SELECT * FROM core_post WHERE user_id = '$userID'";
// }

if ($result = $conn->query($vsql)) {
    ?>
    <center><h2>POST DETAILS</h2></center>
    <table class = "table">
        <thead class = "table-dark">
            <th> <button class="btn btn-info" onclick="window.location.href = 'post_FORM.php?id=<?=$userID?>';"> Add Post </a></button> </th>
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
                <img src = "<?= 'Postpics/'.$row['p_img']?>" width = "100px"  alt = "post_pic">
            </td>
            <td>
                <?=$row["p_caption"] ?>
            </td>
            <td>
                <?=$row["p_hashtag"] ?>
            </td>
            <td>
                <!-- DELETE Section -->
                <!-- <form action="post_DELETE.php" method="post">
                    <input type="hidden" value="<?=$row['id']?>" name="dID" />
                    <input type="submit" class="btn btn-danger" value="DELETE" name="dlt_user_btn" /> -->
                    
                    <button name = "dlt_user_btn" class="btn btn-danger" > <a href="post_DELETE.php?u_id=<?=$userID?>&p_id=<?=$row["id"]?>" style='text-decoration:none;'> DELETE </a></button>

                    <!-- EDIT Button -->
                    <button name = "edtbtn" class="btn btn-info" > <a href="post_EDIT.php?u_id=<?=$userID?>&p_id=<?=$row["id"]?>" style='text-decoration:none;'> Edit </a></button>

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