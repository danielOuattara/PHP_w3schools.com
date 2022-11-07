<!--------------------------------------------
Daniel OUATTARA- daniel.ouattara_AT_gmx.com
PHP Tutorial: https://www.w3schools.com/php/
17 05 2020
--------------------------------------------->

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Data Types</title>
</head>

<body>
  <h1>PHP Data Types</h1>
  <pre>

PHP Data Types
===============

Variables can store data of different types.
PHP supports the following data types:

 > String
 > Integer
 > Float (floating point numbers - also called double)
 > Boolean
 > Array
 > Object
 > NULL
 > Resource


PHP String
===========

A string is a sequence of characters, like "Hello world!".
A string can be any text inside quotes. You can use single or double quotes:
        </pre>
  <?php
  $x = "Hello";
  $y = 'Hello World Again!';
  echo "$x <br/>";
  echo $y;
  ?>
  <pre>

PHP Integer
===========

An integer data type is a non-decimal number between -2,147,483,648 and
2,147,483,647.

Rules for integers:
  > An integer must have at least one digit
  > An integer must NOT have a decimal point
  > An integer can be either positive or negative
  > Integers can be specified in: decimal (base 10), hexadecimal (base 16),
    octal (base 8), or binary (base 2) notation

In the following example $x is an integer. The PHP 'var_dump()' function returns
the data type and value:
         </pre>

  <?php
  $x = 5674;
  echo var_dump($x);  // output: int(5674);
  ?>

  <pre>


PHP Float
==========

A float (floating point number) is a number with a decimal point or a number
in exponential form.

In the following example $x and $y are floats. The PHP 'var_dump()' function returns
the data type and value
          </pre>
  <?php
  $x = 3.1459;
  $y = 1.5e-4;
  var_dump($x);  // output: float(3.1459);
  var_dump($y);  // output: float(3.1459);
  ?>
  <pre>

PHP Boolean
============

A Boolean represents two possible states: TRUE or FALSE.
$x = true;
$y = false;

        </pre>
  <?php

  $highSalary = TRUE;
  $fired = FALSE;

  echo "highSalary = " . $highSalary . "<br/>"; // highSalary = 1
  echo "fired = " . $fired . "<br/>";  // fired = 0 (expected )
  // fired =   (really)
  ?>
  <pre>

Booleans are often used in conditional testing. You will learn more about
conditional testing in a later chapter of this tutorial.

PHP Array
==========

An array stores multiple values of different datatype in one single variable.

In the following example $cars is an array. The PHP 'var_dump()' function returns
the data type and value:
           </pre>
  <?php
  $cars = array("Mercedes", "BMW", "Toyota");
  var_dump($cars);
  echo "<br />";

  $numbers = array(1, 4, 18);
  var_dump($numbers);
  // array(3) { [0]=> string(8) "Volvo" [1]=> string(3) "BMW"
  // [2]=> string(6) "Toyota" }
  echo "<br />";

  $list = array(true, 1, "one");
  var_dump($list);
  echo "<br />";
  ?>

  <pre>
You will learn a lot more about arrays in later chapters of this tutorial.


PHP Object
===========

Classes and objects are the two main aspects of object-oriented programming.

A class is a template for objects, and an object is an instance of a class.

When the individual objects are created, they inherit all the properties and behaviors 
from the class, but each object will have different values for the properties.

Let's assume we have a class named Car. 
A Car can have properties like model, color, etc. We can define variables like 
$model, $color, and so on, to hold the values of these properties.

When the individual objects (Volvo, BMW, Toyota, etc.) are created, they inherit all 
the properties and behaviors from the class, but each object will have different values 
for the properties.

If you create a __construct() function, PHP will automatically call this function 
when you create an object from a class.

In PHP, an 'object' must be explicitly declared.

First we must declare a 'class of object'. For this, we use the 'class' keyword.

A "class" is a structure that can contain properties and methods:
</pre>

  <?php

  //------------------------------------------------------
  class Car
  {
    public $color;
    public $model;
    public function __construct($color, $model)
    {
      $this->color = $color;
      $this->model = $model;
    }
    public function message()
    {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }

  $myCar = new Car("Red", "Volvo");
  echo $myCar->message();
  echo "</br>";

  $myCar = new Car("black", "Toyota");
  echo $myCar->message();
  echo "</br>";

  //------------------------------------------------------
  class Person
  {
    public $firstName;
    public $lastName;
    public function __construct($firstName, $lastName)
    {
      $this->firstName = $firstName;
      $this->lastName = $lastName;
    }
    public function description()
    {
      return "My name is " . $this->firstName . "  " . $this->lastName . "!";
    }
  }

  $teacher = new Person("John", "Doe");
  echo $teacher->description();
  echo "</br>";


  // -----------------------------------------

  class Bike
  {
    public $model;
    public $color;
    public function __construct($model, $color)
    {
      $this->model = $model;
      $this->color = $color;
    }
    public function message()
    {
      return "My car is" . $this->model . " The color is " . $this->color;
    }
  }

  $myBike = new Bike("Red", "Peugeot 21");
  echo $myBike->message();
  echo "</br>";

  // ---------------------------------

  class SuperBike
  {
    public $model;
    public $color;
    public function __construct($color, $model)
    {
      $this->model = $model;
      $this->color = $color;
    }
    public function showData()
    {
      return "My bike color is " . $this->color . " It is a " . $this->model;
    }
  }

  $mySuperBike = new SuperBike("red", "peugoet-105");
  echo $mySuperBike->showData();
  echo "</br>";
  ?>

  <pre>


PHP NULL Value
==============

'NULL' is a special data type which can have only one value: NULL.
A variable of data type 'NULL' is a variable that has no value assigned to it.

Tip: If a variable is created 'without a value', it is automatically assigned a
---- value of NULL.

Variables can also be 'emptied' by setting the value to NULL:
 </pre>

  <?php
  $home;
  // var_dump($home);  // --> raise an error !
  $x = null;
  var_dump($x);  // output: NULL;
  ?>

  <pre>


PHP Resource
=============

The special 'resource' type is not an actual data type. It is the storing of a
reference to functions and resources external to PHP.

A common example of using the resource data type is a database call.

We will not talk about the resource type here, since it is an advanced topic.
             </pre>
</body>

</html>