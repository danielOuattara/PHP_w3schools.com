<!--------------------------------------------
Daniel OUATTARA- daniel.ouattara_AT_gmx.com
PHP Tutorial: https://www.w3schools.com/php/
15 05 2021
--------------------------------------------->

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Arrray</title>
</head>

<body>

  <h1>PHP Arrray</h1>

  <!-- PHP Arrays
================
An array stores multiple values in one single variable: -->

  <?php
  $cars = array("Volvo", "BMW", "Toyota");
  echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".<br/>";
  echo "------------------------------ <br/>";
  ?>


  <!-- Create an Array in PHP
============================
In PHP, the "array()" function is used to create an array:

In PHP, there are three types of arrays:
> Indexed arrays          - Arrays with a numeric index
> Associative arrays      - Arrays with named keys
> Multidimensional arrays - Arrays containing one or more arrays 


Get The Length of an Array - The count() & sizeof()Function
============================================================
The "count()" function is used to return the number 
of elements in an array: -->

  <?php
  echo  "cars count = " . count($cars) . "<br/>";

  echo  "cars count = " . sizeof($cars) . "<br/>";
  ?>


  <!-- PHP Indexed Arrays
==========================
There are two ways to create indexed arrays:

The index can be assigned automatically (index always starts at 0), 
like: 

$cars = array("Volvo", "BMW", "Toyota");

OR: the index can be assigned manually:

$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";-->

  <?php
  echo "------------------------------Indexed Arrays <br/>";
  $cars2 = array("Peugeot", "Honda", "Suziki");

  // list item:
  foreach ($cars2 as $car) {
    echo "$car <br />";
  }
  echo "---<br/>";


  $cars3[0] = "BMW";
  $cars3[1] = "Opel";
  $cars3[2] = "Audi";

  // list item: 
  foreach ($cars3 as $car) {
    echo "$car <br />";
  }
  echo "---<br/>";
  ?>


  <!-- Loop Through an Indexed Array
=====================================
To loop through and print all the values of an indexed array, 
you could use a for loop: -->

  <?php

  $fruits = array("orange", "apple", "pinapple");
  $fruitsLength = count($fruits);

  for ($i = 0; $i < $fruitsLength; $i++) {
    echo $fruits[$i];
    echo "<br />";
  }
  echo "---<br/>";

  for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i];
    echo "<br />";
  }

  /* To loop through and print all the values of an indexed array, 
you could use a 'foreach' loop:*/
  echo "---<br/>";
  foreach ($cars3 as $car) {
    echo "$car <br />";
  }
  echo "---<br/>";
  ?>


  <!-- PHP Associative Arrays
============================
Associative arrays are arrays that use "named - keys" that 
you assign to them.

There are two ways to create an associative array: 

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

or:

$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";

The named keys can then be used in a script:  -->

  <?php
  echo "------------------------------Indexed Arrays <br/>";

  $personAge = array("Peter" => "35", "John" => "15", "Anne" => "31");
  echo "Peter is " . $personAge['Peter'] . "y.o <br />";
  ?>


  <!-- Loop Through an Associative Array
=======================================
To loop through and print all the values of an associative 
array, you could use a foreach loop, like this: -->

  <?php
  foreach ($personAge as $key => $value) {
    echo "Key = " . $key . ", Value = " . $value . "<br />";
  }
  ?>

  <!-- PHP Multidimensional Arrays
==================================
In the previous, we have described arrays that are a single
list of key/value pairs.

However, sometimes you want to store values with more than 
one key. For this, we have multidimensional arrays.

A multidimensional array is an array containing one or more 
arrays.

PHP supports multidimensional arrays that are two, three, 
four, five, or more levels deep. However, arrays more than 
three levels deep are hard to manage for most people.

The dimension of an array indicates the number of indices 
you need to select an element.

For a two-dimensional array you need two indices to select 
an element

For a three-dimensional array you need three indices to select 
an element

PHP - Two-dimensional Arrays
------------------------------
A two-dimensional array is an array of arrays 
A three-dimensional array is an array of arrays of arrays.

