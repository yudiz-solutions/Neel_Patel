<?php

interface Yudiz
{
    public function intro();
}

class Webdevelopment implements Yudiz
{
    public function intro() {
        echo "We build WEBSITES for the client";
    }
}

class Mobile implements Yudiz
{
    public function intro() {
        echo "We build MOBILE APPLICATIONS for the client";
    }
}

class HR implements Yudiz
{
    public function intro() {
        echo "We take care of our employees";
    }
}

$webdev = new Webdevelopment();
$webdev -> intro();
echo "<br>";

$mobile = new Mobile();
$mobile -> intro();
echo "<br>";

$HR = new HR();
$HR -> intro();

?>