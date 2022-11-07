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
  <title>PHP Math</title>
</head>

<body>

  <h1>PHP Math.</h1>

  <pre>

PHP has a set of math functions that allows you to perform mathematical
tasks on numbers.


PHP pi() Function
==================

The 'pi()' function returns the value of PI:

        </pre>

  <?php
  echo "Pi = " . pi(); // returns 3.1415926535898
  ?>

  <pre>

PHP min() and max() Functions
================================

The 'min()' and 'max()' functions can be used to find the lowest or highest
value in a list of arguments:

        </pre>

  <?php
  echo min(0, 150, 30, 20, -8, -200) . "</br>";  // returns -200
  echo max(0, 150, 30, 20, -8, -200) . "</br>";  // returns 150
  ?>

  <pre>

PHP abs() Function
===================

The 'abs()' function returns the absolute (positive) value of a number:

        </pre>

  <?php
  echo abs(-6.7);  // returns 6.7
  ?>

  <pre>

PHP sqrt() Function
====================

The 'sqrt()' function returns the square root of a number:

        </pre>

  <?php
  echo sqrt(64);  // returns 8
  ?>

  <pre>

PHP round() Function
=====================

The 'round()' function rounds a floating-point number to its nearest integer:

        </pre>
  <?php
  echo round(0.60) . "</br>";  // returns 1
  echo round(0.50) . "</br>";  // returns 1
  echo round(0.49) . "</br>";  // returns 0
  ?>

  <pre>

Random Numbers
================

The 'rand()' function generates a random number:

        </pre>

  <?php
  echo rand() . "</br>";


  // echo rand(min, max) : min & max inclusive

  echo rand(0, 1) / 100 . "</br>";
  echo rand(1, 10) / 10 . "</br>";
  ?>

  <pre>

To get more control over the random number, you can add the optional 'min' and
'max' parameters to specify the lowest integer and the highest integer to be
returned.
If you want a random integer between 10 and 100 (inclusive): use rand(10, 100):


        </pre>

  <?php
  echo rand(10, 100);
  ?>

  <pre>


PHP Math Functions
=======================

Function 	         Description
--------------------------------------------------------------------------------
abs() 	         Returns the absolute (positive) value of a number
--------------------------------------------------------------------------------
acos() 	         Returns the arc cosine of a number
--------------------------------------------------------------------------------
acosh() 	       Returns the inverse hyperbolic cosine of a number
--------------------------------------------------------------------------------
asin() 	         Returns the arc sine of a number
--------------------------------------------------------------------------------
asinh() 	       Returns the inverse hyperbolic sine of a number
--------------------------------------------------------------------------------
atan() 	         Returns the arc tangent of a number in radians
--------------------------------------------------------------------------------
atan2() 	       Returns the arc tangent of two variables x and y
--------------------------------------------------------------------------------
atanh() 	       Returns the inverse hyperbolic tangent of a number
--------------------------------------------------------------------------------
base_convert() 	 Converts a number from one number base to another
--------------------------------------------------------------------------------
bindec() 	       Converts a binary number to a decimal number
--------------------------------------------------------------------------------
ceil() 	         Rounds a number up to the nearest integer
--------------------------------------------------------------------------------
cos() 	         Returns the cosine of a number
--------------------------------------------------------------------------------
cosh() 	         Returns the hyperbolic cosine of a number
--------------------------------------------------------------------------------
decbin() 	       Converts a decimal number to a binary number
--------------------------------------------------------------------------------
dechex() 	       Converts a decimal number to a hexadecimal number
--------------------------------------------------------------------------------
decoct() 	       Converts a decimal number to an octal number
--------------------------------------------------------------------------------
deg2rad() 	     Converts a degree value to a radian value
--------------------------------------------------------------------------------
exp() 	         Calculates the exponent of e
--------------------------------------------------------------------------------
expm1() 	       Returns exp(x) - 1
--------------------------------------------------------------------------------
floor() 	       Rounds a number down to the nearest integer
--------------------------------------------------------------------------------
fmod() 	         Returns the remainder of x/y
--------------------------------------------------------------------------------
getrandmax() 	   Returns the largest possible value returned by rand()
--------------------------------------------------------------------------------
hexdec() 	       Converts a hexadecimal number to a decimal number
--------------------------------------------------------------------------------
hypot() 	       Calculates the hypotenuse of a right-angle triangle
--------------------------------------------------------------------------------
intdiv() 	       Performs integer division
--------------------------------------------------------------------------------
is_finite() 	   Checks whether a value is finite or not
--------------------------------------------------------------------------------
is_infinite() 	 Checks whether a value is infinite or not
--------------------------------------------------------------------------------
is_nan() 	       Checks whether a value is 'not-a-number'
--------------------------------------------------------------------------------
lcg_value() 	   Returns a pseudo random number in a range between 0 and 1
--------------------------------------------------------------------------------
log() 	         Returns the natural logarithm of a number
--------------------------------------------------------------------------------
log10() 	       Returns the base-10 logarithm of a number
--------------------------------------------------------------------------------
log1p() 	       Returns log(1+number)
--------------------------------------------------------------------------------
max() 	         Returns the highest value in an array, or the highest value of
                 several specified values
