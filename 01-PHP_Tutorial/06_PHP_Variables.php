<!------------------------------------------
Daniel OUATTARA- daniel.ouattara_AT_gmx.com
Avril-Mai 2020
PHP Tutorial: https://www.w3schools.com/php/
--------------------------------------------->

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Variables</title>
</head>

<body>

  <h1>PHP Variables</h1>

  <!-- Variables are "containers" for storing information.

Creating (Declaring) PHP Variables
===================================

In PHP, a variable starts with the '$' sign, followed by the name of
the variable:                                                    -->

  <?php
  $greating1 = "Hello World !";
  $greating2 = 'Hello World Again!'; // single quotes: OK 
  $salary = 234600;
  $x = 10.5;
  $possibility = true;
  ?>

  <!-- After the execution of the statements above:
> the variable '$text' will hold the value 'Hello world!',
> the variable '$salary ' will hold the value '234600',
> the variable '$x' will hold the value '10.5'.

Note:
=====
  > When you assign a text value to a variable, put quotes around the value.

  >  IMPORTANT: Unlike other programming languages, PHP has no syntax for declaring a
                variable. It is created the moment you first assign a value to it.

  > Think of variables as containers for storing data.


PHP Variables
===============

A variable can have a short name (like 'x' and 'y') or a more descriptive
name ('age', 'carname', 'total_volume').


Rules: In PHP, variable:
------
    > starts with the $ sign, followed by the name of the variable
    > name must start with a letter or the underscore character  (RegEx : /w/)
    > name cannot start with a number
    > name can only contain alpha-numeric characters and underscores (A-z, 0-9,
      and _ ) (RegEx => /\w /)
    > names are case-sensitive ($age and $AGE are two different variables)

Remember: PHP variable names are case-sensitive!
---------


Output Variables
=================

The PHP 'echo' statement is often used to output data to the screen.

The following example will show how to output text and a variable:         -->

  <?php
  echo "$greating1<br/>";
  echo "$greating2<br/>";

  $txt = "W3Schools.com";
  echo "I love $txt!<br/>";

  // The following example will produce the same output as the example above:

  $txt = "W3Schools.com";
  echo "I love " . $txt . "! <br>";


  // The following example will output the sum of two variables:

  $x = 5;
  $y = 4;
  echo " x + y = ", $x + $y;
  // how to handle space between lines in php ?

  echo " x * y = ",  $x * $y;

  ?>


  <!-- Note: You will learn more about the 'echo' statement and how to output
            data to the screen in the next chapter.


PHP is a Loosely Typed Language
=================================

In the example above, notice that we did not have to tell PHP which data type
the variable is.

PHP automatically associates a data type to the variable, depending on its
value. Since the data types are not set in a strict sense, you can do things
like adding a string to an integer without causing an error.

In PHP 7, type declarations were added. This gives an option to specify the data
type expected when declaring a function, and by enabling the strict requirement,
it will throw a "Fatal Error" on a type mismatch.

You will learn more about 'strict' and 'non-strict' requirements, and data type
declarations in the PHP Functions chapter.


PHP Variables Scope
====================

In PHP, variables can be declared anywhere in the script.

The scope of a variable is the part of the script where the variable can be
referenced/used.

PHP has three different variable scopes:

  > local
  > global
  > static


Global and Local Scope
=======================

A variable declared 'outside' a function has a GLOBAL SCOPE and can only be
accessed outside a function:                                                 -->

  <?php

  $var1 = 5; //global scope

  function myTest1()
  {
    // using $var1 inside this function will generate an error
    echo "<p> using Variable \$var1 inside this function will generate an error. </p>";
  }

  myTest1();
  ?>

  <!-- A variable declared within a function has a LOCAL SCOPE and can only be
accessed within that function:                                                -->

  <?php
  function MyTest2()
  {
    $var2 = 7;
    echo "<p> Variable x inside this function is: \$var2 = $var2 </p>";
  }

  MyTest2(); // output

  echo ' var 2 = ... <br/>';
  /* The code above generate an error because $var2 is function local scope only*/

  ?>

  <!--  Note: You can have local variables with the same name in different 
            functions, because local variables are only recognized by 
            the function in which they are declared.


PHP The global Keyword
=======================

The 'global' keyword is used to access a global variable 
from within a function. To do this, use the 'global' keyword 
before the variables (inside the function):    -->

  <?php
  $a = 5;
  echo "a = $a <br/>";

  $b = 10;
  echo "b = $b <br/>";

  function myTest3()
  {
    global $a, $b; // calling outside global variables
    $b += $a;      // manipulating those variables
    echo "2 x b = ", 2 * $b, "<br/>";  // output result --> 30
  }

  myTest3();  // output y = 15

  echo " Now <br/> b = $b <br/>";  // "b" has been modified inside myTest3().
  ?>


<!-- PHP also stores all global variables in an array 
called '$GLOBALS[index]'.
The 'index' holds the name of the variable. This array 
is also accessible from within functions and can be used 
to update global variables directly.

The example above can be rewritten like this:                                        -->

  <?php
  $xx = 50;
  $yy = 100;

  echo " xx =  $xx <br/>";
  echo " yy =  $xx <br/>";


  function myTest4()
  {
    $GLOBALS['yy'] += $GLOBALS['xx'];
    echo "yy = "  . $GLOBALS['yy'] . " <br/>";
  }

  myTest4(); // yy turns to 150
  myTest4(); // yy turns to 200
  myTest4(); // yy turns to 250
  ?>

  <!-- PHP The static Keyword
     =======================

Normally, when a function is completed/executed, all of 
its variables are deleted. However, sometimes we want 
a local variable NOT to be deleted. We need it for 
a further job. To do this, use the 'static' keyword when you
first declare the variable from inside that function: -->

  <?php

  function  myTest5()
  {
    static $age = 36;
    echo "age = $age  <br/>";
  }

  myTest5();
  myTest5();
  myTest5();
  ?>

  <!-- Then, each time the function is called, that variable will 
still have the information it contained from the last time the 
function was called.

Note: The variable is still local to the function.     -->

</body>

</html>