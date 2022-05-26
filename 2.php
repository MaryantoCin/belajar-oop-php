<?php

// Constructor

class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }

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

$grape = new Fruit("Grape", "purple");
echo $grape->get_name();
echo "<br>";
echo $grape->get_color();
?>