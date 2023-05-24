<?php
// echo "Inside logout page";
session_destroy();
header("Location: ../index.php");
?>