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
    <title>VIEW</title>
</head>

<body>
<?php
// echo "hey";

//VIEW QUERY
$vsql = "SELECT * FROM crud";
// $result = $conn -> query($vquery);

if ($result = $conn->query($vsql)) {
    ?>
    <table>
        <thead>
            <tr>
                <th> ID </th>
                <th> EmployeeID </th>
                <th> Firstname </th>
                <th> Lastname </th>
                <th> Designation </th>
                <th> Action </th>
            </tr>
        </thead>
        
    <?php
    //Displaying result in the form of table
    while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td>
                <?=$row["id"] ?>
            </td>
            <td>
                <?=$row["empid"] ?>
            </td>
            <td>
                <?=$row["fname"] ?>
            </td>
            <td>
                <?=$row["lname"] ?>
            </td>
            <td>
                <?=$row["designation"] ?>
            </td>
            <td>
                <!-- DELETE Button -->
                <form action="delete.php" method="post">
                    <input type="hidden" value="<?=$row['id']?>" name="dID" />
                    <input type="submit" value="DELETE" name="dltbtn" />
                </form>
            </td>
            <td>
                <!-- EDIT Button -->
                <button name = "edtbtn"><a href="edit.php?id=<?=$row['id']?>"> Edit </a></button>
            </td>
        </tr>
    <?php
    }
    ?>
    </table>
    <?php
    } else {
        echo "Error!";
    }
?>
</body>
</html>