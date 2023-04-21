<?php

$servername = "localhost";
$username = "n";
$pass = "";

$conn = mysqli_connect($servername, $username, $pass);

if (!$conn) {
    die("Connection failed");
} else {
    echo "Connection successfully !!";
}

?>