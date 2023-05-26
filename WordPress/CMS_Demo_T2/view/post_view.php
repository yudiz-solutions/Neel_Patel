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
    <title>Posts</title>
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

        .post-edt-btn {
            color: white;
        }
    </style>
</head>

<body>
    <?php
    //DB Connection
    include "../common/DBconn.php";
    ?>
    <div class="container-fluid">
        <div class="row">
            <!-- SIDEBAR -->
            <div class="col-md-3">
                <div class="list-group sidebar" id="sidebar">
                    <a href="dashboard.php" class="list-group-item list-group-item-action">Dashboard</a>
                    <a href="post_reg.php" class="list-group-item list-group-item-action active">Posts</a>
                    <ul>
                        <li>
                            <a href="post_reg.php" class="list-group-item list-group-item-action">Add Posts</a>
                        </li>
                        <li>
                            <a href="post_view.php" class="list-group-item list-group-item-action active">View Posts</a>
                        </li>
                    </ul>
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

            <!-- DISPLAY DATA -->
            <div class="display-data">
                <table class="table">
                    <thead class="table-dark">
                        <th>PostID</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Post Image</th>
                        <th>Caption</th>
                        <th>Hashtag</th>
                        <th>Action</th>
                    </thead>
                    <?php
                    //Query for wp_post table
                    $post_view_sql = "SELECT * FROM `wp_post`";
                    $post_sql_result = $conn->query($post_view_sql);

                    //Query for meta-values
                    $meta_view_sql = "SELECT pd.post_id , p1.meta_value AS p_caption , p2.meta_value AS p_hashtag FROM ( SELECT DISTINCT post_id FROM wp_meta ) AS pd LEFT JOIN wp_meta AS p1 ON p1.post_id = pd.post_id AND p1.meta_key = 'p_caption' LEFT JOIN wp_meta AS p2 ON p2.post_id = pd.post_id AND p2.meta_key = 'p_hashtag'";
                    $meta_sql_result = $conn->query($meta_view_sql);

                    while ($meta_row = $meta_sql_result->fetch_assoc() and $post_row = $post_sql_result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td>
                                <?= $post_row['p_id'] ?>
                            </td>
                            <td>
                                <?= $post_row['p_fname'] ?>
                            </td>
                            <td>
                                <?= $post_row['p_lname'] ?>
                            </td>
                            <td>
                                <?= $post_row['p_email'] ?>
                            </td>
                            <td>
                                <img src="<?= 'uploaded_posts/' . $post_row['p_img'] ?>" width="100px" alt="profile_pic">
                            </td>
                            <td>
                                <?= $meta_row['p_caption'] ?>
                            </td>
                            <td>
                                <?= $meta_row['p_hashtag'] ?>
                            </td>
                            <td>
                                <form action="post_dlt.php" method="post">
                                    <input type="hidden" value="<?= $post_row['p_id'] ?>" name="post_dID" />
                                    <input type="submit" class="btn btn-danger" value="DELETE" name="post_dltbtn" />
                                </form>
                                <button class="btn btn-info post-edt-btn" name="post-edt-btn"><a
                                        href="post_edit.php?p_id=<?= $post_row['p_id'] ?>"
                                        class="post-edt-btn">Edit</a></button>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>