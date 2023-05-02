<?php
//DB CONNECTION
include "connDB.php";

//USING PREPARE
$sql = $conn -> prepare("INSERT INTO `trainees` (EmployeeID, fullName, Designation) VALUES (?, ?, ?)");

//BIND STMT

// i - integer
// d - double
// s - string
// b - BLOB

$sql -> bind_param("iss", $empID, $name, $designation);

//SET PARAMS
$empID = "2050";
$name = "This is PREPARED";
$designation = "QA";
$sql -> execute();

$empID = "2055";
$name = "Barsan bhai";
$designation = "BA";
$sql -> execute();

$empID = "2060";
$name = "Kinjal Ma'am";
$designation = "HRE";
$sql -> execute();

echo "All records created successfully.";

$sql -> close();
$conn -> close();
?>