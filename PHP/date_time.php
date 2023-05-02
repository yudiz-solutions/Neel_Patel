<?php

//Demostration of date() -> Gives server time
// echo "date() Function:  " . date("h:i:sa");

//-----------------------------------------------------

//Demostration of strtotime() -> Converts string into time
// $d=strtotime("tomorrow");
// echo "strtotime() Function:  " . date("Y-m-d h:i:sa", $d) . "<br>";

//-----------------------------------------------------

//Print next 8 sundays
$start = strtotime("Sunday");
$end = strtotime("+8 weeks", $start);

while ($start < $end) {
    echo date("M d", $start);
    echo "<br>";
    $start = strtotime("+1 week", $start);
}
?>