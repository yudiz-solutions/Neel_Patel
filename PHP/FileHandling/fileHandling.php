<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Handling</title>
</head>
<body>

<?php
// echo  readfile("file.txt");

// $file = fopen("file.txt", "r");
// echo fread($file, filesize("file.txt"));
// fclose($file);

//////////////////////////////////////////////////

// $file = fopen("file.txt", "r") or die("File doesn't exists.");
// // echo fread($file, filesize("file.txt"));
// while (!feof($file)) {
//     //If we don't know the file size
//     // echo fgets($file); //Reads single line
//     // echo fgetc($file); //Reads single character (Char. by Char. untill feof)
// }
// fclose($file);

//////////////////////////////////////////////////

// $file = fopen("newFile.txt", "w");

// $firstLine = "This is the first line \n";
// fwrite($file, $firstLine);

// $secondLine = "This is the second line \n";
// fwrite($file, $secondLine);
// //Let's overwrite second line
// $secondLine = "This is the overwriting \n";
// fwrite($file, $secondLine);

// fclose($file);

//////////////////////////////////////////////////
// Append Text
$file = fopen("newFile.txt", "w");

$txt = "Neel \n";
fwrite($file, $txt);
$txt1 = "PHP is Fun \n";
fwrite($file, $txt1);
$txt = "Neel is working on PHP \n";
fwrite($file, $txt);

fclose($file);





?>
    
</body>
</html>