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
    <title>VIEW</title>
</head>

<body>
<?php

//VIEW QUERY
$vsql = "SELECT * FROM crud";
// $result = $conn -> query($vquery);

if ($result = $conn->query($vsql)) {
    ?>
    <table class = "table">
        <thead class = "table-dark">
            <tr>
                <th> ID </th>
                <th> EMPLOYEE-ID </th>
                <th> FIRSTNAME </th>
                <th> LASTNAME </th>
                <th> DESIGNATION </th>
                <th> ACTION </th>
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
                    <input type="submit" class="btn btn-danger" value="DELETE" name="dltbtn" />
                    <!-- EDIT Button -->
                    <button name = "edtbtn" class="btn btn-info" > <a href="edit.php?id=<?=$row['id']?>" style='text-decoration:none;'> Edit </a></button>           
                </td>
                </form>
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