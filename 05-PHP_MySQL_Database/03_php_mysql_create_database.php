<?php

/* PHP Create a MySQL Database
===============================

A relational database consists of one or more tables.

You will need special CREATE privileges to create 
or to delete a MySQL database.


Create a MySQL Database Using MySQLi and PDO
=============================================

The CREATE DATABASE statement is used to create a database 
in MySQL. The following examples create a database named "myDB":


Example (MySQLi OOP)
--------------------------*/

$servername = "localhost";
$username = "root";
$password = "";

#  Create conn
$conn = new mysqli($servername, $username, $password);

#  Check conn
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

#  Create database
$sql = "CREATE DATABASE w3schools_php_mysqli_oop;";

if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();



/* Note: When you create a new database, you must only specify the first 
three arguments to the mysqli object (servername, username and password).

Tip: If you have to use a specific port then add an empty string for the 
database-name argument, like this: 

new mysqli("localhost", "username", "password", "", port)


Example (MySQLi Procedural)
----------------------------*/

$servername = "localhost";
$username = "root";
$password = "";

# Create conn
$conn = mysqli_connect($servername, $username, $password);

# Check conn
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

# Create database
$sql = " CREATE DATABASE w3schools_php_mysqli_procedural;";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully <br />";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);



/* Note: The following PDO example create a database named "myDBPDO":


Example (PDO)
--------------- */


$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername", $username, $password);

  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "CREATE DATABASE w3schools_php_pdo";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Database created successfully<br>";
} catch (PDOException $err) {
  echo $sql . "<br>" . $err->getMessage();
}

$conn = null;

/* Tip: A great benefit of PDO is that it has exception class 
to handle any problems that may occur in our database queries. 

If an exception is thrown within the try{ } block, the script 
stops executing and flows directly to the first catch(){ } 
block. In the catch block above we echo the SQL statement and 
the generated error message.*/