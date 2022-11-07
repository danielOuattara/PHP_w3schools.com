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
  <title>PHP Syntax</title>
</head>

<body>

  <h1>PHP Syntax</h1>

  <pre>

A PHP script is executed on the server, and the plain HTML result is sent back
to the browser.


Basic PHP Syntax
=================

A PHP script can be placed anywhere in the document.

A PHP script starts with '&lt;?php' and ends with '?&gt;':
---------------------
&lt;?php
// PHP code goes here
?&gt;
---------------------

The default file extension for PHP files is ".php".

NOTE: A PHP file normally contains HTML tags, and some PHP scripting code.

Below, we have an example of a simple PHP script that uses
a built-in PHP function "echo" to output the text "Hello World!" on a web page:
    </pre>

  <p> This an HTML paragraph</p>

  <?php
  echo " echo from PHP: Hello World !";
  ?>
  <pre>

Note: PHP statements end necesseraly with a semicolon (;).
-----


PHP Case Sensitivity
=====================

In PHP keywords (if, else, while, echo, etc.), classes, functions,
and user-defined functions are CASE-INSENSITIVE.

In the example below, all three echo statements below are equal and legal:

    </pre>

  <?php
  echo "Hello World ! <br/> ";
  echo "Hello World Again ! <br/> ";
  echo " Hello World One More Time ! <br/> ";
  ?>

  <pre>

Note: However all variable names are CASE-SENSITIVE !
-----
In the example below; only the first statement will display the value of
the '$color' variable! This is because '$color', '$COLOR', and '$coLOR'
are treated as three different variables:
    </pre>
  <?php
  $COLOR = "";
  $colOR = "";
  $color = "red";
  echo "My car is " . $color . "<br/>";
  echo "My House is " . $COLOR . "<br/>";
  echo "My dog is " . $colOR . "<br/>";
  echo "End Of Chapter !";
  ?>

</body>

</html>