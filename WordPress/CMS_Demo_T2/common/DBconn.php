<?php

$conn = new mysqli("localhost", "n", "", "yudiz");

if (!$conn) {
    die("Connection Error :" . $conn->connect_error);
}

?>