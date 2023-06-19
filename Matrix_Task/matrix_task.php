<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neel's Matrix</title>
</head>
<body>

<!-- User Input -->
<form action = "matrix.php"; method = 'POST'>
    Enter an odd number:
    <input type = "text" name = "n">
    <br><br>
    <input type = "submit" name = "submit" value = "Enter">
    <br><br>
</form>
    
<?php

if (isset($_POST["submit"])) {
    $n = $_POST["n"];
    // echo $n;
    
    if ($n % 2 !== 0) {
        $arr = [];
        for ($i = 0; $i < $n; $i++) {
            $arr[] = array_fill(0, $n, 0); //array_fill(index, num, val);
        }

        //Init Pos
        $row = 0;
        $col = $n / 2 - 0.5;
        
        for ($i = 1; $i <= $n*$n; $i++) {
            $arr[$row][$col] = $i;

            //New Pos - Case1 (R- C+)
            $newRow = $row;
            $newCol = $col;

            $newRow--;
            if ($newRow < 0) {
                $newRow = $n - 1;
            }

            $newCol++;
            if ($newCol >= $n) {
                $newCol = 0;
            }
        
            //Case2 - Cell is already occupied (R+ C)
            if ($arr[$newRow][$newCol] != 0) {

                $newRow = $row + 1;
                    if ($newRow >= $n) {
                        $newRow = 0;
                    }

                $newCol = $col;
            }

            $row = $newRow;
            $col = $newCol;
        }
?>
        
        <table border = '1px'>
            <?php for ($i = 0; $i < $n; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $n; $j++) {
                    echo "<td>". $arr[$i][$j] ."</td>";
                }
                echo "</tr>";
            } ?>
        </table>
        
<?php
    
    } else {
        echo "Please enter odd number!!";
    }
}

?>
</body>
</html>

