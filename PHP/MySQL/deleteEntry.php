<?php
include "connDB.php";

//DELETE FROM table_name WHERE some_column = some_value

$sql = "DELETE FROM trainees WHERE id = 2";

if ($conn -> query($sql) == true) {
    echo "DELETED SUCCESSFULLY";
} else {
    echo "ERROR !!" .$conn -> error;
}
?>