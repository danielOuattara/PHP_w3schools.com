<!--------------------------------------------
Daniel OUATTARA- daniel.ouattara_AT_gmx.com
PHP Tutorial: https://www.w3schools.com/php/
14 05 2021
--------------------------------------------->

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Functions</title>
</head>

<body>

  <?php
  echo "  <h1>PHP Functions</h1>";

  /* PHP Functions
==================
The real power of PHP comes from its functions.
PHP has more than 1000 built-in functions, and 
in addition you can create your own custom functions.


PHP Built-in Functions
=======================
PHP has over 1000 built-in functions that can be called 
directly from within a script to perform a specific task.

Please check out our PHP reference for a complete overview 
of the PHP built-in functions.


PHP User Defined Functions
===========================
Besides the built-in PHP functions, it is possible to create 
your own functions.

> A function is a block of statements that can be used 
  repeatedly in a program.

> A function will not execute automatically when a page
  loads.

> A function will be executed by a call.


Create a User Defined Function in PHP
======================================
A user-defined function declaration starts with the word function:

Syntax
-------

function functionName() {
  code to be executed;
}

Note: A function name must start with a letter or an underscore. 
----  Function names are case-insensitive.

Tip:  Give the function a name that reflects what the function 
----  does!

In the example below, we create a function named "writeMsg()". 
The opening curly brace "{" indicates the beginning of the 
function code, and the closing curly brace "}" indicates 
the end of the function. The function outputs "Hello world!".
To call the function, just write its name followed by brackets (): */

  function writeMsg()
  {
    echo "Hello world! <br/>";
  }

  writeMsg(); // call the function

  echo "----------------------------------------------<br/>";


  /* PHP Function Arguments
============================
Information can be passed to functions through arguments. 
An argument is just like a variable.

Arguments are specified after the function name, inside 
the parentheses. You can add as many arguments as you want, 
just separate them with a comma.

The following example has a function with one argument ($fname). 
When the firstName() function is called, we also pass along 
a name (e.g. Jani), and the name is used inside the function, 
which outputs several different first names, but an equal last name: */

  function firstName($fname)
  {
    echo "Your first first name is  : $fname <br/>";
  }

  firstName("Joe");
  firstName("Hege");
  firstName("Stale");
  firstName("Kai Jim");
  firstName("Borge");

  echo "----------------------------------------------<br/>";

  //---------------------------------------------------
  function person($fname, $lname, $yearOfBirth)
  {
    echo "Your name is $fname $lname. You were born in $yearOfBirth <br/>";
  }

  person("Joe", " Smith", 1976);
  person("Hege", "Ridle", 1930);
  person("Stale", "Soup", 1990);
  person("Kai Jim", "Kardachian", 1977);
  person("Borge", "Speigel", 1900);


  /* PHP is a Loosely Typed Language
=====================================
In the example above, notice that we did not have to tell PHP which 
data type the variable is. PHP automatically associates a data type 
to the variable, depending on its value. Since the data types are 
not set in a strict sense, you can do things like adding a string 
to an integer without causing an error.

In PHP 7, type declarations were added. This gives us an option 
to specify the expected data type when declaring a function, and 
by adding the "strict" in declaration, it will throw a "Fatal Error" 
if the data type mismatches.

In the following example we try to send both a number and a string 
to the function without using strict:                           

"strict" must be placed on top of script document*/

  // declare(strict_types= 1); 

  function addNumber(int $a, int $b)
  {
    return $a + $b;
  }
  echo addNumber(5, "5") . "</br>";

  echo "----------------------------------------------<br/>";


  /* PHP Default Argument Value
================================
The following example shows how to use a default parameter. If we call 
the function "setHeight()" without arguments it takes the default value 
as argument:*/

  function setHeight($minheight = 1)
  {
    return $minheight * 5;
  }

  echo " The surface is " . setHeight() . " <br />";
  echo " The surface is " . setHeight(4) . " <br />";

  echo "----------------------------------------------<br/>";


  /* PHP Functions - Returning values
=======================================
To let a function return a value, use the return statement:*/

  function sum(int $x, int $y)
  {
    return $x + $y;
  }

  echo "5 + 10 = " . sum(5, 10) . "<br>";
  echo "7 + 13 = " . sum(7, 13) . "<br>";
  echo "2 + 4 = "  . sum(2, 4)  . "<br>";

  echo "----------------------------------------------<br/>";

  
  /*-- PHP Return Type Declarations
=================================
PHP 7 also supports Type Declarations for the return statement. 
Like with the type declaration for function arguments, by enabling 
the "strict" requirement, it will throw a "Fatal Error" on a type 
mismatch.

To declare a type for the function return, add a colon ":" and the type 
right before the opening curly "{" bracket when declaring the function.

In the following example we specify the return type for the function:*/

  function addNumberFloat(float $a, float $b): float
  {
    return $a + $b;
  }

  echo addNumberFloat(34.545673444444, 53.4) . "<br/>";

  echo "-----------------------------------------------<br/>";

  /* Passing Arguments by Reference
====================================
In PHP, arguments are usually passed by value, which means 
that a copy of the value is used in the function and the 
variable that was passed into the function cannot be changed.

When a function argument is passed by reference, changes to 
the argument also change the variable that was passed in. 
To turn a function argument into a reference, the '&' operator 
is used: */


  function add_five(&$value)
  {
    return $value += 5;
  }

  $num = 2;
  echo $num . "<br/>";
  echo "------------------ <br/>";

  $ouput = add_five($num);

  echo $ouput . "<br/>";

  echo $num . "<br/>";
  ?>
</body>

</html>