
<?php


/* PHP - What is Inheritance ?
===============================

Inheritance in OOP = when a class is derived from another class.

The child class will inherit all the 'public' and 'protected' 
properties and methods from the parent class. 

In addition, it can have its own properties and methods.

An inherited class is defined by using the "extends" keyword.

Let's look at an example:  */


class Fruits_1
{
  public $name;
  public $color;

  public function __construct($name, $color)
  {
    $this->name = $name;
    $this->color = $color;
  }

  public function intro()
  {
    echo "The fruit is {$this->name} and the color is {$this->color}. <br/>";
  }
}



// Strawberry is inherited from Fruit

class Strawberry_1 extends Fruits_1
{
  public function message()
  {
    echo "Am I a fruit or a berry ? <br/> ";
  }
}


$strawberry = new Strawberry_1("Strawberry", "red");  // OK!
$strawberry->message();  // OK!
$strawberry->intro();  // OK!

echo "<br/>----------------------------------<br/>";



/* Example Explained
---------------------
The Strawberry class is 'inherited' from the Fruits class.

This means that the Strawberry_1 class can use the public '$name' 
and '$color' properties as well as the public '__construct()' 
and 'intro()' methods from the Fruits_1 class because of inheritance.

The Strawberry class also has its own method: 'message()'.



PHP - Inheritance and the Protected Access Modifier
=====================================================

In the previous chapter we learned that protected properties or 
methods can be accessed within the class and by classes derived 
from that class. What does that mean?

Let's look at an example: */


class Fruits_2
{
  public $name;
  public $color;

  public function __construct($name, $color)
  {
    $this->name = $name;
    $this->color = $color;
  }

  protected function intro()
  {
    echo "The fruit is {$this->name} and the color is {$this->color} 2 . <br/>";
  }
}


class Strawberry_2 extends Fruits_2
{
  public function message()
  {
    echo "Am I a fruit or a berry ? 2 <br/>";
  }

  public function output_intro_protected()
  {
    $this->intro();
  }
}

// Try to call all three methods from outside class
$strawberry = new Strawberry_2("Strawberry", "green");  // OK. __construct() is public
$strawberry->message(); // OK. message() is public
# $strawberry->intro(); // ERROR. intro() is protected
$strawberry->output_intro_protected();

echo "<br/>----------------------------------<br/>";



/* In the example above we see that if we try to call a protected 
method "intro()" from outside the class, we will receive an error. 

All public methods work fine!

Let's look at another example: */


class Fruit_3
{
  public $name;
  public $color;

  public function __construct($name, $color)
  {
    $this->name = $name;
    $this->color = $color;
  }

  protected function intro()
  {
    echo "The fruit is {$this->name} and the color is {$this->color}. <br/>";
  }
}

//----

class Strawberry_3 extends Fruit_3
{
  public function message()
  {
    echo "Am I a fruit or a berry: Question ?  3<br/> ";
    $this->intro(); // Call protected method from within derived class - OK
  }
}

$strawberry = new Strawberry_3("Strawberry", "orange"); // OK. __construct() is public

$strawberry->message(); // OK. message() is public and it calls intro()
// which is protected from within the derived class

echo "<br/>----------------------------------<br/>";


/* In the example above we see that all works fine! 
   It is because we call the "protected" method 
   "intro()" from inside the derived class.




PHP - Overriding Inherited Methods
==================================

Inherited methods can be overridden by redefining 
the methods in the child class by using the same name.

Look at the example below. The "__construct()" and "intro()" 
methods from the child class Strawberry_4 will override 
the "__construct()" and "intro()" methods in the parent class Fruit_4 : */


class FruitFour_4
{
  public $name;
  public $color;

  public function __construct($name, $color)
  {
    $this->name = $name;
    $this->color = $color;
  }

  public function intro()
  {
    echo "The fruit is {$this->name} and the color is {$this->color}.<br/>";
  }
}

//----

class StrawberryFour_4 extends FruitFour_4
{
  public $weight;

  public function __construct($name, $color, $weight)
  {
    $this->name = $name;
    $this->color = $color;
    $this->weight = $weight;
  }

  public function intro()
  {
    echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram. <br/>";
  }
}

$strawberry = new StrawberryFour_4("Strawberry", "yellow", 50);

$strawberry->intro();

echo "<br/>----------------------------------<br/>";


#------------------------------------------------------------------------------------

class FruitFour_4_bis
{
  public $name;
  public $color;

  public function __construct($name, $color)
  {
    $this->name = $name;
    $this->color = $color;
  }

  public function intro()
  {
    echo "The fruit is {$this->name} and the color is {$this->color}.<br/>";
  }
}

//----

class StrawberryFour_4_bis extends FruitFour_4_bis
{
  public $weight;

  public function __construct($name, $color, $weight)
  {
    parent::__construct($name, $color);
    $this->weight = $weight;
  }

  public function intro()
  {
    echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram. <br/>";
  }
}

$strawberry = new StrawberryFour_4_bis("Strawberry", "yellow", 50);

$strawberry->intro();

echo "<br/>----------------------------------<br/>";



/*  PHP - The final Keyword
============================

The "final" keyword can be used to prevent class inheritance 
or to prevent method overriding.


The following example shows how to prevent class inheritance: 
-------------------------------------------------------------*/

/* 

 final class FruitFive
 {  
    # some code
 }


  # extending class will result in error
 
  class Strawberry_5 extends FruitFive
 {  
     # some code
 }

 */

/* The following example shows how to prevent method overriding: 
----------------------------------------------------------------*/

/* 

class Fruit_6
{
  final public function intro()
  {  
    some code
  }
}


# will result in error

class Strawberry_6 extends Fruit_6
{

  public function intro()
  { 
    some code
  }
} 

*/
