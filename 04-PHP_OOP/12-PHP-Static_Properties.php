<?php

/* PHP - Static Properties
============================

Static properties can be called directly - without 
creating an instance of a class.

Static properties are declared with the 'static' keyword: */


class ClassName
{
  public static $staticProp = "W3Schools";
}

/* To access a static property use the class name + double 
 colon (::) + and the property name: */

echo ClassName::$staticProp;

echo "<br>-------------------------------<br>";



/* Let's look at an example: */

class Pi
{
  public static $value = 3.14159;
}


echo Pi::$value;  // Get static property

echo "<br>-------------------------------<br>";


/* Example Explained
---------------------

Here, we declare a static property: $value. Then, we echo 
the value of the static property by using the class name + 
double colon (::), + the property name, without creating a 
class first.



PHP - More on Static Properties
=================================

A class can have both 'static' and 'non-static' properties. 
A 'static' property can be accessed from a method in the same 
class using the 'self' keyword and double colon (::)    */


class Pi2
{
  public static $value = 3.14159;

  public function staticValue()
  {
    return self::$value;
  }
}



$pi = new Pi2();
echo $pi->staticValue();

echo "<br>-------------------------------<br>";


/* 
To call a static property from a child class, 
use the 'parent' keyword inside the child class: */


class pi3
{
  public static $value = 3.14159;
}



class x extends pi3
{
  public function xStatic()
  {
    return parent::$value;
  }
}

// Get value of static property directly via child class
echo x::$value . " <br/><br/>";


// or get value of static property via xStatic() method
$x = new x();
echo $x->xStatic() . " <br/><br/>";
