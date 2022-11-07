<!------------------------------------------
Daniel OUATTARA- daniel.ouattara_AT_gmx.com
03 06 2020
PHP Tutorial: https://www.w3schools.com/php/
--------------------------------------------->

<!--------------------------------------------
Daniel OUATTARA- daniel.ouattara_AT_gmx.com
PHP Tutorial: https://www.w3schools.com/php/
17 05 2020
--------------------------------------------->

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Strings</title>
</head>

<body>

  <h1>PHP Strings</h1>

  <pre>

A string is a sequence of characters, like "Hello world!".

PHP String Functions
=====================

In this chapter we will look at some commonly used functions to manipulate
strings.


strlen() : Return the Length of a String. Count numbers of all characters,
---------  including space.
        </pre>

  <?php
  echo "strlen(Hello World !) = " . strlen("Hello World !") . "<br/>"; // 13

  $greeting = "Bonjour à vous PHP";
  echo "greeting = " . $greeting . "<br/>";
  echo "strlen(greeting) = ", strlen($greeting), "<br/><br/>"; // 7
  ?>

  <pre>

str_word_count() : Count Words in a String.
------------------
        </pre>

  <?php
  echo str_word_count('Hello Word Again !?') . "</br>";  //
  echo str_word_count($greeting), "<br/>"
  ?>

  <pre>
strrev() : Reverse a String.
---------
        </pre>

  <?php
  echo strrev("Hello World Again") . "</br>";
  echo strrev("ANNA") . "</br>";
  echo strrev("AWA");
  ?>

  <pre>

strpos() : Search For a Text Within a String.
---------  'strpos()' function searches for a specific text within a
           string. If a match is found, the function returns the character
           position of the first match. If no match is found, it will return
           FALSE.
        </pre>

  <?php
  echo strpos("Hello World Again !", "World");   // 6
  echo strpos("Hello World Again !", "Africa");  // FALSE
  ?>

  <pre>

CAUTION: The first character position in a string is 0 (not 1).
-------


str_replace() : Replace Text Within a String
--------------- The PHP 'str_replace()' function replaces some characters with
                some other characters in a string.
        </pre>
  <?php
  echo str_replace("World", "Honey", "Hello World Again !");
  // replace "World" by "Honey" in "Hello World Again"
  // output: Hello Honey Again !
  ?>

  <pre>

PHP String Functions
=====================

The PHP string functions are part of the PHP core. No installation is required
to use these functions.

Function 	                    Description
---------                     --------------
--------------------------------------------------------------------------------
addcslashes() 	              Returns a string with backslashes in front of the
                              specified characters
--------------------------------------------------------------------------------
addslashes()  	              Returns a string with backslashes in front of
                              predefined characters
--------------------------------------------------------------------------------
bin2hex() 	                  Converts a string of ASCII characters to
                              hexadecimal values
--------------------------------------------------------------------------------
chop() 	                      Removes whitespace or other characters from the
                              right end of a string
--------------------------------------------------------------------------------
chr() 	                      Returns a character from a specified ASCII value
--------------------------------------------------------------------------------
chunk_split() 	              Splits a string into a series of smaller parts
--------------------------------------------------------------------------------
convert_cyr_string() 	        Converts a string from one Cyrillic character-set
                              to another
--------------------------------------------------------------------------------
convert_uudecode() 	          Decodes a uuencoded string
--------------------------------------------------------------------------------
convert_uuencode() 	          Encodes a string using the uuencode algorithm
--------------------------------------------------------------------------------
count_chars() 	              Returns information about characters used in a
                              string
--------------------------------------------------------------------------------
crc32() 	                    Calculates a 32-bit CRC for a string
--------------------------------------------------------------------------------
crypt() 	                    One-way string hashing
--------------------------------------------------------------------------------
echo() 	                      Outputs one or more strings
--------------------------------------------------------------------------------
explode() 	                  Breaks a string into an array
--------------------------------------------------------------------------------
fprintf() 	                  Writes a formatted string to a specified output
                              stream
--------------------------------------------------------------------------------
get_html_translation_table() 	Returns the translation table used by
                              htmlspecialchars() and htmlentities()
