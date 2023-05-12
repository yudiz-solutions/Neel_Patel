<?php
session_start();

//If directly hitting URL (Without Login) 
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: LoginForm.php');
    exit;
}

// Get username from session variable
$l_uname = $_SESSION['l_uname'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Profile Page</title>
</head>

<body>

    <h1>Hello
        <?php echo $l_uname; ?>!
    </h1>

    <form method="post" action="">
        <input type="submit" name="logout-btn" value="Log Out">
    </form>

    <?php
    if (isset($_POST['logout-btn'])) {
        session_destroy();
        header("Location: LoginForm.php");
    }
    ?>

</body>

</html>