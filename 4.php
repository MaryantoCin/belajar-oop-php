<?php

// Access Modifiers

class Fruit {
  public $name;
  protected $color;
  private $price;

  function __destruct() {
    echo "The {$this->color} {$this->name} with the price of {$this->price} has been destructed.";
  }

  function set_name($val) {
    $this->name = $val;
  }
  function set_color($val) {
    $this->color = $val;
  }
  function set_price($val) {
    $this->price = $val;
  }
}

$mango = new Fruit();
$mango->set_name('Mango');
$mango->set_color('Yellow');
$mango->set_price('300');

echo $mango->name;
echo "<br>";
// echo "$mango->color";
// echo "<br>";
// echo $mango->price;
// echo "<br>";
?>