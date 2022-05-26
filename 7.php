<?php

// Interface

abstract class Fruit {
  abstract public function greet();
}

interface CanBrown {
  public function browning();
}

class Apple extends Fruit implements CanBrown {
  public function greet() {
    return "Hello, my name is Apple. I'm red but I can be green at times.";
  }

  public function browning() {
    return "The apple is browning. It has been left in open air for too long.";
  }
}

$apple = new Apple();
echo $apple->greet();
echo "<br>";
echo $apple->browning();
?>