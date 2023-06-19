<?php
//DB Connection
include "DBconn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form_DELETE</title>
</head>

<body>
    <?php

    //When DLT button is pressed
    if (isset($_POST['dlt_user_btn'])) {

        //Fetching UserID
        $dID = $_POST['dID'];

        //DLT QUERY
        $dsql = "DELETE FROM core_form WHERE id = $dID";

        if ($conn->query($dsql) == true) {
            echo "<script> alert ('USER DELETED SUCCESSFULLY')</script>";
        } else {
            echo "ERROR !!" . $conn->error;
        }
    }

    include "form_VIEW.php";
    ?>
</body>

</html>