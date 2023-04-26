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
<form action = 'edit.php' method = 'POST'>
    
    <input type="hidden" value="<?=$e_id?>" name="id" />
    
    EmployeeID:
    <input type = 'text' name = 'empid' value = '<?=$e_empid ?>' ><br><br>
    
    First name:
    <input type = 'text' name = 'fname' value = '<?=$e_fname?>' ><br><br>
    
    Last name:
    <input type = 'text' name = 'lname' value = '<?=$e_lname?>' ><br><br>
        
    Designation
    <input type = 'text' name = 'designation' value = '<?=$e_designation?>' ><br><br>
        
    <input type = 'submit' name = 'e_submit' value = 'EDIT'>
</form>
<br><br>
<?php
    include "view.php";
?>

</body>

</html>