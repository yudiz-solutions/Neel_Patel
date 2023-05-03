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
        <title>EDIT</title>
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

    //When EDIT button is pressed
    if (isset($_POST['e_submit'])) {
        $id = $_POST['id'];
        
        $empid = ipValidation($_POST['empid']);
        if (!preg_match("/\D*$/", $empid)) {        //[^0-9] => "/\D/"
            $empIdErr = "Invalid EmployeeID !";
        }
    
        // $designation = $_POST['designation'];
        $designation = ipValidation($_POST['designation']);
        if (!preg_match("/^[a-z,A-Z]*$/", $designation)) {
            $designationErr = "Invalid Designation !";
        }

        // $fname = $_POST['fname'];
        $fname = ipValidation($_POST['fname']);
        if (!preg_match("/^[a-z,A-Z]*$/", $fname)) {
            $fNameErr = "Invalid First Name !";
        }

        // $lname = $_POST['lname'];
        $lname = ipValidation($_POST['lname']);
        if (!preg_match("/^[a-z,A-Z]*$/", $lname)) {
            $lNameErr = "Invalid Last Name !";
        }
        
        //UPDATE QUERY
        if ($empIdErr == "" && $designationErr == "" && $fNameErr == "" && $lNameErr == "") {
            $edit_sql = "UPDATE crud SET empid = '$empid', fname = '$fname', lname = '$lname', designation = '$designation' WHERE id = '$id'";
  
            $result = $conn -> query($edit_sql);

            if ($result == true) {
                echo "<script> alert ('UPDATED SUCCESSFULLY')</script>";
            } else {
                echo "Error in updating!!";
            }
        }
    }
        
    //GETTING ID FROM URL
    if (isset($_GET['id'])) {
        $id = $_GET["id"];
   
        $select_sql = "SELECT * FROM crud WHERE id = '$id'";
        $result = $conn -> query($select_sql);
   
    if ($result -> num_rows > 0) {
        while ($row = $result -> fetch_assoc()) {
            $e_id = $row['id'];
            $e_empid = $row['empid'];
            $e_fname = $row['fname'];
            $e_lname = $row['lname'];
            $e_designation = $row['designation'];
        }
    }
}
?>

<!-- UPDATE form -->
        <form action = '<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method = 'post'>
            
            <div class="row mb-4">

            <!-- ID Hidden Value -->
            <input type="hidden" value="<?=$e_id?>" name="id" />
            
            <!-- EmployeeID input -->
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label">EmployeeID</label>
                        <span class = "error">* <?=$empIdErr;?></span>
                        <input type="text" class="form-control" name = 'empid' value = '<?=$e_empid ?>' />
                    </div>
                </div>
                
            <!-- Designation input -->
                <div class="col">
                    <div class="form-outline mb-4">
                        <label class="form-label">Designation</label>
                        <span class = "error">* <?=$designationErr;?></span>
                        <input type="text" class="form-control" name = 'designation' value = '<?=$e_designation ?>' />
                    </div>
                </div>
            </div>
            

            <div class="row mb-4">
            <!-- First name input -->
            <div class="col">
                    <div class="form-outline">
                        <label class="form-label">First name</label>
                        <span class = "error">* <?=$fNameErr;?></span>
                        <input type="text" class="form-control" name = 'fname' value = '<?=$e_fname?>' />
                    </div>
                </div>

            <!-- Last name input -->
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label">Last name</label>
                        <span class = "error">* <?=$lNameErr;?></span>
                        <input type="text" class="form-control" name = 'lname' value = '<?=$e_lname?>' />
                    </div>
                </div>
            </div>
            
            <!-- Edit button -->
                <input type = "submit" class = "btn btn-primary btn-block mb-4" name = 'e_submit' value = 'EDIT'>
            
        </form>
<br><br>
<?php
    include "view.php";
//     if($conn -> query($ssql) == TRUE){
//     header("Location: http://localhost/Yudiz/Neel_Patel/PHP/MySQL/CRUD/view.php");
// }
?>

</body>
</html>