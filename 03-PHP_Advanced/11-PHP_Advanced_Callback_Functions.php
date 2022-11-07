<!------------------------------------------
Daniel OUATTARA- daniel.ouattara_AT_gmx.com
30 08 2022
PHP Tutorial: https://www.w3schools.com/php/
--------------------------------------------->

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Callback Functions</title>
</head>

<body>
  <h1>PHP Callback Functions</h1>


  <!-- Callback Functions
==========================

A callback function, often referred to just "callback" 
is a function which is passed as an argument into another 
function.

Any existing function can be used as a callback function. 

To use a function as a callback, pass a string 
containing the name of the function as the argument in the  
other function:

Example: Pass a callback to PHP's array_map() function to 
         calculate the length of every string in an array:
------>

  <?php
  function my_callback($item)
  {
    return strlen($item);
  }

  $strings = ["apple", "orange", "banana", "coconut"];
  $lengths = array_map("my_callback", $strings);
  var_dump($lengths);
  echo "<br/>--------------------------<br />";
  ?>

  <!-- Starting with version 7, PHP can pass anonymous 
  functions as callback functions:

  Example: Use an anonymous function as a callback for 
           PHP's array_map() function:
  ------->

  <?php

  $strings = ["apple", "orange", "banana", "coconut"];
  $lengths = array_map(function ($item) {
    return strlen($item);
  }, $strings);
  print_r($lengths);
  echo "<br/>--------------------------<br />";
  ?>


  <!-- Callbacks in User Defined Functions
===========================================
  
User-defined functions and methods can also take 
callback functions as arguments. To use callback 
functions inside a user-defined function or method, 
call it by adding parentheses to the variable and 
pass arguments as with normal functions:

Example: Run a callback from a user-defined function:
---->

  <?php
  function exclaim($str)
  {
    return $str . "! ";
  }

  function ask($str)
  {
    return $str . "? ";
  }

  function printFormatted($str, $format)
  {
    // Calling the $format callback function
    echo $format($str);
  }

  // Pass "exclaim" and "ask" as callback functions to printFormatted()
  printFormatted("Hello world", "exclaim");
  printFormatted("Hello world", "ask");
  ?>


</body>

</html>