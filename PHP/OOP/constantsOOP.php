<?php

class Main
{
    //Uppercase to define constant and const keyword
    const MSG  = "This is the constant <br>";

    public function displayConst()
    {
        //use Scope resolution operator to access the constant
        echo Main :: MSG;
        //or
        // echo self :: MSG;
    }
}

//OBJ
$obj = new Main;
$obj -> displayConst();

?>