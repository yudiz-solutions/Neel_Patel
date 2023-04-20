<?php

//ENCODING

// $arr = ["PHP" => "Neel", "Python" => "KirtanSir", "Java" => "Kaushal", "C" => "Yudiz"];
// echo json_encode($arr);

//DECODING

// $jsonobj = '{"PHP" : "Neel", "Python" : "KirtanSir", "Java" : "Kaushal", "C" : "Yudiz"}';
// print_r(json_decode($jsonobj));


//ACCESSING DECODED VALUES

$jsonobj = '{"PHP" : "Neel", "Python" : "KirtanSir", "Java" : "Kaushal", "C" : "Yudiz"}';

$obj = json_decode($jsonobj);

// echo $obj->PHP . "<br>";
// echo $obj->Python . "<br>";
// echo $obj->Java . "<br>";
// echo $obj->C . "<br>";

//BY USING LOOP

foreach ($obj as $key => $val) {
    echo $key . "=>" . $val . "<br>";
}



?>