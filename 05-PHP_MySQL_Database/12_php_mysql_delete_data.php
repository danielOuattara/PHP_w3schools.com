<?php

/* PHP MySQL Delete Data
=========================

Delete Data From a MySQL Table Using MySQLi and PDO

The DELETE statement is used to delete records from a table:

-----
DELETE FROM table_name
WHERE some_column = some_value
------

Notice the WHERE clause in the DELETE syntax: it specifies 
which record or records that should be deleted. 

If you omit the WHERE clause, all records will be deleted!

To learn more about SQL, please visit our SQL tutorial.


Let's look at the "MyGuests" table:
---------------------------------------------------------------
id 	firstname 	lastname 	email 	reg_date
1 	John 	Doe 	john@example.com 	2014-10-22 14:26:15
2 	Mary 	Moe 	mary@example.com 	2014-10-23 10:22:30
3 	Julie 	Dooley 	julie@example.com 	2014-10-26 10:48:23
---------------------------------------------------------------


The following examples delete the record with id=3 in the "MyGuests" table:

Example (MySQLi Object-oriented)
-----------------------------------*/

echo '<br/>------------------------------------------------------------<br/>';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "w3schools_php_mysqli_oop";

# Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
# Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

# sql to delete a record
$sql = "
    DELETE FROM MyGuests 
    WHERE id=3";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

/* Example (MySQLi Procedural)
---------------------------------*/

echo '<br/>------------------------------------------------------------<br/>';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "w3schools_php_mysqli_procedural";

# Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
# Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

# sql to delete a record
$sql = "
    DELETE FROM MyGuests 
    WHERE id=3";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);



/*Example (PDO)
--------------------- */

echo '<br/>------------------------------------------------------------<br/>';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "w3schools_php_pdo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    # set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    # sql to delete a record
    $sql = "DELETE FROM MyGuests WHERE id=3";

    # use exec() because no results are returned
    $conn->exec($sql);
    echo "Record deleted successfully";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
/*

After the record is deleted, the table will look like this:
id firstname lastname email reg_date
1 John Doe john@example.com 2014-10-22 14:26:15
2 Mary Moe mary@example.com 2014-10-23 10:22:30 */