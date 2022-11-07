<?php

/* PHP - What are Abstract Classes and Methods ?
=================================================

Abstract classes and methods are when the parent class 
has a named method, but need its child class(es) to fill 
out the tasks (logic statements).

An abstract class is a class that contains at least one 
abstract method. 

An abstract method is a method that is declared, but not 
implemented in the code.

An abstract class or method is defined with the abstract 
keyword:


Syntax
-------*/

abstract class ParentClass
{
  abstract public function someMethod1();
  abstract public function someMethod2($name, $color);
  abstract public function someMethod3(): string;
  abstract public function someMethod4(string $name, int $age): string;
}


/*
When inheriting from an abstract class, the child class 
method must be defined with the same name, and the same 
or a less restricted access modifier. 

So, if the abstract parent class method is defined as 'protected', 
the child class method must be defined as either 'protected' 
or 'public', but not 'private'. Also, the type and number 
of required arguments must be the same. 

However, the child classes may have optional arguments 
in addition.


Summary:
--------

So, when a child class is inherited from an abstract class, 
we have the following rules:

  > The child class method must be defined with the same 
    name and it redeclares the parent abstract method

  > The child class method must be defined with the same 
    or a less restricted access modifier

  > The number of required arguments must be the same. 
    However, the child class may have optional arguments 
    in addition


Let's look at an example:

Example 
--------*/

// Parent class
abstract class Car
{
  public $name;

  public function __construct($name)
  {
    $this->name = $name;
  }

  abstract public function intro(): string;
  abstract protected function price($val);

  private function bankCode()
  {
    return $this->name . "ZULU77!**";
  }
}


// Child classes
class Audi extends Car
{
  public function intro(): string
  {
    return "Choose German quality! I'm an $this->name!";
  }

  protected function price($amount_euro)
  {
    return $amount_euro * 655.957;
  }
}


// Child classes
class Volvo extends Car
{
  public function intro(): string
  {
    return "Proud to be Swedish! I'm a $this->name!";
  }

  public function price($ruble)
  {
    return $ruble * 56;
  }
}


// Child classes
class Citroen extends Car
{
  public function intro(): string
  {
    return "French extravagance! I'm a $this->name!";
  }

  function price($yen)
  {
    return $yen * 115.34;
  }
}


// Create objects from the child classes
$audi = new Audi("Audi");
echo $audi->intro();
# echo $audi->price(23000); // protected
echo "<br>";

$volvo = new Volvo("Volvo");
echo $volvo->intro();
echo $volvo->price(23000);
echo "<br>";

$citroen = new Citroen("Citroen");
echo $citroen->intro();
echo $citroen->price(23000);
echo "<br>-------------------------------<br>";


/*
Example Explained
------------------

The Audi, Volvo, and Citroen classes are inherited from 
the Car class. This means that the Audi, Volvo, and 
Citroen classes can use the public $name property as 
well as the public __construct() method from the Car 
class because of inheritance.

But, intro() is an abstract method that must be defined 
in all the child classes and they should return a string.


PHP - More Abstract Class Examples
=====================================

Let's look at another example where the abstract method 
has an argument:

Example
-------*/

abstract class ParentClass_2
{
  // Abstract method with an argument
  abstract protected function prefixName($name);
}


// Child class
class ChildClass_2 extends ParentClass_2
{
  public function prefixName($name)
  {
    if ($name == "John Doe") {
      $prefix = "Mr.";
    } elseif ($name == "Jane Doe") {
      $prefix = "Mrs.";
    } else {
      $prefix = "";
    }
    return "{$prefix} {$name}";
  }
}

$person = new ChildClass_2;
echo $person->prefixName("John Doe");
echo "<br>";
echo $person->prefixName("Jane Doe");
echo "<br>-------------------------------<br>";


/*
Let's look at another example where the abstract method 
has an argument, and the child class has two optional 
arguments that are not defined in the parent's abstract 
method:

Example
-------*/

abstract class ParentClass_3
{
  // Abstract method with an argument
  abstract protected function prefixName($name);
}


// Child class
class ChildClass_3 extends ParentClass_3
{
  /*The child class may define optional arguments 
   that are not in the parent's abstract method */

  public function prefixName($name, $separator = ".", $greet = "Dear")
  {
    if ($name == "John Doe") {
      $prefix = "Mr";
    } elseif ($name == "Jane Doe") {
      $prefix = "Mrs";
    } else {
      $prefix = "User";
      $separator = "";
    }
    return "{$greet} {$prefix}{$separator} {$name}";
  }
}

$person = new ChildClass_3;
echo $person->prefixName("John Doe");
echo "<br>";
echo $person->prefixName("Jane Doe");
echo "<br>";
echo $person->prefixName("Tom Hanks");
