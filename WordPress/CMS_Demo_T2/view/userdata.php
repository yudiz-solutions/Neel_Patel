<?php
session_start();

//If directly hitting URL (Without Login) 
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: ../index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Userdata</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Highlighted item style */
        .active {
            background-color: #007bff;
            color: #fff;
        }

        .sidebar {
            display: contents;
        }
    </style>
</head>

<body>
    <?php
    // session_start();
    
    //If directly hitting URL (Without Login) 
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
        header('Location: ../index.php');
        exit;
    }

    //DB Connection
    include "../common/DBconn.php";
    ?>
    <div class="container-fluid">
        <div class="row">
            <!-- SIDEBAR -->
            <div class="col-md-3 sidebar">
                <div class="list-group" id="sidebar">
                    <a href="dashboard.php" class="list-group-item list-group-item-action">Dashboard</a>
                    <a href="post_reg.php" class="list-group-item list-group-item-action">Posts</a>
                    <a href="userdata.php" class="list-group-item list-group-item-action active">Userdata</a>
                    <a href="logout.php" class="list-group-item list-group-item-action">Log Out</a>
                </div>
            </div>

            <!-- DISPLAY CONTENT -->
            <?php
            $vsql = "SELECT * FROM wp_form";

            if ($result = $conn->query($vsql)) {
                ?>
                <div class="display-data">
                    <h2>EMPLOYEE DETAILS</h2>
                    <table id="searchTbl" class="table">
                        <thead class="table-dark">
                            <th> <button id="AddEmpBtn" class="btn btn-info" a href="Neel_Patel\PHP\MySQL\CRUD\form.php">
                                    Add
                                    Employee
                                    </a></button> </th>
                            <th>
                                <form action="search.php" method="POST">
                                    <input type="text" name="keyword" placeholder="Search">
                                    <input type="submit" name="searchBtn" value="SEARCH">
                                </form>
                            </th>
                        </thead>
                    </table>
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th> ID </th>
                                <th> FIRSTNAME </th>
                                <th> LASTNAME </th>
                                <th> USERNAME </th>
                                <th> EMAIL </th>
                                <th> GENDER </th>
                                <th> DOB </th>
                                <th> COUNTRY </th>
                                <th> HOBBY </th>
                                <th> MESSAGE </th>
                                <th> PROFILE </th>
                                <th> ACTION </th>
                            </tr>
                        </thead>

                        <?php
                        //Displaying result in the form of table
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                <td>
                                    <?= $row["id"] ?>
                                </td>
                                <td>
                                    <?= $row["fname"] ?>
                                </td>
                                <td>
                                    <?= $row["lname"] ?>
                                </td>
                                <td>
                                    <?= $row["uname"] ?>
                                </td>
                                <td>
                                    <?= $row["email"] ?>
                                </td>
                                <td>
                                    <?= $row["gender"] ?>
                                </td>
                                <td>
                                    <?= $row["dob"] ?>
                                </td>
                                <td>
                                    <?= $row["country"] ?>
                                </td>
                                <td>
                                    <?= $row["hobby"] ?>
                                </td>
                                <td>
                                    <?= $row["message"] ?>
                                </td>
                                <td>
                                    <img src="<?= 'uploads/' . $row['profile'] ?>" width="100px" alt="profile_pic">
                                </td>
                                <td>

                                    <!-- DELETE Button -->
                                    <form action="delete.php" method="post">
                                        <input type="hidden" value="<?= $row['id'] ?>" name="dID" />
                                        <input type="submit" class="btn btn-danger" value="DELETE" name="dltbtn" />
                                        <!-- EDIT Button -->
                                        <button name="edtbtn" class="btn btn-info"> <a href="edit.php?id=<?= $row['id'] ?>"
                                                style='text-decoration:none;'> Edit </a></button>
                                </td>
                                </form>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                </div>
                <?php
            } else {
                echo "Error!";
            }
            ?>
        </div>
    </div>
</body>

</html>