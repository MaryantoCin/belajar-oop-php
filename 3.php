<?php

// Destructor

class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  function __destruct() {
    echo "The {$this->color} {$this->name} has been destructed.";
  }
}

$apple = new Fruit("Apple", "red");
?>