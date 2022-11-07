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
  <title>PHP File Open/Read/Close</title>
</head>

<body>
  <h1>PHP File Open/Read/Close</h1>

  <!-- In this chapter we will teach you how to open, read, 
  and close a file on the server.


  PHP Open File - fopen()
==========================

A better method to open files is with the 'fopen()' function. 
This function gives you more options than 'readfile()' function.

We will use the text file, "webdictionary.txt":

The first parameter of fopen() contains the name of the file to be 
opened and the second parameter specifies in which mode the file 
should be opened. 

The following example also generates a message if the fopen() 
function is unable to open the specified file:

  Example
---------->

  <?php
  $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
  echo fread($myfile, filesize("webdictionary.txt"));
  fclose($myfile);
  echo "<br/><br/>------------------------------ <br/>";
  ?>

  <!-- NOTE: The 'fread()' and the 'fclose()' functions will be explained later.

A file may be opened in one of the following modes:

Modes 	Description
---------------------------------------------------------------------------------------------
r 	    Open a file for read only. File pointer starts at the beginning of the file
---------------------------------------------------------------------------------------------
w 	    Open a file for write only. Erases the contents of the file or creates a new 
        file if it doesn't exist. File pointer starts at the beginning of the file
---------------------------------------------------------------------------------------------
a 	    Open a file for write only. The existing data in file is preserved. File 
        pointer starts at the end of the file. Creates a new file if the file doesn't exist
---------------------------------------------------------------------------------------------
x 	    Creates a new file for write only. Returns FALSE and an error if file already exists
---------------------------------------------------------------------------------------------
r+ 	    Open a file for read/write. File pointer starts at the beginning of the file
---------------------------------------------------------------------------------------------
w+ 	    Open a file for read/write. Erases the contents of the file or creates a new file if 
        it doesn't exist. File pointer starts at the beginning of the file
---------------------------------------------------------------------------------------------
a+ 	    Open a file for read/write. The existing data in file is preserved. File pointer 
        starts at the end of the file. Creates a new file if the file doesn't exist
---------------------------------------------------------------------------------------------
x+ 	    Creates a new file for read/write. Returns FALSE and an error if file already exists
---------------------------------------------------------------------------------------------



PHP  Read File - fread()
==========================

The 'fread()' function reads from an open file.

The first parameter of fread() contains the name of 
the file to read from and the second parameter specifies 
the maximum number of bytes to read.

The following PHP code reads the "webdictionary.txt" file until the end:

----------------------------------------------- 
fread($myfile,filesize("webdictionary.txt"));
-----------------------------------------------

PHP Close File - fclose()
=============================

The 'fclose()' function is used to close an open file.

It's a good programming practice to close all files 
after you have finished with them. You don't want an 
open file running around on your server taking up resources!

The 'fclose()' requires the name of the file or a variable 
that holds the filename we want to close:

-----------------------------------------------
$myfile = fopen("webdictionary.txt", "r");
// some code to be executed....
fclose($myfile);
-----------------------------------------------


PHP Read Single Line - fgets()
================================

The 'fgets()' function is used to read a single line from a file.

The example below outputs the first line of the "webdictionary.txt" file:

Example
------->

  <?php
  $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
  echo fgets($myfile);
  fclose($myfile);
  echo "</br /><br/>------------------------------ </br />";
  ?>

  <!-- Note: After a call to the fgets() function, the file pointer 
  has moved to the next line. -->

  <?php
  $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
  echo fgets($myfile) . "</br />";
  echo fgets($myfile);
  fclose($myfile);
  echo "</br /><br/>------------------------------ </br />";
  ?>


  <!--PHP Check End-Of-File - feof()
  ==================================

The 'feof()' function checks if the "end-of-file" (EOF) 
has been reached.

The 'feof()' function is useful for looping through data 
of unknown length.

The example below reads the "webdictionary.txt" file line 
by line, until end-of-file is reached:

Example -->

  <?php
  $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
  // Output one line until end-of-file
  while (!feof($myfile)) {
    echo fgets($myfile) . "<br>";
  }
  fclose($myfile);
  echo "</br /><br/>------------------------------ </br />";
  ?>

  <!-- PHP Read Single Character - fgetc()
============================================

The 'fgetc()' function is used to read a single character from a file.

The example below reads the "webdictionary.txt" file character by character, 
until end-of-file is reached: -->

  <?php
  $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
  // Output one character until end-of-file
  while (!feof($myfile)) {
    echo fgetc($myfile);
  }
  fclose($myfile);
  echo "</br /><br/>------------------------------ </br />";
  ?>

  <!-- Note: After a call to the fgetc() function, the file pointer 
  moves to the next character.

Complete PHP Filesystem Reference
==================================
For a complete reference of filesystem functions, go to our complete 
PHP Filesystem Reference. 

-->
</body>

</html>