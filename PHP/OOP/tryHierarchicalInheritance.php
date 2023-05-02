<?php

class A {
    public function printA() {
        echo "PRINT A<br>";
    }
}

class B extends A {
    $this -> printA();
    public function printB() {
        echo "PRINT B<br>"
    }
}

class C extends A {
    public function printC() {
        $this -> printA();
        echo "PRINT C."
    } 
}

$obj = new C;
$obj -> printC();
?>