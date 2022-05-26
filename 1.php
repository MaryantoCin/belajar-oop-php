<?php

// Classes

class Fruit {
  public $name;
  public $color;

  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new Fruit();
$apple->set_name('Apple');

echo $apple->get_name();
?>