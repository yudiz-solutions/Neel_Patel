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
    <title>DELETE</title>
</head>
<body>
<?php

//When DLT button is pressed
if (isset($_POST['dltbtn'])) {
    $dID = $_POST['dID'];
    // echo $dID;
    
    //DLT QUERY
    $dsql = "DELETE FROM crud WHERE id = $dID";
    
    if ($conn -> query($dsql) == true) {
        echo "<script> alert ('DELETED SUCCESSFULLY')</script>";
    } else {
        echo "ERROR !!" .$conn -> error;
    }
}

include "view.php";
header("Location: view.php");
?>  
</body>
</html>