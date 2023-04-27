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
    <title>FORM</title>
    <style>
        form{
            border: 1px solid;
        }

        table,
        th,
        td {
            /* border: 1px solid; */
            border-collapse: collapse;
        }

        /* th {
            text-align: center;
        } */
    </style>
    </head>
<body>
    <!-- ADD FORM -->
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
            <form action = "form.php" method = "post" >
            <h4>FILL OUT THE FORM</h4>
            
            <div class = "mb-3">
                EmployeeID:
                <input type = "text" name = "empid" required><br><br>
            </div>
            
            <div class = "mb-3">
                First name:
                <input type = "text" name = "fname" required><br><br>
            </div>
            
            <div class = "mb-3">
                Last name:
                <input type = "text" name = "lname" required><br><br>
            </div>
            
            <div class = "mb-3">
                Designation
                <input type = "text" name = "designation" required><br><br>
            </div>
                
            <input type = "submit" class = "btn btn-primary" name = "submit" value = "ADD">
            <input type="button" class = "btn btn-primary" value="View" onClick="document.location.href='view.php'"/>
            
        </form>
    </div>
</div>
</div>
<?php

//When Submit button is pressed
if (isset($_POST['submit'])) {
    $empid = $_POST['empid'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $designation = $_POST['designation'];

    //INSERTION QUERY
    $isql = "INSERT INTO crud (empid, fname, lname, designation) VALUES ('$empid', '$fname', '$lname', '$designation')";

    if ($conn -> query($isql) == true) {
        echo "<script> alert ('ADDED SUCCESSFULLY')</script>";
    }
}

?>          
</body>
</html>