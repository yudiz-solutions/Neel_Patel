<?php

//Abstract parent class
abstract class Animal
{
    public $name;

    public function __construct($name)
    {
        $this -> name = $name;
    }

    //Abstract method of parent class which can be used by child classes as per the requirement
    abstract public function description();
}

//Child classes
class DomesticAnimal extends Animal
{
    //Using abstract method of the parent class
    public function description()
    {
        echo $this -> name . " is a domestic Animal. <br>";
    }
}

class WildAnimal extends Animal
{
    public function description()
    {
        echo $this -> name . " is a wild Animal. <br>";
    }
}

//Creating objects of child classes and accessing the abstract method
$domestic = new DomesticAnimal("Cow");
$domestic -> description();

$wild = new WildAnimal("Lion");
$wild -> description();

?>