First, take a look at the following table:
--------------------------
Name	     Stock	 Sold
--------------------------
Volvo	      22	    18
BMW	        15	    13
Saab	       5	     2
Land Rover	17	    15
--------------------------

We can store the data from the table above in a two-dimensional 
array, like this: -->

  <?php
  echo "------------------------------Multi-dimensionnal Arrays <br/>";
  $superCars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
  );


  /* Now the two-dimensional "$cars" array contains four arrays, 
and it has two indices: row and column.

To get access to the elements of the $cars array we must point to 
the two indices (row and column):*/

  echo $superCars[0][0] . ": In stock: " . $superCars[0][1] . ", sold: " . $superCars[0][2] . ".<br>";
  echo $superCars[1][0] . ": In stock: " . $superCars[1][1] . ", sold: " . $superCars[1][2] . ".<br>";
  echo $superCars[2][0] . ": In stock: " . $superCars[2][1] . ", sold: " . $superCars[2][2] . ".<br>";
  echo $superCars[3][0] . ": In stock: " . $superCars[3][1] . ", sold: " . $superCars[3][2] . ".<br>";
  echo "----<br/>";

  /* We can also put a for loop inside another for loop to get 
the elements of the $cars array (we still have to point to 
the two indices): */

  for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row </b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>" . $superCars[$row][$col] . "</li>";
    }
    echo "</ul>";
  }

  echo "----------------------------------<br/>";


  /* PHP - Sort Functions For Arrays
===================================
sort()   - sort indexed arrays in ascending order
rsort()  - sort indexed arrays in descending order
asort()  - sort associative arrays in ascending order, according to the value
ksort()  - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key */


  $countries = array("Mali", "Burkina-faso", "Guinea", "Uganda", "Algeria", "Angola", "Zambia");
  $primeNumber = array(2, 3, 5, 7, 11, 13);

  $countriesNumber = count($countries);
  $primeQuantity = count($primeNumber);

  /* Sort Array in Ascending Order - sort()
----------------------------------------- */

  sort($countries);
  for ($i = 0; $i < $countriesNumber; $i++) {
    echo $countries[$i];
    echo "<br>";
  }
  echo "----<br>";


  for ($i = 0; $i < $primeQuantity; $i++) {
    echo $primeNumber[$i];
    echo "<br>";
  }
  echo "----<br>";
  /* Sort Array in Descending Order - rsort()
--------------------------------------------- */

  rsort($countries);
  for ($i = 0; $i < $countriesNumber; $i++) {
    echo $countries[$i];
    echo "<br>";
  }
  echo "----<br>";

  rsort($primeNumber);
  for ($i = 0; $i < $primeQuantity; $i++) {
    echo $primeNumber[$i];
    echo "<br>";
  }
  echo "----<br>";


  /* Sort Array (Ascending Value Order), According to Value - asort()
---------------------------------------------------------------- */
  echo "------------------------ asort()<br>";
  $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
  asort($age);
  foreach ($age as $key => $value) {
    echo "Name : " . $key . ",  Age : " . $value . "<br>";
  }

  /* Sort Array (Decending Value Order), According to Value - arsort()
------------------------------------------------------------------- */
  echo "------------------------ arsort()<br>";
  arsort($age);
  foreach ($age as $key => $value) {
    echo "Name : " . $key . ",  Age : " . $value . "<br>";
  }
  echo "----<br>";

  /* Sort Array (Ascending Key Order), According to Value - asort()
---------------------------------------------------------------- */
  echo "------------------------ ksort()<br>";
  ksort($age);
  foreach ($age as $key => $value) {
    echo "Name : " . $key . ",  Age : " . $value . "<br>";
  }
  echo "----<br>";

  /* Sort Array (Decending Key Order), According to Value - arsort()
------------------------------------------------------------------- */
  echo "------------------------ krsort()<br>";
  krsort($age);
  foreach ($age as $key => $value) {
    echo "Name : " . $key . ",  Age : " . $value . "<br>";
  }
  echo "----<br>";

  ?>
</body>

</html>