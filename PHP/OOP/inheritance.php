<?php

//Parent class
class AllDepartments {
    
    //PROPERTIES
    public $webdevelopment;
    public $webdesign;

    public function __construct($webdevelopment, $webdesign) {
        $this -> webdevelopment = $webdevelopment;
        $this -> webdesign = $webdesign;
    }

    public function techFun() {
        echo "Web-development is having " . $this -> webdevelopment .
        "<br> Web-design is having " . $this -> webdesign . "<br>" ;
    }
}

//Note: We can use final keyword with parent class to prevent inheritance

//Child class
class OtherDept extends AllDepartments {
    public $blockchain;

    public function __construct($webdevelopment, $webdesign, $blockchain) {
        $this -> webdevelopment = $webdevelopment;
        $this -> webdesign = $webdesign;
        $this -> blockchain = $blockchain;
    }

    public function otherFun() {
        echo "<b> Our departments are: </b>" . $this -> webdevelopment . "<br>"
        . $this -> webdesign . "<br>"
        . $this -> blockchain . "<br>" ;
    }
}

//OBJECTS
$yudiz = new OtherDept("Node-JS", "HTML-CSS", "Python" );
$yudiz -> techFun();
$yudiz -> otherFun();

?>