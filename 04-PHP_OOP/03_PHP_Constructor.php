<?php

/* PHP - The __construct Function
==================================

A constructor allows you to initialize an object's properties 
upon creation of the object.

If you create a "__construct()" function, PHP will automatically 
call this function when you create an object from a class.

Notice that the __construct() function starts with two underscores (__)!

We see in the example below, that using a constructor saves us 
from calling the set_name() method which reduces the amount of code: */


class Fruit
{
  public $name;
  public $color;

  function __construct($name)
  {
    $this->name = $name;
    echo "object created \n";
  }

  function get_name()
  {
    return $this->name;
  }
}


$apple = new Fruit("Apple", null);
echo $apple->get_name(), "\n";
echo "My fruit is : ", $apple->name, "\n";

// Another example:

echo "------------------------------------\n";

class Fruit_2
{
  public $name;
  public $color;

  function __construct($name, $color)
  {
    $this->name = $name;
    $this->color = $color;
    echo "object created again \n";
  }

  function get_name()
  {
    return $this->name;
  }

  function get_color()
  {
    return $this->color;
  }
}


$apple = new Fruit_2("Apple", "red");
echo "My " . $apple->get_name() . " are " . $apple->get_color(), "\n";
echo $apple->name, "\n";
echo $apple->color, "\n";
echo "My " . $apple->name . " are " . $apple->color;
