<?php

// Inheritance

class Fruit {
  public $name;
  public $color;

  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }

  public function greet() {
    echo "Hello, my name is {$this->name}.";
  }

  public function identify() {
    echo "I am a fruit.";
  }
}

class Tomato extends Fruit {
  public function identify() {
    echo "Am I a fruit or a vegetable?";
  }
}

$tomato = new Tomato("Tomato", "red");
$tomato->greet();
echo "<br>";
$tomato->identify();
?>