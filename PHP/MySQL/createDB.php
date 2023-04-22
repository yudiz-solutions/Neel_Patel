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

//CREATING DB 'YUDIZ'
// $conn = "CREATE DATABASE Yudiz";

// if ($conn -> query($conn) == true) {
//     echo "DB created successfully";
// } else {
//     echo "ERROR !!" . $conn -> error;
// }

// SELECT DB THEN CREATE TABLE
$conn->select_db("yudiz");

// CREATING TABLE NAMED AS 'TRAINEES'
// $sql = "CREATE TABLE `trainees` (
//     `id` INT(3) NOT NULL AUTO_INCREMENT,
//     `EmployeeID` BIGINT(255) NOT NULL,
//     `fullName` VARCHAR(255) NOT NULL,
//     `Designation` VARCHAR(255) NOT NULL,
//     PRIMARY KEY (`id`))";

// if ($conn -> query($sql) == true) {
//     echo "Table created successfully";
// } else {
//     echo "Error!! Table is not created" . $conn -> error;
// }


//INSERTING DATA INTO THE 'TRAINEES'
// $sql = "INSERT INTO `trainees` (EmployeeID, fullName, Designation) VALUES ('2033', 'Neel Patel', 'Jr. Web Developer')";

// if ($conn -> query($sql) == true) {
//     $last_id = $conn -> insert_id;
//     echo "Values added successfully. Last insertion ID is:" . $last_id ;
// } else {
//     echo "Error! Values are not added !!";
// }


//IF THERE ARE MULTIPLE ENTRIES TO BE ADDED
$sql = "INSERT INTO `trainees` (EmployeeID, fullName, Designation) VALUES ('2033', 'Neel Patel', 'Jr. Web Developer');";
$sql .= "INSERT INTO `trainees` (EmployeeID, fullName, Designation) VALUES ('2034', 'Kaushal Gandhi', 'Jr. Web Designer');";
$sql .= "INSERT INTO `trainees` (EmployeeID, fullName, Designation) VALUES ('2035', 'Parth Thakkar', 'Jr. Game Developer');";

if ($conn -> multi_query($sql) === true) {
    $last_id = $conn -> insert_id;
    echo "Values added successfully. Last insertion ID is:" . $last_id ;
} else {
    echo "Error! Values are not added !!";
}


$conn -> close();
?>