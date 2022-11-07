
<?php

/* PHP - Static Methods
=========================

Static methods can be called directly without creating 
an instance of the class.

Static methods are declared with the "static" keyword:

Syntax 
------- */

class ClassName
{
  public static function staticMethod()
  {
    echo "Hello World! <br/><br/>";
  }
}

/* To access a static method use the class name + 
scope resolution operator (::) + the method name: 

eg: ClassName::staticMethod(); */



class Greeting
{
  public static function welcome()
  {
    echo "Hello World! <br/>";
  }
}


Greeting::welcome();  // Hello world!

echo "<br>-------------------------------<br>";


/* Example Explained
---------------------

Here, we declare a 'static method': 'welcome()'. Then, we call 
the static method by using the class name, double colon (::), 
and the method name, without creating an instance of the class 
first.


PHP - More on Static Methods
=============================

A class can have both static and non-static methods. 

A static method can be accessed from a another method in the 
same class using the "self" keyword and double colon (::): */


class Greeting2
{
  public function __construct()
  {
    self::welcome2();
  }

  public static function welcome2()
  {
    echo "Static method called <br/>";
  }

  public function goodbye()
  {
    self::welcome2();
  }
}

$greeting2 = new Greeting2();
$greeting2->goodbye();

echo "<br>-------------------------------<br>";


/* 
Static methods can also be called from methods in 
other classes. The static method should be "public":  */


class Greeting3
{
  public static function welcome3()
  {
    echo "Hello World! 3";
  }
}


class SomeOtherClass
{
  public function message()
  {
    Greeting3::welcome3();
  }
}



$someotherclass = new SomeOtherClass();
$someotherclass->message();

echo "<br>-------------------------------<br>";


/*
To call a static method from a 'child class', use the "parent" 
keyword inside the child class. Here, the static method can 
be 'public' or 'protected'. */


class Domain
{
  protected static function getWebsiteName()
  {
    return "https://www.w3Schools.com";
  }
}


class DomainW3 extends Domain
{
  public $websiteName;

  public function __construct()
  {
    $this->websiteName = parent::getWebsiteName();
  }
}


$domainW3 = new DomainW3;
echo $domainW3->websiteName;
