<?php
//To sort data we use ORDER BY in the SQL Query

include "connDB.php";

$sql = "SELECT id, EmployeeID, fullName, Designation FROM trainees ORDER BY EmployeeID"; 

$result = $conn -> query($sql);

if($result -> num_rows > 0) {
    while($row = $result -> fetch_assoc()) {
        echo "<br>id:" . $row["id"] . 
        "<br>EmployeeID:" . $row["EmployeeID"] .
        "<br>Fullname:" . $row["fullName"] .
        "<br>Designation:" . $row["Designation"] . "<br>";
    }
}
?>