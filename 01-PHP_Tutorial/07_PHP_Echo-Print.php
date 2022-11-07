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
  <title>PHP Echo - Print</title>
</head>

<body>

  <h1>PHP Echo - Print</h1>

  <pre>
With PHP, there are two basic ways to get output: 'echo' and 'print'.

In this tutorial we use 'echo' or 'print' in almost every example. So, this
chapter contains a little more info about those two output statements.

 'echo' and 'print' Statements
================================

'echo' and 'print' are more or less the same. They are both used to output
data to the screen.

Notice: Both 'echo' and 'print' statements can contain HTML markup:
-------

The differences are small:

  > 'echo' has no return value
  > 'print' has a return value of 1 so it can be used in expressions.

  > 'echo' can take multiple parameters (although such usage is rare)
  > 'print' can take one argument.

  > 'echo' is marginally faster than print.


'echo' Statement
=================

The 'echo' statement can be used with/without parentheses: 'echo' or 'echo()'.

Display Text
-------------
The following example shows how to output text with the 'echo' command
        </pre>
  <?php
  echo "Using \"echo\" ";
  echo "<h2> PHP is fun !</h2>";
  echo "Hello World ! <br/>";
  echo "I'm learning PHP <br/>";
  echo "This ", "string ", "was ", "made ", "with mutliple ", "parameters. ";
  ?>
  <pre>

Display Variables
-----------------
The following example shows how to output text and variables with the
'echo' statement:
        </pre>
  <?php
  $text1 = "Learn PHP";
  $text2 = "W3schools.com";
  $x = 5;
  $y = 4;

  echo "<h2>" . $text1 . "</h2>";
  echo "<h2> $text2 </h2>";
  echo "Study PHP with " . $text2 . "<br/>";
  echo "x + y = ", $x + $y, " <br />";
  echo "Learning PHP first with .$text2 <br />";
  echo "$text2";
  ?>
  <pre>

 'print' Statement
=======================

The print statement can be used with/without parentheses: 'print' or 'print()'.

Display Text
------------
The following example shows how to output text with the 'print' command

Notice: the text can contain HTML markup:
        </pre>

  <?php
  print "Using \"print\" ";
  print "<h2> PHP is fun !</h2>";
  print "Hello World ! <br/>";
  print "I'm learning PHP <br/>";
  print "I'm learning $text1 <br/>";
  ?>
  <pre>

Display Variables
------------------
The following example shows how to output text and variables with the print
statement:
        </pre>
  <?php
  $txt1 = "Learn PHP";
  $txt2 = "W3Schools.com";
  $x = 5;
  $y = 4;

  $dollars = 34000;
  print($dollars);
  print("<br />");
  print $dollars . "</br>";
  print "<h2>" . $txt1 . "</h2>";
  print "Study PHP at " . $txt2 . "<br>";
  print $x + $y;
  // print "x + y = ", $x + $y;  # error : "print" can't take more than 1 argument
  ?>

</body>

</html>