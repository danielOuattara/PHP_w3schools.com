<?php

class Car {
  public $color;
  public $model;

  public function __constructor($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }

  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

  $myCar = new Car("Red", "Volvo");
  echo $myCar -> message();
  echo "</br>";

  $myCar = new Car("black", "Toyota");
  echo $myCar -> message();
?>