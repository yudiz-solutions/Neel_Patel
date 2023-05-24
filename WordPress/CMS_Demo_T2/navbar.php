<!DOCTYPE html>
<html>

<head>
    <title>Side-Bar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Highlighted item style */
        .active {
            background-color: #007bff;
            color: #fff;
        }

        .container-fluid {
            background-color: yellow;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group" id="sidebar">
                    <a href="dashboard.php" class="list-group-item list-group-item-action active">Dashboard</a>
                    <li><a href="post.php" class="list-group-item list-group-item-action">Posts</a></li>
                    <ul class="">
                        <li><a href="post.php" class="list-group-item list-group-item-action">Posts</a></li>
                        <li><a href="post.php" class="list-group-item list-group-item-action">Posts</a></li>
                        <li><a href="post.php" class="list-group-item list-group-item-action">Posts</a></li>
                        <li><a href="post.php" class="list-group-item list-group-item-action">Posts</a></li>
                    </ul>
                    <a href="userdata.php" class="list-group-item list-group-item-action">Userdata</a>
                    <a href="#logout" class="list-group-item list-group-item-action">Log Out</a>
                </div>
            </div>
        </div>
    </div>


</body>

</html>