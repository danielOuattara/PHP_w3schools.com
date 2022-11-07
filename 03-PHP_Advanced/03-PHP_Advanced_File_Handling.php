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
  <title>PHP File Handling</title>
</head>

<body>
  <h1>PHP File Handling</h1>

  <!-- File handling is an important part of any web application. 
You often need to open and process a file for different tasks.


PHP Manipulating Files
=======================

PHP has several functions for creating, reading, uploading, 
and editing files.

NOTE: Be careful when manipulating files!
      You can do a lot of damage if you do something wrong. 
      Common errors are: editing the wrong file, filling a 
      hard-drive with garbage data, and deleting the content 
      of a file by accident.



PHP readfile() Function
============================

The 'readfile()' function reads a file and writes it 
to the output buffer.

Assume we have a text file called "webdictionary.txt", stored on 
the server, that looks like this:

---------------------------------------------
AJAX = Asynchronous JavaScript and XML
CSS  = Cascading Style Sheets
HTML = Hyper Text Markup Language
PHP  = PHP Hypertext Preprocessor
SQL  = Structured Query Language
SVG  = Scalable Vector Graphics
XML  = EXtensible Markup Language
-----------------------------------------------

The PHP code to read the file and write it to the output buffer 
is as follows (the readfile() function returns the number of 
bytes read on success):

Example
-------->

  <?php
  echo readfile("webdictionary.txt");
  echo "<br/>--------------<br/>";
  
  
  $text = readfile("webdictionary.txt");
  echo $text;
  echo "<br/>--------------<br/>";
  
  echo var_dump($text);
  echo "<br/>--------------<br/>";
  ?>

  <!-- The readfile() function is useful if all you want to do 
is open up a file and read its contents.

The next chapters will teach you more about file handling.
 -->

</body>

</html>