<?php

/* Insert Data Into MySQL Using MySQLi and PDO
===============================================

After a database and a table have been created, we can start 
adding data in them.

Here are some syntax rules to follow:

  > The SQL query must be quoted in PHP
  > String values inside the SQL query must be quoted
  > Numeric values must not be quoted
  > The word NULL must not be quoted


The 'INSERT INTO' statement is used to add new records 
to a MySQL table:

-------------------------------------------------------
INSERT INTO 
    table_name (column1, column2, column3,...)
    VALUES 
        (value1, value2, value3,...)


To learn more about SQL, please visit our SQL tutorial.

In the previous chapter we created an empty table named 
"MyGuests" with five columns: "id", "firstname", "lastname", 
"email" and "reg_date". Now, let us fill the table with data.

Note: If a column is AUTO_INCREMENT (like the "id" column) or 
      TIMESTAMP with default update of current_timesamp 
      (like the "reg_date" column), it is no need to be specified 
      in the SQL query; MySQL will automatically add the value.


The following examples add a new record to the "MyGuests" table:

Example (MySQLi Object-oriented) 
--------------------------------*/

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

$sql = "
    INSERT INTO 
        MyGuests (firstname, lastname, email)
        VALUES ('John', 'Doe', 'john@example.com');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




/* Example (MySQLi Procedural) 
-------------------------------*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "w3schools_php_mysqli_procedural";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "
    INSERT INTO 
        MyGuests (firstname, lastname, email)
        VALUES ('John', 'Doe', 'john@example.com');";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



/* Example (PDO) 
-----------------*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "w3schools_php_pdo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    # set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "
        INSERT INTO 
            MyGuests (firstname, lastname, email)
            VALUES ('John', 'Doe', 'john@example.com');";

    # use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
