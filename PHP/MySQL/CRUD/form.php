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
    <title>FORM</title>
    </head>

<body>
    <!-- ADD FORM -->
    <h4>FILL OUT THE FORM</h4>
            <form action = "form.php" method="post" >
                EmployeeID:
                    <input type = "text" name = "empid" required><br><br>
                
                First name:
                    <input type = "text" name = "fname" required><br><br>
                
                Last name:
                    <input type = "text" name = "lname" required><br><br>

                Designation
                    <input type = "text" name = "designation" required><br><br>

                <input type = "submit" name = "submit" value = "ADD">
                <input type="button" value="View" onClick="document.location.href='view.php'" />
            </form>
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