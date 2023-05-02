<?php

function calcFunction($num) {
    if ($num % 2 !== 0) {
        throw new Exception("The number is Odd");
    } else {
        return ("Number is Even");
    }
}

try {
    echo calcFunction(5);
} catch (Exception) {
    echo "Please enter the Even number <br>";
} finally {
    echo " <br> Enter the number statically <br>";
    echo "PHP Advanced is Completed <br>";
}

?>