--------------------------------------------------------------------------------
hebrev() 	                    Converts Hebrew text to visual text
--------------------------------------------------------------------------------
hebrevc() 	                  Converts Hebrew text to visual text and new lines
                              (\n) into &lt;br&gt;
--------------------------------------------------------------------------------
hex2bin() 	                  Converts a string of hexadecimal values to ASCII
                              characters
--------------------------------------------------------------------------------
html_entity_decode() 	        Converts HTML entities to characters
--------------------------------------------------------------------------------
htmlentities() 	              Converts characters to HTML entities
--------------------------------------------------------------------------------
htmlspecialchars_decode() 	  Converts some predefined HTML entities to
                              characters
--------------------------------------------------------------------------------
htmlspecialchars() 	          Converts some predefined characters to HTML
                              entities
--------------------------------------------------------------------------------
implode() 	                  Returns a string from the elements of an array
--------------------------------------------------------------------------------
join() 	                      Alias of implode()
--------------------------------------------------------------------------------
lcfirst() 	                  Converts the first character of a string to
                              lowercase
--------------------------------------------------------------------------------
levenshtein() 	              Returns the Levenshtein distance between two
                              strings
--------------------------------------------------------------------------------
localeconv() 	                Returns locale numeric and monetary formatting
                              information
--------------------------------------------------------------------------------
ltrim() 	                    Removes whitespace or other characters from the
                              left side of a string
--------------------------------------------------------------------------------
md5() 	                      Calculates the MD5 hash of a string
--------------------------------------------------------------------------------
md5_file() 	                  Calculates the MD5 hash of a file
--------------------------------------------------------------------------------
metaphone() 	                Calculates the metaphone key of a string
--------------------------------------------------------------------------------
money_format() 	              Returns a string formatted as a currency string
--------------------------------------------------------------------------------
nl_langinfo() 	              Returns specific local information
--------------------------------------------------------------------------------
nl2br() 	                    Inserts HTML line breaks in front of each newline
                              in a string
--------------------------------------------------------------------------------
number_format() 	            Formats a number with grouped thousands
ord() 	                      Returns the ASCII value of the first character of
                              a string
--------------------------------------------------------------------------------
parse_str() 	                Parses a query string into variables
--------------------------------------------------------------------------------
print() 	                    Outputs one or more strings
--------------------------------------------------------------------------------
printf() 	                    Outputs a formatted string
--------------------------------------------------------------------------------
quoted_printable_decode() 	  Converts a quoted-printable string to an 8-bit
                              string
--------------------------------------------------------------------------------
quoted_printable_encode() 	  Converts an 8-bit string to a quoted printable
                              string
--------------------------------------------------------------------------------
quotemeta() 	                Quotes meta characters
--------------------------------------------------------------------------------
rtrim() 	                    Removes whitespace or other characters from the
                              right side of a string
--------------------------------------------------------------------------------
setlocale() 	                Sets locale information
--------------------------------------------------------------------------------
sha1() 	                      Calculates the SHA-1 hash of a string
--------------------------------------------------------------------------------
sha1_file() 	                Calculates the SHA-1 hash of a file
--------------------------------------------------------------------------------
similar_text() 	              Calculates the similarity between two strings
--------------------------------------------------------------------------------
soundex() 	                  Calculates the soundex key of a string
--------------------------------------------------------------------------------
sprintf()                 	  Writes a formatted string to a variable
--------------------------------------------------------------------------------
sscanf() 	                    Parses input from a string according to a format
--------------------------------------------------------------------------------
str_getcsv() 	                Parses a CSV string into an array
--------------------------------------------------------------------------------
str_ireplace() 	              Replaces some characters in a string
                              (case-insensitive)
--------------------------------------------------------------------------------
str_pad() 	                  Pads a string to a new length
--------------------------------------------------------------------------------
str_repeat() 	                Repeats a string a specified number of times
--------------------------------------------------------------------------------
str_replace() 	              Replaces some characters in a string
                              (case-sensitive)
--------------------------------------------------------------------------------
str_rot13() 	                Performs the ROT13 encoding on a string
--------------------------------------------------------------------------------
str_shuffle() 	              Randomly shuffles all characters in a string
--------------------------------------------------------------------------------
str_split() 	                Splits a string into an array
--------------------------------------------------------------------------------
str_word_count() 	            Count the number of words in a string
--------------------------------------------------------------------------------
strcasecmp() 	                Compares two strings (case-insensitive)
--------------------------------------------------------------------------------
strchr() 	                    Finds the first occurrence of a string inside
                              another string (alias of strstr())
