<?php

// Polymorphism

class Fruit {
  public function greet() {
    return "Hello, I am a kind of fruit.";
  }
}

class Apple extends Fruit{
  public function greet() {
    return "Hello, my name is Apple. I'm red but I can be green at times.";
  }

  // PHP doesn't support overloading

  function __call($name_of_function, $arguments) {
    if($name_of_function == 'greetWithName') {
        switch (count($arguments)) {
            case 1:
                return "Hello $arguments[0], I am a kind of fruit.";
            case 2:
                return "Hello $arguments[0] & $arguments[1], I am a kind of fruit.";
        }
    }
  }
}

$apple = new Apple();
echo $apple->greet();
echo "<br>";
echo $apple->greetWithName("Mary");
echo "<br>";
echo $apple->greetWithName("Mary", "Ryan");
?>