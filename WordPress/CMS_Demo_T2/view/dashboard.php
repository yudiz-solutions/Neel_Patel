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
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .active {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>

<body>
    <?php
    // Get username from session variable
    $l_uname = $_SESSION['l_uname'];
    ?>

    <?php
    //DB Connection
    include "../common/DBconn.php";
    ?>
    <div class="container-fluid">
        <div class="row">
            <!-- SIDEBAR -->
            <div class="col-md-3">
                <div class="list-group" id="sidebar">
                    <a href="dashboard.php" class="list-group-item list-group-item-action active">Dashboard</a>
                    <a href="post_reg.php" class="list-group-item list-group-item-action">Posts</a>
                    <a href="userdata.php" class="list-group-item list-group-item-action">Userdata</a>
                    <!-- LOGOUT SECTION -->
                    <form method="post" id="logoutTbl">
                        <input type="submit" class="list-group-item list-group-item-action" name="logout-btn"
                            value="Log Out">
                    </form>
                    <?php
                    if (isset($_POST['logout-btn'])) {
                        session_destroy();
                        header("Location: ../index.php");
                    }
                    ?>
                </div>
            </div>

            <!-- DISPLAY CONTENT -->
            <?php
            echo "Welcome &nbsp <b>" . $l_uname . "</b> &nbsp (Not &nbsp <b>" . $l_uname . "</b> &nbsp ?? &nbsp <a href = 'logout.php'>logout</a>)";
            ?>
        </div>
    </div>
</body>

</html>