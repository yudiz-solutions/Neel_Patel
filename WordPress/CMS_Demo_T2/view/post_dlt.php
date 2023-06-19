<?php
//DB Connection
include "../common/dbConn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE POST</title>
</head>

<body>
    <?php

    //When DLT button is pressed
    if (isset($_POST['post_dltbtn'])) {
        $dID = $_POST['post_dID'];
        // echo $dID;
    
        //DLT QUERY
        $dsql = "DELETE FROM wp_post WHERE p_id = $dID";

        if ($conn->query($dsql) == true) {
            echo "<script> alert ('DELETED SUCCESSFULLY')</script>";
            header("Location:post_view.php");
        } else {
            echo "ERROR !!" . $conn->error;
        }
    }
    ?>
</body>

</html>