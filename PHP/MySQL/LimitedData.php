<?php
//DB Connection
include "connDB.php";

//Limiting the data using LIMIT in Query

//WILL SELECT ONLY FIRST 5 ENTRIES
// $sql = "SELECT * FROM trainees LIMIT 5";

//WILL SELECT 5 ENTRIES AFTER ENTRY NO. 10
$sql = "SELECT * FROM trainees LIMIT 5 OFFSET 10";

$result = $conn -> query($sql);

//OUTPUT
while ($row = $result -> fetch_assoc()) {
    echo "<br>ID:" . $row["id"] .
    "<br>EmployeeID:" . $row["EmployeeID"] .
     "<br>Fullname:" . $row["fullName"] .
     "<br>Designation:" . $row["Designation"]  . "<br>";
}

$conn -> close();
?>