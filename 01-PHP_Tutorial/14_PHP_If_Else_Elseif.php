<!--------------------------------------------
Daniel OUATTARA- daniel.ouattara_AT_gmx.com
PHP Tutorial: https://www.w3schools.com/php/
26 12 2020
--------------------------------------------->

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP if...else...elsif</title>
</head>

<body>

  <h1>PHP if...else...elsif</h1>

  <!-- Conditional statements are used to perform different
actions based on different conditions.

PHP Conditional Statements
===========================

Very often when you write code, you want to perform 
different actions for different conditions. 
You can use conditional statements in your code to do this.

In PHP we have the following conditional statements:

> if                 : executes some code if one condition is true

> if...else          : executes some code if a condition is true and another code 
                       if the first condition is false

> if...elseif...else : executes different codes for more than two conditions

> switch             : selects one of many blocks of code to be executed


PHP - The if Statement
=======================
The "if" statement executes some code if one condition is true.

Syntax
------
if (condition) {
  code to be executed if condition is true;
}                                                                                         -->

  <?php

  $time = date('H');
  echo $time . "</br>";

  echo date('H') . "</br>";

  if ($time < 7) {
    echo "It's early morning" . "</br>";
  }

  # phpinfo() . "</br>"; 

  echo $_SERVER['HTTP_USER_AGENT'] . "</br>";
  echo "--------------------------------------<br />";
  ?>

  <!-- PHP - The if...else Statement
===================================
The if...else statement executes some code if a condition 
is true but another code if that condition is false.

Syntax
------

if (condition) {
  code to be executed if condition is true;
} else {
  code to be executed if condition is false;
}  -->

  <?php


  echo strpos($_SERVER['HTTP_USER_AGENT'], 'Linux');
  echo "<br />";

  if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
    echo 'You are using Internet Explorer.<br />';
  } else {
    echo "You are NOT using Internet Explorer ! </br>";
  }
  // ------------------------------------------------------

  if (date('H') > 22) {
    echo " Time to sleep ! </br> ";
  } else {
    echo "Think to rest a bit </br>";
  }
  ?>

  <!-- PHP - The if...elseif...else Statement
===========================================
The if...elseif...else statement executes different codes for more than two conditions.

Syntax
-------

if (condition) {
  code to be executed if this condition is true;
} elseif (condition) {
  code to be executed if first condition is false and this condition is true;
} else {
  code to be executed if all conditions are false;
}  -->

  <?php
  if (date('H') < 12) {
    echo "Good Morning ! </br>";
  } elseif (12 <= date('H') && date('H') <= 16) {
    echo "Good Afternoon ! </br>";
  } else {
    echo "Good Evening </br>";
  }
  ?>
</body>

</html>