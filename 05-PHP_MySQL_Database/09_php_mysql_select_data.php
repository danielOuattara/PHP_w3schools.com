<?php

/*  PHP MySQL Select Data From a MySQL Database
================================================

The 'SELECT' statement is used to select data from one 
or more tables:
---
SELECT column_name(s) 
FROM table_name
---

or we can use the * character to select ALL columns from a table:
---
SELECT * 
FROM table_name
---

To learn more about SQL, please visit our SQL tutorial.


Select Data With MySQLi
=========================

The following example selects the id, firstname and lastname columns 
from the MyGuests table and displays it on the page:

Example (MySQLi Object-oriented)
---------------------------------*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "w3schools_php_mysqli_oop";

#  Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

#  Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests;";
$result = $conn->query($sql);

echo '<pre>';
print_r($result->fetch_assoc());
echo '</pre>';

if ($result->num_rows > 0) {
    #  output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();


/* Code lines to explain from the example above:
---------------------------------------------------

First, we set up an SQL query that selects the id, firstname 
and lastname columns from the MyGuests table. 

The next line of code runs the query and puts the resulting 
data into a variable called $result.

Then, the function num_rows() checks if there are more than zero 
rows returned. If there are more than zero rows returned, the 
function fetch_assoc() puts all the results into an associative 
array that we can loop through. 

The while() loop loops through the result set and outputs the data 
from the id, firstname and lastname columns.

The following example shows the same as the example above, in the 
MySQLi procedural way:


Example (MySQLi Procedural)
-----------------------------*/
echo '<br/>------------------------------------------------------------<br/>';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "w3schools_php_mysqli_procedural";

#  Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

#  Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, firstname, lastname FROM MyGuests;";
$result = mysqli_query($conn, $sql);

echo '<pre>';
print_r($result);
echo '</pre>';

if (mysqli_num_rows($result) > 0) {
    #  output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);


/* You can also put the result in an HTML table:

Example (MySQLi Object-oriented) for HTML table
-------------------------------------------------*/
echo '<br/>------------------------------------------------------------<br/>';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "w3schools_php_mysqli_oop";

#  Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

#  Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "
    <table border='1'>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>";
    #  output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "
        <tr>
            <td>" . $row["id"] . "</td> 
            <td>" . $row["firstname"] . " " . $row["lastname"] . "</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();



/* Select Data With PDO (+ Prepared Statements)
================================================

The following example uses prepared statements.

It selects the id, firstname and lastname columns from 
the MyGuests table and displays it in an HTML table:


Example (PDO)
---------------*/

echo '<br/>------------------------------------------------------------<br/>';
echo "<table style='border: solid 1px black;'>";
echo "
    <tr>
        <th>Id</th>
        <th>Firstname</th>
        <th>Lastname</th>
    </tr>";

class TableRows extends RecursiveIteratorIterator
{
    function __construct($it)
    {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current()
    {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current() . "</td>";
    }

    function beginChildren()
    {
        echo "<tr>";
    }

    function endChildren()
    {
        echo "</tr>" . "\n";
    }
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "w3schools_php_pdo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");
    $stmt->execute();

    #  set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
        echo $v;
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
