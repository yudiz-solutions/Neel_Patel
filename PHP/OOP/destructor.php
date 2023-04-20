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
    
    //__construct() automatically called when we create an object
    function __construct($webdevelopment, $webdesign, $blockchain){
        $this -> webdevelopment = $webdevelopment;
        $this -> webdesign = $webdesign;
        $this -> blockchain = $blockchain;
    }

    //No need of set methods if we use __construct
    
    //__destruct automatically called at the end of the script
    function __destruct() {
        echo "Webdevelopment tech is:" . $this -> webdevelopment .
        "<br> Webdesign tech is:" . $this -> webdesign .
        "<br> Blockchain tech is:" . $this -> blockchain;
    }

}

//Objects
$tech = new Departments("Laravel", "HTML-CSS", "Python");

?>

