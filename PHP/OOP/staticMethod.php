<?php
//We can call static methods directly without creating instance of the class

// class ClassName
// {
//     public static function sMethod() {
//         echo "This is static method";
//     }
// }
// ClassName :: sMethod();

//ANOTHER WAY

// class ClassName
// {
//     public static function sMethod() {
//         echo "This is another static method";
//     }
//     public function __construct() {
//         ClassName :: sMethod();
//     }
// }
// new ClassName();


/////////////////////////////////////////////////////

// class C1 {
//     public static function c1Fun() {
//         echo "This is static C1 Function";
//     }
// }

// class C2 {
//     public function print() {
//         C1 :: c1Fun();
//         echo "<br>This is print function from class C2";
//     }
// }

// $obj = new C2;
// $obj -> print();

/////////////////////////////////////////////////////

class Yudiz {
    protected static function interns() {
        return "Neel <br> Kaushal <br> Shweta <br> Hardik";
    }
}

class Developers extends Yudiz {
    public $employee;

    public function __construct() {
        $this -> employee = Yudiz :: interns();
    }
}

$obj = new Developers;
echo $obj -> employee;




?>