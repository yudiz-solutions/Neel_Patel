<?php
class Math {
  public static $value=3.14159;
}

class X eXtends Math {
  public function staticVal() {
    return parent :: $value;
  }
}

// Via child class
echo X::$value;

echo "<br>";

// Via staticVal() method
$x = new X();
echo $x->staticVal();
?>