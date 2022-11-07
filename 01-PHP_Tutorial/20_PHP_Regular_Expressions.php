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
  <title>PHP Regular Expressions</title>
</head>

<body>

  <?php
  echo "<h1>PHP Regular Expressions</h1>";


  /* What is a Regular Expression?
================================
A regular expression is a sequence of characters that forms 
a search pattern. When you search for data in a text, you can 
use this search pattern to describe what you are searching for.

A regular expression can be a single character, or a more 
complicated pattern.

Regular expressions can be used to perform all types of text 
search and text replace operations.


Syntax
===========
In PHP, regular expressions are strings composed of delimiters, 
a pattern and optional modifiers. */

  $exp = "/w3schools/i";

  /* In the example above, both "/" are the delimiter, "w3schools" is 
the pattern that is being searched for, and "i" is a modifier 
that makes the search case-insensitive.

The delimiter can be any character that is not a letter, number, 
backslash or space. The most common delimiter is the forward 
slash (/), but when your pattern contains forward slashes it is 
convenient to choose other delimiters such as # or ~.


Regular Expression Functions
==============================
PHP provides a variety of functions that allow you to use regular 
expressions. 
The "preg_match()" , "preg_match_all()" and "preg_replace()" 
functions are some of the most commonly used ones:

Function	       Description
----------------------------------
preg_match()	     Returns 1 if the pattern was found in the string 
                   and 0 if not

preg_match_all()   Returns the number of times the pattern was found 
                   in the string, which may also be 0

preg_replace()	   Returns a new string where matched patterns have 
                   been replaced with another string


                   
Using preg_match()
===================== */
  $str = "Visit w3schools.com";
  $pattern = "/w3schools/i";

  echo preg_match($pattern, $str) . "<br/>";
  echo preg_match("/Hello/i", "Hello World of Php. Hello") . "<br/>";

  echo '<br/><br/>';


  /* Using preg_match_all()
========================== */

  $str = "The rain in SPAIN falls mainly on the plains.";
  $pattern = "/ain/i";
  echo preg_match_all($pattern, $str); // Outputs 4

  echo '<br/><br/>';
  /* Using preg_replace()
======================== */

  $str = "Visit Microsoft!";
  $pattern = "/microsoft/i";
  echo preg_replace($pattern, "W3Schools", $str); // Outputs "Visit W3Schools!"

  echo '<br/><br/>';

  /* Regular Expression Modifiers
=================================
Modifiers can change how a search is performed.

Modifier   Description
---------------------------------------------------------------
i	       Performs a case-insensitive search
----------------------------------------------------------------
m	       Performs a multiline search (patterns that search 
           for the beginning or end of a string will match 
           the beginning or end of each line)
----------------------------------------------------------------
u	       Enables correct matching of UTF-8 encoded patterns
----------------------------------------------------------------

Regular Expression Patterns
============================
Brackets are used to find a range of characters:

Expression	Description
----------------------------------------------------------------
[abc]	    Find one character from the options between the brackets
----------------------------------------------------------------
[^abc]	    Find any character NOT between the brackets
----------------------------------------------------------------
[0-9]	    Find one character from the range 0 to 9
----------------------------------------------------------------


Metacharacters
================
Metacharacters are characters with a special meaning:

Metacharacter	Description
----------------------------------------------------------------
|	            Find a match for any one of the patterns 
                separated by | as in: cat|dog|fish
----------------------------------------------------------------
.	            Find just one instance of any character
----------------------------------------------------------------
^	            Finds a match as the beginning of a string as in: ^Hello
----------------------------------------------------------------
$           	Finds a match at the end of the string as in: World$
----------------------------------------------------------------
\d	            Find a digit
----------------------------------------------------------------
\s	            Find a whitespace character
----------------------------------------------------------------
\b	            Find a match at the beginning of a word like this: 
                \bWORD, or at the end of a word like this: WORD\b
----------------------------------------------------------------
\uxxxx	        Find the Unicode character specified by the hexa-
                decimal number xxxx
----------------------------------------------------------------


Quantifiers
================
Quantifiers define quantities:

Quantifier	Description
----------------------------------------------------------------
n+	Matches any string that contains at least one n
---------------------------------------------------------------
n*	Matches any string that contains zero or more occurrences of n
---------------------------------------------------------------
n?	Matches any string that contains zero or one occurrences of n
---------------------------------------------------------------
n{x}	Matches any string that contains a sequence of X n's
---------------------------------------------------------------
n{x,y}	Matches any string that contains a sequence of X to Y n's
---------------------------------------------------------------
n{x,}	Matches any string that contains a sequence of at least X n's
---------------------------------------------------------------

Note: If your expression needs to search for one of the special 
      characters you can use a backslash ( \ ) to escape them. 
      For example, to search for one or more question marks you 
      can use the following expression: $pattern = '/\?+/';


Grouping
==============
You can use parentheses ( ) to apply quantifiers to entire patterns. 
They also can be used to select parts of the pattern to be used as a match.

Example: Use grouping to search for the word "banana" 
         by looking for 'ba' followed by two instances of 'na': */


  $str = "Apples and bananas and banada fro banado. Bananana ? No bananas";
  $pattern = "/ba(na){2}/i";
  echo "result = " . preg_match($pattern, $str); // Outputs 1

  ?>
</body>

</html>