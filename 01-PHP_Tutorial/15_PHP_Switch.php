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
  <title>PHP switch Statement</title>
</head>

<body>

  <h1>PHP switch Statement</h1>

  <!-- The switch statement is used to perform different actions 
based on different conditions.

The PHP switch Statement
=========================
Use the "switch" statement to select one of many blocks of code
to be executed.

Syntax
-------

switch (n) {
  case label1:
    code to be executed if n = label1;
    break;
  case label2:
    code to be executed if n = label2;
    break;
  case label3:
    code to be executed if  n = label3;
    break;
    ...
  default:
    code to be executed if n is different from all labels;
}

This is how it works: First we have a single expression n (most 
often a variable), that is evaluated once. The value of the 
expression is then compared with the values for each case in the 
structure. If there is a match, the block of code associated with 
that case is executed. Use break to prevent the code from running 
into the next case automatically. The default statement is used if 
no match is found. -->

  <?php

  $favoriteColor = "red";

  switch ($favoriteColor) {
    case "green":
      echo "your favorite color is green </br>";
      break;
    case "yellow":
      echo "your favorite color is yellow </br>";
      break;
    case "orange":
      echo "your favorite color is orange </br>";
      break;
    case "red":
      echo "your favorite color is red </br>";
      break;
    default:
      echo "Your favorite color is not defined here </br>";
  }

  //------------------------------------

  echo "</br>";
  $hour = date('H');
  switch ($hour) {
    case (0 <= $hour && $hour <= 5):
      echo "It's time of sleep </br>";
      break;
    case (5 < $hour && $hour  <= 7):
      echo "It's time for exercice </br>";
      break;
    case (7 < $hour && $hour  <= 13):
      echo "It's time to work hard </br>";
      break;
    case (13 < $hour && $hour  <= 14):
      echo "It's time for rest </br>";
      break;
    case (14 < $hour  && $hour <= 19):
      echo "It's time to work hard again </br>";
      break;
    case (19 < $hour && $hour  <= 21):
      echo "It's time to relax, eat, and get reay to sleep </br>";
      break;

    default:
      echo "You must be asleep !";
  }
  ?>

</body>

</html>