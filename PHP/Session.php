<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Storing values</title>
</head>
<body>
<?php
$_SESSION["name"] = "Neel";
echo "My name is " . $_SESSION["name"] ."<br>";
//  session_unset();
session_destroy();

echo "<br>After unsetting session" . $_SESSION["name"];

 ?>
</body>
</html>