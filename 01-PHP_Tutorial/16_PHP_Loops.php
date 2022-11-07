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
  <title>PHP Loops</title>
</head>

<body>

  <h1>PHP Loops</h1>

  <!-- Often when you write code, you want the same block of code to run over 
and over again a certain number of times. So, instead of adding several
almost equal code-lines in a script, we can use "loops".

Loops are used to execute the same block of code again and again, 
as long as a certain condition is true.

In PHP, we have the following loop types:

> while      - loops through a block of code as long as the specified 
               condition is true

> do...while - loops through a block of code once, and then repeats 
               the loop as long as the specified condition is true

> for        - loops through a block of code for specified number of times

> foreach    - loops through a block of code for each element in an array

-->

  <!-- The PHP while Loop
=========================

Syntax:
-------

while (condition is true) {
  code to be executed;
} -->

  <?php

  echo "-------------------------While <br/>";

  $x = 1;
  while ($x < 5) {
    echo "number is $x <br/>";
    $x++;
  }

  echo "------------------ <br/>";


  $x = 1;
  while ($x <= 5) {
    echo "number is $x <br/>";
    $x++;
  }

  echo "------------------ <br/>";

  $x = 0;
  while ($x <= 100) {
    echo "number is : $x <br/>";
    $x += 10;
  }

  echo "------------------ <br/>";

  $x = 0;
  while ($x < 100) {
    echo "number is : $x <br/>";
    $x += 10;
  }

  ?>

  <!-- The PHP do...while Loop
================================

Syntax:
-------
do {
  code to be executed;
} while (condition is true);
-->

  <?php
  echo "--------------------------do while <br/>";

  $x = 1;
  do {
    echo "number is $x <br/>";
    $x++;
  } while ($x < 5);

  echo "-----------------<br/>";

  $x = 1;
  do {
    $x++;
    echo "number is $x <br/>";
  } while ($x < 5);

  echo "-----------------<br/>";

  $x = 1;
  do {
    echo "number i s $x <br/>";
    $x++;
  } while ($x <= 5);

  echo "-----------------<br/>";

  $x = 6;

  do {
    echo "The number is: $x <br>";
    $x++;
  } while ($x <= 5);
  ?>


  <!-- The PHP for Loop
=======================

Syntax
-------

for (init counter; test counter; increment counter) {
  code to be executed for each iteration;
} 
-->

  <?php
  echo "-------------------------- for <br/>";

  for ($x = 0; $x <= 10; $x++) {
    echo " number = $x </br>";
  }

  echo "-------------------- <br/>";

  for ($x = 20; $x > 2; $x -= 3) {
    echo " number = $x </br>";
  }

  echo "-----------------<br/>";

  ?>


  <!-- The PHP foreach
=======================

Syntax
-------

foreach ($array as $value) {
  code to be executed;
}
-->

  <?php

  echo "-------------------------- foreach <br/>";

  $colors = array("red", "blue", "green", "yellow");
  foreach ($colors as $color) {
    echo "$color </br>";
  }

  echo "-----------------<br/>";

  $numbers = array(1, 2, 3, 4, 5, 6, 7);
  foreach ($numbers as $number) {
    $number %= 3;
    echo "$number </br>";
  }

  echo "-----------------<br/>";

  ?>


  <!-- The PHP "break" and "continue"
==================================== -->

  <?php
  echo "-------------------------- break <br/>";

  for ($x = 0; $x <= 10; $x++) {
    if ($x == 4) {
      break;
    }
    echo " number = $x </br>";
  }

  echo "-----------------<br/>";

  for ($x = 0; $x <= 10; $x++) {
    if ($x == 4) {
      continue;
    }
    echo " number = $x </br>";
  }

  echo "-----------------<br/>";

  $x = 0;
  while ($x < 10) {
    if ($x == 4) {
      break;
    }
    echo "number is: $x <br>";
    $x++;
  }


  echo "-----------------<br/>";
  $x = 0;
  while($x < 10) {
    if ($x == 4) {
      $x++;
      continue;
    }
    echo "The number is: $x <br>";
    $x++;
  }


  echo "-----------------<br/>";

  $x = 0;
  while ($x < 10) {
    if ($x == 4) {
      break;
    }
    echo "number is: $x <br>";
    $x++;
  }

  echo "-----------------<br/>";

  // $x = 0;
  // while($x < 10) {
  //   if ($x == 4) {
  //     continue;
  //   }
  //   echo "The number is: $x <br>";
  //   $x++;
  // }

  echo "-----------------<br/>";

  ?>
</body>

</html>