--------------------------------------------------------------------------------
strcmp() 	                    Compares two strings (case-sensitive)
--------------------------------------------------------------------------------
strcoll() 	                  Compares two strings
                              (locale based string comparison)
--------------------------------------------------------------------------------
strcspn() 	                  Returns the number of characters found in a string
                              before any part of some specified characters are
                              found
--------------------------------------------------------------------------------
strip_tags() 	                Strips HTML and PHP tags from a string
--------------------------------------------------------------------------------
stripcslashes() 	            Unquotes a string quoted with addcslashes()
--------------------------------------------------------------------------------
stripslashes() 	              Unquotes a string quoted with addslashes()
--------------------------------------------------------------------------------
stripos() 	                  Returns the position of the first occurrence of
                              a string inside another string (case-insensitive)
--------------------------------------------------------------------------------
stristr() 	                  Finds the first occurrence of a string inside
                              another string (case-insensitive)
--------------------------------------------------------------------------------
strlen() 	                    Returns the length of a string
--------------------------------------------------------------------------------
strnatcasecmp() 	            Compares two strings using a "natural order"
                              algorithm (case-insensitive)
--------------------------------------------------------------------------------
strnatcmp() 	                Compares two strings using a "natural order"
                              algorithm (case-sensitive)
--------------------------------------------------------------------------------
strncasecmp() 	              String comparison of the first n characters
                              (case-insensitive)
--------------------------------------------------------------------------------
strncmp() 	                  String comparison of the first n characters
                              (case-sensitive)
--------------------------------------------------------------------------------
strpbrk() 	                  Searches a string for any of a set of characters
--------------------------------------------------------------------------------
strpos() 	                    Returns the position of the first occurrence of
                              a string inside another string (case-sensitive)
--------------------------------------------------------------------------------
strrchr() 	                  Finds the last occurrence of a string inside
                              another string
--------------------------------------------------------------------------------
strrev() 	                    Reverses a string
--------------------------------------------------------------------------------
strripos() 	                  Finds the position of the last occurrence of a
                              string inside another string (case-insensitive)
--------------------------------------------------------------------------------
strrpos() 	                  Finds the position of the last occurrence of a
                              string inside another string (case-sensitive)
--------------------------------------------------------------------------------
strspn() 	                    Returns the number of characters found in a string
                              that contains only characters from a specified
                              charlist
--------------------------------------------------------------------------------
strstr() 	                    Finds the first occurrence of a string inside
                              another string (case-sensitive)
--------------------------------------------------------------------------------
strtok() 	                    Splits a string into smaller strings
--------------------------------------------------------------------------------
strtolower() 	                Converts a string to lowercase letters
--------------------------------------------------------------------------------
strtoupper() 	                Converts a string to uppercase letters
--------------------------------------------------------------------------------
strtr() 	                    Translates certain characters in a string
--------------------------------------------------------------------------------
substr() 	                    Returns a part of a string
--------------------------------------------------------------------------------
substr_compare() 	            Compares two strings from a specified start
                              position (binary safe and optionally case-sensitive)
--------------------------------------------------------------------------------
substr_count() 	              Counts the number of times a substring occurs in
                              a string
--------------------------------------------------------------------------------
substr_replace() 	            Replaces a part of a string with another string
--------------------------------------------------------------------------------
trim() 	                      Removes whitespace or other characters from both
                              sides of a string
--------------------------------------------------------------------------------
ucfirst() 	                  Converts the first character of a string to
                              uppercase
--------------------------------------------------------------------------------
ucwords() 	                  Converts the first character of each word in a
                              string to uppercase
--------------------------------------------------------------------------------
vfprintf() 	                  Writes a formatted string to a specified output
                              stream
--------------------------------------------------------------------------------
vprintf() 	                  Outputs a formatted string
--------------------------------------------------------------------------------
vsprintf() 	                  Writes a formatted string to a variable
--------------------------------------------------------------------------------
wordwrap() 	                  Wraps a string to a given number of characters
--------------------------------------------------------------------------------

        </pre>
</body>

</html>