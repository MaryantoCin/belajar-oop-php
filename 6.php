<?php

// Abstraction

abstract class Fruit {
  abstract public function greet();
}

class Apple extends Fruit {
  public function greet() {
    return "Hello, my name is Apple. I'm red but I can be green at times.";
  }
}

class Banana extends Fruit {
  public function greet() {
    return "Hello, my name is Banana. I'm yellow most of the times.";
  }
}

$apple = new Apple();
echo $apple->greet();
echo "<br>";

$banana = new Banana();
echo $banana->greet();
?>