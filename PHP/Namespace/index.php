<?php

include "file1.php";
use file1 as f1; //Alias

include "file2.php";
use file2 as f2; //Alias

file1\greetings();
echo "<br>";
$obj1 = new f1\File1;
$obj1 -> f1Function();

echo "<br><br>";

file2\greetings();
echo "<br>";
$obj2 = new f2\File2;
$obj2 -> f2Function();

?>