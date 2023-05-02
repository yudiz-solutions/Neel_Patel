<?php
include "connDB.php";

//UPDATE table_name SET column1=value, column2=value2,...WHERE some_column=some_value 

$sql = "UPDATE trainees SET fullName = 'UPDT_NEEL' WHERE id = 3";

if ($conn -> query($sql) == true) {
    echo "Reord updated Successfully !!";
} else {
    echo "ERROR in Updating !" . $conn -> error;
}

$conn -> close();
?>