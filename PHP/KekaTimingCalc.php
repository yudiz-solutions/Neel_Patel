<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEKA</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        Enter your Effective hours:
        <input type="number" name="hrs"><br><br>
        Enter your Effective minutes:
        <input type="number" name="min"><br><br>

        ------------------------------------------------------------------------------------<br><br>

        Enter your Last Clock-in hours:
        <input type="number" name="c_hrs"><br><br>
        Enter your Last Clock-in minutes:
        <input type="number" name="c_min"><br><br>

        <input type="submit" name="submit" value="Calculate">
    </form>
</body>

<?php
date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)

if (isset($_POST["submit"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hours = $_POST["hrs"];
        $minutes = $_POST["min"];
        $c_hours = $_POST["c_hrs"];
        $c_minutes = $_POST["c_min"];

        // $xHr = date('h') - $c_hours;
        // $xMin = date('i') - $c_minutes;

        //Total hr 8
        $remainHrs = 7 - $hours;
        $remainMin = 60 - $minutes;

        $xHr = $remainHrs + $c_hours;
        $xMin = $remainMin + $c_minutes;
        //Leaving time
        // $lHr = $remainHrs + date('h');
        // $lMin = $remainMin + date('i');

        if ($xMin >= 60) {
            $leavingHr = $xHr + 1;
            $leavingMin = $xMin - 60;
        } else {
            $leavingHr = $xHr;
            $leavingMin = $xMin;
        }

        echo "<h3><br><br><b> You can go after: </b><br><h3>";
        echo "<b>" . $leavingHr . ": </b> ";
        echo "<b>" . $leavingMin  . "</b>";
        echo "<h1><br> The min might be differ, please go after 2-3 min </h1>";
    }
}

?>

</html>