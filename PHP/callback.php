<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Callback</title>
</head>
<body>
<?php
function mainFun($arg) {
    return strlen($arg);
}

$arr = ["Laravel" , "Wordpress" , "Magento"];

$length = array_map("mainFun", $arr);
print_r($length);



?>
    
</body>
</html>