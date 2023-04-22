<?php
//DB Connection
include "connDB.php";

//SELECT QUERY
$sql = "SELECT id, EmployeeID, fullName, Designation FROM trainees";
//OR
// $sql = "SELECT * FROM trainees";

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