<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
    <style>.error {color: red;}</style>
</head>
<body>

    
    <?php

$name = $dept = "";
$nameErr = $deptErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Enter the name !!";
    } else {
        $name = inputValidation($_POST[$data]);
        if (!preg_match("/^[a-zA-Z-']*$/", $name)) {
            $nameErr = "Invalid format";
        }
    }

    if (empty($_POST["dept"])) {
        $deptErr = "Enter your department !!";
    } else {
        $dept = inputValidation($_POST[$data]);
        if (!preg_match("/^[a-zA-Z-']*$/", $dept)) {
            $deptErr = "Invalid format";
        }
    }
}

function inputValidation($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!--HTML FORM -->
<!-- GET is having limitation of 2000 characters -->
<!-- POST has no limit -->
<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
Name:
<input type = "text" name = "name" placeholder = "Enter your name">
<span class = "error">* <?=$nameErr;?></span>
<br><br>
Department:
<input type = "text" name = "dept" placeholder = "Enter your department">
<span class = "error">* <?=$deptErr;?></span>
<br><br>
<input type = "submit" name = "submitBtn" value = "SUBMIT" >
</form>

Showing 
<?php
        echo "<br>" . $_POST["name"] . "<br>" . $_POST["dept"];
?>

</body>
</html>