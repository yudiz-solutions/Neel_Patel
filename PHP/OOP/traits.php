<?php

//Triats are used to allow inherit multiple behaviours

trait T1
{
    public function msg1()
    {
        echo "This is msg1";
    }
}

trait T2
{
    public function msg2()
    {
        echo "This is msg2";
    }
}

class UseT1
{
    use T1;
}

class UseT2
{
    use T2;
}

class UseT1T2
{
    use T1, T2;
}

$obj1 = new UseT1();
$obj1 -> msg1();
echo "<br>";

$obj2 = new UseT2();
$obj2 -> msg2();
echo "<br>";

$obj3 = new UseT1T2();
$obj3 -> msg1();
echo "<br>";
$obj3 -> msg2();
echo "<br>";


?>