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
include "dbConn.php";
// echo "hey";

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
            <!-- <a href = "delete.php"> DELETE </a> -->
            <form action = "delete.php" method = "post">
                <input type = "hidden" value = "<?=$row['id']?>" name = "dID" />
                <input type="submit" value="DELETE" name = "dltbtn" />
            </form>
        </td>
        <td>
            <input type="button" value="EDIT" name = "edtbtn" onClick="document.location.href='edit.php'" />
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

