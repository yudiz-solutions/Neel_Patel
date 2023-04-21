<?php

$servername = "localhost";
$username = "n";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

mysqli_close($conn);

if (!$conn) {
    die("Connection failed");
} else {
    echo "Connection successfully !!";
}

?>