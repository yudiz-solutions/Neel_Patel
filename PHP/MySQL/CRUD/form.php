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
    <style>.error {color: red;}</style>
    </head>
<body>
    <?php
$empid = $designation = $fname = $lname = "";
$empIdErr = $designationErr = $fNameErr = $lNameErr = "";


function ipValidation($formData) {
    $formData = trim($formData);
    $formData = stripslashes($formData);
    $formData = htmlspecialchars($formData);
    return $formData;
}

//When Submit button is pressed
if (isset($_POST['submit'])) {
    $empid = ipValidation($_POST['empid']);
    if (!preg_match("/^[0-9]*$/", $empid)) {
        $empIdErr = "Invalid EmployeeID !";
    }
    
    $designation = $_POST['designation'];
    $designation = ipValidation($_POST['designation']);
    if (!preg_match("/^[a-z,A-Z]*$/", $designation)) {
        $designationErr = "Invalid Designation !";
    }

    $fname = $_POST['fname'];
    $fname = ipValidation($_POST['fname']);
    if (!preg_match("/^[a-z,A-Z]*$/", $fname)) {
        $fNameErr = "Invalid First Name !";
    }

    $lname = $_POST['lname'];
    $lname = ipValidation($_POST['lname']);
    if (!preg_match("/^[a-z,A-Z]*$/", $lname)) {
        $lNameErr = "Invalid Last Name !";
    }


    //INSERTION QUERY
    if ($empIdErr == "" && $designationErr == "" && $fNameErr == "" && $lNameErr == "") {
        $isql = "INSERT INTO crud (empid, fname, lname, designation) VALUES ('$empid', '$fname', '$lname', '$designation')";
        if ($conn -> query($isql) == true) {
            echo "<script> alert ('ADDED SUCCESSFULLY')</script>";
        }
    }
}
?>
    <!-- ADD FORM -->
        <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "post">
            <div class="row mb-4">
            
            <!-- EmployeeID input -->
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label">EmployeeID</label>
                        <span class = "error">* <?=$empIdErr;?></span>
                        <input type="text" class="form-control" name = "empid" required />
                    </div>
                </div>
                
            <!-- Designation input -->
                <div class="col">
                    <div class="form-outline mb-4">
                        <label class="form-label">Designation</label>
                        <span class = "error">* <?=$designationErr;?></span>
                        <input type="text" class="form-control" name = "designation" required />
                    </div>
                </div>
            </div>
            

            <div class="row mb-4">
            
            <!-- First name input -->
            <div class="col">
                    <div class="form-outline">
                        <label class="form-label">First name</label>
                        <span class = "error">* <?=$fNameErr;?></span>
                        <input type="text" class="form-control" name = "fname" required />
                    </div>
                </div>

            <!-- Last name input -->
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label">Last name</label>
                        <span class = "error">* <?=$lNameErr;?></span>
                        <input type="text" class="form-control" name = "lname" required />
                    </div>
                </div>
            </div>


            <!-- Submit button -->
                <input type = "submit" class = "btn btn-primary btn-block mb-4" name = "submit" value = "ADD">
            
                <!-- View button -->
                <input type="button" class = "btn btn-primary btn-block mb-4" value="View" onClick="document.location.href='view.php'"/>
        </form>
</body>
</html>