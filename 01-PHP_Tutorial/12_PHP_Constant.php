<!--------------------------------------------
Daniel OUATTARA- daniel.ouattara_AT_gmx.com
PHP Tutorial: https://www.w3schools.com/php/
03 06 2020
--------------------------------------------->

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Constant</title>
</head>

<body>

  <?php
  echo "<h1>PHP Constant.</h1>";

  /* Constants are like variables except that once they are defined
they cannot be changed or undefined.

PHP Constants
==============
A constant is an identifier (name) for a simple value that cannot be
changed during the script.

A valid constant name starts with a letter or underscore (no $ sign before
the constant name).

Note: Unlike variables, constants are automatically global across the entire
----- script.


Create a PHP Constant
======================
To create a constant: 
1) use the 'define()' function.
2) ue the keyword "const"

syntax:
-------
define(name, value, case-insensitive)

Parameters:
--------------------------------------------------------------------------------
    name: Specifies the name of the constant
--------------------------------------------------------------------------------
    value: Specifies the value of the constant
--------------------------------------------------------------------------------
    case-insensitive: Specifies whether the constant name should be
                      case-insensitive. Default is false
--------------------------------------------------------------------------------

Create a constant with a case-sensitive name: */

  define("GREETING", "Welcome to W3Schools.com!");
  echo GREETING . "<br/>";
  echo strtoupper(GREETING) . "<br/>";
  echo strtolower(GREETING) . "<br/>";


  define("GAIN", 3.5) . "<br/>";
  echo "GAIN = " . GAIN . "<br/>";


  # Create a constant with a case-insensitive name (deprecated from PHP 7.3):
  define("SALUTATIONS", "Welcome to W3Schools.com!", true);
  echo SALUTATIONS . "<br/>";
  // echo Salutations . "<br/>";

  //------------------------------------------------
  define("CONSTANT", "Hello world.");
  echo CONSTANT . "<br/>"; // outputs "Hello world."
  // echo Constant . "<br/>"; // outputs "Constant" and issues a notice.

  # Create a constant with "const" keyword

  const HOME = "family";
  echo HOME . "<br />";

  /*PHP Constant Arrays
========================
In PHP7, you can create an Array constant using the define() function.*/

  define("CARS", ["Alfa Romeo", "BMW", "Toyota", 3, true]);
  echo CARS . "<br />"; // Array
  echo CARS[0] . "<br />"; // Alfa Romeo

  const CARS_2 = ["Alfa Romeo", "BMW", "Toyota", 3, true];
  echo CARS_2[1] . "<br />"; // Alfa Romeo

  // Works as of PHP 7
  define('ANIMALS', array('dog', 'cat', 'bird'));
  echo ANIMALS . "<br/>"; // Array
  echo ANIMALS[1] . "<br/>"; // outputs "cat"

  /* Constants are Global
==========================
Constants are automatically global and can be used across the entire script.

This example uses a constant inside a function, even if it is defined outside
the function:*/

  define("BONJOUR", "Bonjour, Welcome to W3Schools.com!");
  const SALUT = "Goog morning";
  $hello = "Hello!";

  function myTest()
  {
    global $hello;
    echo BONJOUR . "  " .  $hello . "<br />";
    echo SALUT . "  " .  $hello . "<br />";
  }

  myTest();
  ?>

</body>

</html>