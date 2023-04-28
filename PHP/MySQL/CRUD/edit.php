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
    </head>
    
    <body>
    
    <?php
    //When EDIT button is pressed
    if (isset($_POST['e_submit'])) {
        $id = $_POST['id'];
        // echo $id;
        $empid = $_POST['empid'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $designation = $_POST['designation'];

        //UPDATE QUERY
        $esql = "UPDATE crud SET empid = '$empid',fname = '$fname',lname = '$lname',designation = '$designation' WHERE id = '$id'";
  
        $result = $conn -> query($esql);

        if ($result == true) {
            echo "<script> alert ('UPDATED SUCCESSFULLY')</script>";
        } else {
            echo "Error in updating!!";
        }
    }

    //GETTING ID FROM URL
    if (isset($_GET['id'])) {
        $id = $_GET["id"];
   
        $ssql = "SELECT * FROM crud WHERE id = '$id'";
        $result = $conn -> query($ssql);
   
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
        <form action = 'edit.php' method = 'post'>
            
            <div class="row mb-4">
            <!-- ID Hidden Value -->
            <input type="hidden" value="<?=$e_id?>" name="id" />
            
            <!-- EmployeeID input -->
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label">EmployeeID</label>
                        <input type="text" class="form-control" name = 'empid' value = '<?=$e_empid ?>' />
                    </div>
                </div>
                
            <!-- Designation input -->
                <div class="col">
                    <div class="form-outline mb-4">
                        <label class="form-label">Designation</label>
                        <input type="text" class="form-control" name = 'designation' value = '<?=$e_designation?>' />
                    </div>
                </div>
            </div>
            

            <div class="row mb-4">
            <!-- First name input -->
            <div class="col">
                    <div class="form-outline">
                        <label class="form-label">First name</label>
                        <input type="text" class="form-control" name = 'fname' value = '<?=$e_fname?>' />
                    </div>
                </div>

            <!-- Last name input -->
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label">Last name</label>
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
?>

</body>
</html>