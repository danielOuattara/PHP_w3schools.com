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
  <title>PHP and JSON</title>
</head>

<body>
  <h1>PHP and JSON</h1>

  <!-- What is JSON ?
======================

JSON stands for JavaScript Object Notation, and is a syntax 
for storing and exchanging data.

Since the JSON format is a text-based format, it can easily 
be sent to and from a server, and used as a data format by 
any programming language.



PHP and JSON
===============

PHP has some built-in functions to handle JSON.

First, we will look at the following two functions:

  > json_encode()
  > json_decode()



PHP - json_encode()
=====================

The 'json_encode()' function is used to encode a value to JSON format.


Example: How to encode an associative array into a JSON object:
---------->

  <?php
  $age = array("Peter" => 35, "Ben" => 37, "Joe" => 43); // same below
  $age = ["Peter" => 35, "Ben" => 37, "Joe" => 43];

  echo json_encode($age);

  echo "<br/> ------------------<br />";
  ?>

  <!-- Example: How to encode an indexed into a JSON object:
------------->

  <?php
  $cars = array('Volvo', 'BMW', 'Toyota');
  $cars = ['Volvo', 'BMW', 'Toyota'];

  echo json_encode($cars);

  echo "<br/> ------------------<br />";
  ?>


  <!-- PHP - json_decode()
=========================

The 'json_decode()' function is used to decode a JSON object 
into a PHP object or an associative array.

Example: This example decodes JSON data into a PHP object:
------->
  <?php
  $jsonObject = '{"Peter":35,"Ben":37,"Joe":43}';

  var_dump(json_decode($jsonObject));
  echo '<br/>';
  print_r(json_decode($jsonObject));

  echo "<br/> ------------------<br />";
  ?>

  <!-- 
The 'json_decode()' function returns an object by default. 

The json_decode() function has a second parameter, and when 
set to true, JSON objects are decoded into associative arrays.

Example: This example decodes JSON data into a PHP associative array:
------->

  <?php
  $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

  var_dump(json_decode($jsonobj, true));

  echo "<br/> ------------------<br />";
  ?>



  <!--PHP - Accessing the Decoded Values
=======================================

Here are two examples of how to access the decoded values 
from an object and from an associative array:

Example: This example shows how to access the values from a PHP object:
------->

  <?php
  $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

  $obj = json_decode($jsonobj);

  echo $obj->Peter;
  echo "<br/>";

  echo $obj->Ben;
  echo "<br/>";

  echo $obj->Joe;
  echo "<br/>";

  echo "<br/> ------------------<br />";
  ?>

  <!--Example: This example shows how to access the values from a PHP associative array:
----------->
  <?php
  $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

  $arr = json_decode($jsonobj, true);

  echo $arr["Peter"];
  echo "<br/>";

  echo $arr["Ben"];
  echo "<br/>";

  echo $arr["Joe"];
  echo "<br/>";

  echo "<br/> ------------------<br />";
  ?>



  <!-- PHP - Looping Through the Values
=======================================

You can also loop through the values with a foreach() loop:

Example: This example shows how to loop through the values of a PHP object:
------->

  <?php
  $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

  $obj = json_decode($jsonobj);

  foreach ($obj as $key => $value) {
    echo $key . " => " . $value . "<br>";
  }

  echo "<br/> ------------------<br />";
  ?>

  <!-- Example: This example shows how to loop through the values of a PHP associative array:-->

  <?php
  $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

  $arr = json_decode($jsonobj, true);

  foreach ($arr as $key => $value) {
    echo $key . " => " . $value . "<br>";
  }

  echo "<br/> ------------------<br />";
  ?>



</body>

</html>