<?php

$servername = "localhost";
$username = "n";
$password = "";

$conn = new mysqli($servername, $username, $password);

//If error !!
if (! $conn) {
    die ("Connection failed:" . $conn -> connect_error);
}
echo "Connected !!";

//After successfull connection
//Creating database - Yudiz
// $conn = "CREATE DATABASE Yudiz";

// if ($conn -> query($conn) == true) {
//     echo "DB created successfully";
// } else {
//     echo "ERROR !!" . $conn -> error;
// }

//Creating table - trainee
$sql = "CREATE TABLE yudiz. ( 'id' INT(3) NOT NULL AUTO_INCREMENT , 'EmployeeID' BIGINT(255) NOT NULL , 'Name' VARCHAR(255) NOT NULL , 'Designation' VARCHAR(255) NOT NULL , PRIMARY KEY ('id'))";

if ($conn -> query($sql) == true) {
    echo "Table created successfully";
} else {
    echo "Error!! Table is not created" . $conn -> error;
}
$conn -> close();
?>