<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEKA</title>
</head>

<body>
    <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
        Enter your Effective hours:
        <input type=" number" name="hrs"><br><br>
        Enter your Effective minutes:
        <input type=" number" name="min"><br><br>
        <input type="submit" name = "submit" value="Calculate">
</body>

<?php

if (isset($_POST["submit"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hours = $_POST["hrs"];
    $minutes = $_POST['min'];
    
    $remainHrs = 7 - $hours;
    $remainMin = 60 -$minutes;
    
    echo "<br><br><b> You can go after: </b><br>";
    echo "<b>" . $remainHrs ." </b> Hrs. ";
    echo "<b>" . $remainMin . " </b> Min.";
    }
}

?>

</html>