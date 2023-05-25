<?php
session_start();
//If directly hitting URL (Without Login) 
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: ../index.php');
    exit;
}

//DB Connection
include "../common/DBconn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form_EDIT</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .error {
            color: red;
        }

        #updt-head {
            background-color: #212529;
            color: white;
            text-align: center;
        }

        .form-outline {
            padding-left: 12px;
            padding-right: 12px;
        }

        .form-label {
            padding-left: 0px;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_GET['p_id'])) {
        $p_id = $_GET['p_id'];
        // echo $p_id; //Done
    
        $fetch_query = "SELECT * FROM wp_post, wp_meta WHERE wp_post.p_id=wp_meta.post_id = $p_id";

    }

    if (isset($_POST['post-edt-btn'])) {

    }

    ?>

</body>

</html>