--------------------------------------------------------------------------------
min() 	         Returns the lowest value in an array, or the lowest value of
                 several specified values
--------------------------------------------------------------------------------
mt_getrandmax()  Returns the largest possible value returned by mt_rand()
--------------------------------------------------------------------------------
mt_rand() 	     Generates a random integer using Mersenne Twister algorithm
--------------------------------------------------------------------------------
mt_srand() 	     Seeds the Mersenne Twister random number generator
--------------------------------------------------------------------------------
octdec() 	       Converts an octal number to a decimal number
--------------------------------------------------------------------------------
pi() 	           Returns the value of PI
--------------------------------------------------------------------------------
pow() 	         Returns x raised to the power of y
--------------------------------------------------------------------------------
rad2deg() 	     Converts a radian value to a degree value
--------------------------------------------------------------------------------
rand() 	         Generates a random integer
--------------------------------------------------------------------------------
round() 	       Rounds a floating-point number
--------------------------------------------------------------------------------
sin() 	         Returns the sine of a number
--------------------------------------------------------------------------------
sinh() 	         Returns the hyperbolic sine of a number
--------------------------------------------------------------------------------
sqrt() 	         Returns the square root of a number
--------------------------------------------------------------------------------
srand() 	       Seeds the random number generator
--------------------------------------------------------------------------------
tan() 	         Returns the tangent of a number
--------------------------------------------------------------------------------
tanh() 	         Returns the hyperbolic tangent of a number
--------------------------------------------------------------------------------



PHP Predefined Math Constants
==============================
Constant              	Value 	               Description
---------               -----                  -------------
--------------------------------------------------------------------------------
INF         	         INF 	                    The infinite
--------------------------------------------------------------------------------
M_E 	                 2.7182818284590452354   	Returns e
--------------------------------------------------------------------------------
M_EULER 	             0.57721566490153286061 	Returns Euler constant
--------------------------------------------------------------------------------
M_LNPI 	               1.14472988584940017414 	Returns the natural logarithm
                                                of PI: log_e(pi)
--------------------------------------------------------------------------------
M_LN2 	               0.69314718055994530942 	Returns the natural logarithm
                                                of 2: log_e 2
--------------------------------------------------------------------------------
M_LN10 	               2.30258509299404568402 	Returns the natural logarithm
                                                of 10: log_e 10
--------------------------------------------------------------------------------
M_LOG2E 	             1.4426950408889634074 	  Returns the base-2 logarithm
                                                of E: log_2 e
--------------------------------------------------------------------------------
M_LOG10E 	             0.43429448190325182765 	Returns the base-10 logarithm
                                                of E: log_10 e
--------------------------------------------------------------------------------
M_PI 	                 3.14159265358979323846 	Returns Pi
--------------------------------------------------------------------------------
M_PI_2 	               1.57079632679489661923 	Returns Pi/2
--------------------------------------------------------------------------------
M_PI_4 	               0.78539816339744830962 	Returns Pi/4
--------------------------------------------------------------------------------
M_1_PI 	               0.31830988618379067154 	Returns 1/Pi
--------------------------------------------------------------------------------
M_2_PI 	               0.63661977236758134308 	Returns 2/Pi
--------------------------------------------------------------------------------
M_SQRTPI 	             1.77245385090551602729 	Returns the square root of PI:
                                                sqrt(pi)
--------------------------------------------------------------------------------
M_2_SQRTPI 	           1.12837916709551257390 	Returns 2/square root of PI:
                                                2/sqrt(pi)
--------------------------------------------------------------------------------
M_SQRT1_2 	           0.70710678118654752440 	Returns the square root of 1/2:
                                                1/sqrt(2)
--------------------------------------------------------------------------------
M_SQRT2 	             1.41421356237309504880 	Returns the square root of 2:
                                                sqrt(2)
--------------------------------------------------------------------------------
M_SQRT3 	             1.73205080756887729352 	Returns the square root of 3:
                                                sqrt(3)
--------------------------------------------------------------------------------
NAN 	                 NAN 	                    Not A Number
--------------------------------------------------------------------------------
PHP_ROUND_HALF_UP 	   1 	                      Round halves up
--------------------------------------------------------------------------------
PHP_ROUND_HALF_DOWN    2 	                      Round halves down
--------------------------------------------------------------------------------
PHP_ROUND_HALF_EVEN 	 3 	                      Round halves to even numbers
--------------------------------------------------------------------------------
PHP_ROUND_HALF_ODD 	   4 	                      Round halves to odd numbers
--------------------------------------------------------------------------------
        </pre>


</body>

</html>