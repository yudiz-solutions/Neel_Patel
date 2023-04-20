<?php

//Parent class
class TechDepartments {
    
    //Properties
    public $webdevelopment;
    public $webdesign;

    public function __construct($webdevelopment, $webdesign) {
        $this -> webdevelopment = $webdevelopment;
        $this -> webdesign = $webdesign;
    }

    public function techFun() {
        echo "Web-development is having " . $this -> webdevelopment .
        "<br> Web-design is having " . $this -> webdesign ;
    }
}

//Child class
class BusinessDept extends TechDepartments {
    public function businessFun() {
        echo "Business department is also as much important as Tech department <br>";
    }
}

//Objects
$yudiz = new BusinessDept("Node-JS", "HTML-CSS");
$yudiz -> businessFun();
$yudiz -> techFun();

?>