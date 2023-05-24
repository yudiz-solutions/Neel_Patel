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

        .postform {}
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
                <div class="list-group" id="sidebar">
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
                    <a href="logout.php" class="list-group-item list-group-item-action">Log Out</a>
                </div>
            </div>

            <table>
                <thead>
                    <th>PostID</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Post Image</th>
                    <th>Caption</th>
                    <th>Hashtag</th>
                </thead>
                <?php
                $post_view_sql = "SELECT * FROM `wp_post`";
                $meta_view_sql = "SELECT pd.post_id , p1.meta_value AS p_caption , p2.meta_value AS p_hashtag FROM ( SELECT DISTINCT post_id FROM wp_meta ) AS pd LEFT JOIN wp_meta AS p1 ON p1.post_id = pd.post_id AND p1.meta_key = 'p_caption' LEFT JOIN wp_meta AS p2 ON p2.post_id = pd.post_id AND p2.meta_key = 'p_hashtag'";
                if ($result = $conn->query($post_view_sql)) {
                    while ($post_row = $result->fetch_assoc()) {
                        // print_r($post_row);
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
                                <?= $post_row['p_img'] ?>
                            </td>
                            <!-- </tr> -->
                            <?php
                        // die;
                    }

                }

                if ($result = $conn->query($meta_view_sql)) {
                    // print_r($result);
                    // die;
                    ?>
                        <?php
                        while ($row = $result->fetch_assoc()) {
                            // print_r($row);
                            ?>
                            <!-- <tr> -->

                            <td>
                                <?= $row['p_caption'] ?>
                            </td>
                            <td>
                                <?= $row['p_hashtag'] ?>
                            </td>
                        </tr>
                        <?php
                            // die;
                        }
                }
                ?>
            </table>
        </div>
    </div>
    </div>
</body>

</html>