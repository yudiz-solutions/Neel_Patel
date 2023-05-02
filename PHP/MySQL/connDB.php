<?php

$servername = "localhost";
$username = "n";
$password = "";
$dbname = "yudiz";

$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
    die ("Connection Error :" . $conn -> connect_error);
} else {
    echo "Connected !";
}

?>