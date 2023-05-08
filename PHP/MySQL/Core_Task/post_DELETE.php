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
    <title>post_DELETE</title>
</head>
<body>
<?php

//When DLT button is pressed

    $u_id = $_GET['u_id'];
    $p_id = $_GET['p_id'];
    echo $u_id . "&" . $p_id;
    
    //DLT QUERY
    $dsql = "DELETE FROM core_post WHERE id = $p_id";
    
    if ($conn -> query($dsql) == true) {
        // echo "<script> alert ('POST DELETED SUCCESSFULLY')</script>";
        header("location:post_VIEW.php?u_id=".$u_id."&p_id=".$p_id);
    } else {
        echo "ERROR !!" .$conn -> error;
    }
?>
</body>
</html>