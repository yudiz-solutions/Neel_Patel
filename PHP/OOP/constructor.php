<?php




?><?php
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
    
    //__construct() automatically called when we create an object
    function __construct($webdevelopment, $webdesign, $blockchain){
        $this -> webdevelopment = $webdevelopment;
        $this -> webdesign = $webdesign;
        $this -> blockchain = $blockchain;
    }

    //No need of set methods if we use __construct

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
$tech = new Departments("Laravel", "HTML-CSS", "Python");

//Let's print them
echo "Web-development: " . $tech -> get_webdevelopment() . "<br>";
echo "Web-design: " . $tech -> get_webdesign() . "<br>";
echo "Block-chain: " . $tech -> get_blockchain();

?>