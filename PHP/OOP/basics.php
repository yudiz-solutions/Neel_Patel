<?php
class Departments
{
    //Properties
    //Public property can be accessed everywhere
    public $webdevelopment;

    //Private property can be accessed only within the parent class
    private $webdesign;

    //protected prop. can be accessed only within the class itself and by inheriting child classes.
    protected $blockchain;


    //Methods
    //$this refers to the current object and only available inside method
    function set_webdevelopment($webdevelopment) {
        $this -> webdevelopment = $webdevelopment;
    }

    function set_webdesign($webdesign) {
        $this -> webdesign = $webdesign;
    }

    function set_blockchain($blockchain) {
        $this -> blockchain = $blockchain;
    }

    function get_webdevelopment() {
        return $this -> webdevelopment;
    }

    function get_webdesign() {
        return $this -> webdesign;
    }

    function get_blockchain() {
        return $this -> blockchain;
    }

}

//Objects
$tech = new Departments();

//To check if an object belongs to a specific class
var_dump($tech instanceof Departments);

$tech -> set_webdevelopment("Laravel");
$tech -> set_webdesign("HTML-CSS");
$tech -> set_blockchain("Python");

//Let's print them
echo "Web-development: " . $tech -> get_webdevelopment() . "<br>";
echo "Web-design: " . $tech -> get_webdesign() . "<br>";
echo "Block-chain: " . $tech -> get_blockchain();

?>