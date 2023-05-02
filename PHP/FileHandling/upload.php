<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPLOAD</title>
</head>

<body>
<form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST" enctype = "multipart/form-data">
    <h2>Select file to upload:</h2>
    <input type = "file" name = "fileToUpload" ><br><br>
    <input type = "submit" name = "submit" value = "UPLOAD">
</form>

<?php
$target_folder = "uploads/";
$target_file  = $target_folder . basename($_FILES["fileToUpload"]["name"]);
$upload = 1;

if (file_exists($target_file)) {
    echo "File already exist !!!";
    $upload = 0;
}

if ($upload == 0) {
    echo "Oops, File wasn't uploaded";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<br>" . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . "has been uploaded";
    } else {
        echo "Error in uploading files !!";
    }
}
?>
</body>

</html>