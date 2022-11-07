<?php

/* Insert Multiple Records Into MySQL Using MySQLi and PDO
===========================================================

The following examples add three new records to the "MyGuests" table:


Example (MySQLi Object-oriented) 
---------------------------------*/

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
    VALUES 
        ('John', 'Doe', 'john@example.com'),
        ('Mary', 'Moe', 'mary@example.com'),
        ('Julie', 'Dooley', 'julie@example.com');";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error:<br> " . $sql . "<br>" . $conn->error;
}

$conn->close();


/* Note that each SQL statement must be separated by a semicolon.  
    

Example (MySQLi Procedural) 
-------------------------------*/

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

$sql = "
    INSERT INTO 
        MyGuests (firstname, lastname, email)
        VALUES 
            ('John', 'Doe', 'john@example.com'),
            ('Mary', 'Moe', 'mary@example.com'),
            ('Julie', 'Dooley', 'julie@example.com');";

if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


/* Example (PDO) 
-------------*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "w3schools_php_pdo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    # set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    # begin the transaction
    $conn->beginTransaction();

    $conn->exec("
    INSERT INTO 
        MyGuests (firstname, lastname, email)
        VALUES 
            ('John', 'Doe', 'john@example.com'),
            ('Mary', 'Moe', 'mary@example.com'),
            ('Julie', 'Dooley', 'julie@example.com');");

    # commit the transaction
    $conn->commit();
    echo "New records created successfully";
} catch (PDOException $err) {
    # roll back the transaction if something failed
    $conn->rollback();
    echo "Error: " . $err->getMessage();
}
$conn = null;
