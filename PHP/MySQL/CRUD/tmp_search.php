<?php
include "dbConn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>
    <?php
    $empid = $_POST['searchBar'];

    //VIEW QUERY
    $vsql = "SELECT id, empid, fname, lname, designation FROM crud WHERE empid LIKE '% ".$empid." %'";

if ($result = $conn->query($vsql) > 0) {
    ?>
    <h2>EMPLOYEE DETAILS</h2>
    <table id = "searchTbl" class = "table">
        <thead class = "table-dark">
            <th> <button id = "AddEmpBtn" class="btn btn-info" a href = "form.php"> Add Employee </a></button> </th>
            <th>
                <form action = "view.php" method = "">
                    <input type = "text" name = "searchBar" placeholder = "Search">
                    <input type = "submit" name = "searchBtn" value = "SEARCH">
                </form>
            </th>
        </thead>
    </table>
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
        $id = $row["id"];
        $empid = $row["empid"];
        $fname = $row["fname"];
        $lname = $row["lname"];
        $designation = $row["designation"];
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