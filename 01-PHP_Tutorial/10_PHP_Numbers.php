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
  <title>PHP Numbers</title>
</head>

<body>

  <h1>PHP Numbers</h1>

  <pre>

In this chapter we will look in depth into Integers, Floats, and Number
Strings.

PHP Numbers
============

One thing to notice about PHP is that it provides 'automatic data type
conversion'.
So, if you assign an integer value to a variable, the type of that variable
will automatically be an integer. Then, if you assign a string to the same
variable, the type will change to a string.

CAUTION: This automatic conversion can sometimes break your code.

PHP Integers
=============

An 'integer' is a number without any decimal part.
2, 256, -256, 10358, -179567 are all 'integers'.
While 7.56, 10.0, 150.67 are 'floats'.

So, an 'integer' data type is a non-decimal number between -2147483648 and
2147483647. A value greater (or lower) than this, will be stored as 'float',
because it exceeds the limit of an integer.

Another important thing to know is that even if 4 * 2.5 is 10, the result is
stored as 'float', because one of the operands is a float (2.5).

Here are some rules for integers:

  > An integer must have at least one digit
  > An integer must not have a decimal point
  > An integer can be either positive or negative
  > Integers can be specified in three formats:
        - decimal : 10-based,
        - hexadecimal : 16-based - prefixed with '0x'
        - octal : 8-based - prefixed with '0'

PHP has the following functions to check if the type of a variable is integer:

  > 'is_int()'
  > 'is_integer()' - alias of is_int()
  > 'is_long()'    - alias of is_int()

Example
---------
Check if the type of a variable is integer:

        </pre>
  <?php
  $x = 5985;
  echo is_int($x) . "<br/>"; // 1
  echo "<br />";

  var_dump(is_int($x));      // true         
  echo "<br />";

  var_dump(is_integer($x));  // true
  echo "<br />";

  var_dump(is_long($x));     // true
  echo "<br />";

  $x = 59.85;
  echo is_int($x);
  var_dump(is_int($x));  // bool (false)
  echo "<br />";

  ?>

  <pre>

PHP Floats
===========

A 'float' is a number with a decimal point or a number in exponential form.

2.0, 256.4, 10.358, 7.64E+5, 5.56E-5 are all floats.

The 'float data type' can commonly store a value up to 1.7976931348623E+308
(platform dependent), and have 'a maximum precision of 14 digits'.

PHP has the following functions to check if the type of a variable is float:

  > 'is_float()'
  > 'is_double()' - alias of is_float()

Example
-------
Check if the type of a variable is float:

        </pre>

  <?php
  $x = 10.365;
  echo $x;
  echo "<br />";

  echo is_float($x);  // true
  echo "<br />";

  echo is_double($x);  // true
  echo "<br />";

  echo is_float(500);  // false
  echo "<br />";

  var_dump(is_float($x));  // true
  echo "<br />";

  var_dump(is_double($x));  // true
  echo "<br />";

  var_dump(is_float(500));  // false
  echo "<br />";

  ?>

  <pre>

PHP Infinity
=============

A numeric value that is larger than 'PHP_FLOAT_MAX' is considered infinite.

PHP has the following functions to check if a numeric value is finite/ infinite:

  > is_finite()
  > is_infinite()

However, the PHP 'var_dump()' function returns the data type and value:

Example
--------
Check if a numeric value is finite or infinite:

        </pre>

  <?php
  var_dump(1e308);  // float(INF)
  echo "<br />";

  var_dump(1e309);  // float(INF)
  echo "<br />";

  var_dump(-1e308);  // float(INF)
  echo "<br />";

  var_dump(1e309);  // float(INF)
  echo "<br />";

  ?>

  <pre>

PHP NaN
========

NaN stands for Not a Number.
NaN is used for impossible mathematical operations.
PHP has the following functions to check if a value is not a number:

  > is_nan()

However, the PHP var_dump() function returns the data type and value:

Example
--------
Invalid calculation will return a NaN value:

        </pre>

  <?php
  $x = acos(8);
  var_dump($x);  // float (NAN)
  echo "<br />";

  var_dump(is_nan(5.6)); // false
  echo "<br />";


  var_dump(is_nan("0123")); // false
  echo "<br />";


  $test = "hello";
  var_dump($test); // string 'hello' (length=5)
  echo "<br />";

  ?>

  <pre>

PHP Numerical Strings
======================

The PHP 'is_numeric()' function can be used to find whether a variable is
numeric. The function returns 'true' if the variable is a number or a numeric 
string, 'false' otherwise.

Example
--------
Check if the variable is numeric:

        </pre>

  <?php
  $x = 5985;
  var_dump(is_numeric($x));  // true)
  echo "<br />";

  $x = "5985";
  var_dump(is_numeric($x));  // true)
  echo "<br />";

  $x = "59.85" + 100;
  var_dump(is_numeric($x));  // true)  
  echo "<br />";

  var_dump($x);  // float  159.85
  echo "<br />";

  $x = "Hello";
  var_dump(is_numeric($x));  // false
  echo "<br />";
  ?>

  <pre>

Note:   From PHP 7.0: The "is_numeric()" function will return FALSE for numeric
-----   strings in hexadecimal form (e.g. 0xf4c3b00c), as they are no longer
        considered as numeric strings.


PHP Casting Strings and Floats to Integers
===========================================

Sometimes you need to cast a numerical value into another data type.

The '(int)', '(integer)', or 'intval()' function are often used 
to convert a value to an integer.

Example
----------
Cast float and string to integer:

        </pre>
  <?php
  // Cast float to int
  $x = 23465.768;
  echo (int)$x . "</br>";

  // Cast string to int
  $text = "23465.768";
  echo (int)$x . "</br>";
  echo (int)$text . "</br>";
  var_dump((int)$x);
  echo intval($text);
  ?>

</body>

</html>