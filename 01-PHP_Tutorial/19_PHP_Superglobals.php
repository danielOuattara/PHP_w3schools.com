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
    <title>PHP Global Variables - Superglobals</title>
</head>

<body>

    <?php
    echo "<h1>PHP Global Variables - Superglobals</h1>";

    /*PHP Global Variables - Superglobals
===========================================
Superglobals were introduced in PHP 4.1.0, and are built-in 
variables that are always available in all scopes.

Some predefined variables in PHP are "superglobals", which 
means that they are always accessible, regardless of scope 
- and you can access them from any function, class or file 
without having to do anything special.

The PHP superglobal variables are:
-----------------------------------
$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION

The next parts will explain some of the superglobals, 
and the rest will be explained in later chapters.


PHP $GLOBALS
==============
$GLOBALS is a PHP super global variable which is used to 
access global variables from anywhere in the PHP script ,
also from within functions or methods.

PHP stores all global variables in an array called $GLOBALS[index]. 
The 'index' holds the name of the variable.
The example below shows how to use the super global variable $GLOBALS:*/

    print_r("\$GLOBALS <br/>");
    echo "============================<br/><br/>";

    $x = 75;
    $y = 25;
    function addition()
    {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    addition();
    echo $z . "<br/> <br/><br/>";

    echo "<pre>";
    echo '$GLOBALS = ';
    print_r($GLOBALS);
    echo "</pre>";


    /* In the example above, since z is a variable present within 
    the $GLOBALS array, it is also accessible from outside the function! */


    /* PHP $_SERVER
====================
$_SERVER is a PHP super global variable which holds information 
as key/value pairs about headers, paths, and script locations, etc ...

The example below shows how to use some of the elements in $_SERVER: */


    echo "\$_SERVER <br/>";
    echo "============================<br/><br/>";

    ksort($_SERVER);
    echo "<pre>";
    echo '$GLOBALS = ';
    print_r($GLOBALS);
    echo "</pre>";


    echo "----<br>";
    /*
    HTTP_USER_AGENT     =  Returns informations about the client web browser
    PHP_SELF            =  Returns the filename of the currently executing script
    GATEWAY_INTERFACE   =  Returns the version of the Common Gateway Interface (CGI) the server is using
    SERVER_ADDR         =  Returns the IP address of the host server
    SERVER_NAME         =  Returns the name of the host server (such as www.w3schools.com)
    SERVER_SOFTWARE     =  Returns the server identification string (such as Apache/2.2.24)
    SERVER_PROTOCOL     =  Returns the name and revision of the information protocol (such as HTTP/1.1)
    REQUEST_METHOD      =  Returns the request method used to access the page (such as POST)
    REQUEST_TIME        =  Returns the timestamp of the start of the request (such as 1377687496)
    QUERY_STRING        =  Returns the query string if the page is accessed via a query string
    HTTP_ACCEPT         =  Returns the Accept header from the current request
    HTTP_ACCEPT_CHARSET =  Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)
    HTTP_HOST           =  Returns the Host header from the current request
    HTTP_REFERER        =  Returns the complete URL of the current page (not reliable because not all user-agents support it)
    HTTPS               =  Is the script queried through a secure HTTP protocol
    REMOTE_ADDR         =  Returns the IP address from where the user is viewing the current page
    REMOTE_HOST         =  Returns the Host name from where the user is viewing the current page
    REMOTE_PORT         =  Returns the port being used on the user's machine to communicate with the web server
    SCRIPT_FILENAME     =  Returns the absolute pathname of the currently executing script
    SERVER_ADMIN        =  Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)
    SERVER_PORT         =  Returns the port on the server machine being used by the web server for communication (such as 80)
    SERVER_SIGNATURE    =  Returns the server version and virtual host name which are added to server-generated pages
    PATH_TRANSLATED     =  Returns the file system based path to the current script
    SCRIPT_NAME         =  Returns the path of the current script
    SCRIPT_URI          =  Returns the URI of the current page
*/


    /*PHP $_REQUEST
====================
$_REQUEST is a PHP super global variable which is used 
to collect data after submitting an HTML form.

The example below shows a form with an input field and a 
submit button. When a user submits the data by clicking on 
"Submit", the form data is sent to the file specified in the 
action attribute of the <form> tag. In this example, we point 
to this file itself for processing form data. If you wish to 
use another PHP file to process form data, replace that with 
the filename of your choice. Then, we can use the super global 
variable $_REQUEST to collect the value of the input field:  */

    echo "\$_REQUEST <br/>";
    echo "============================<br/><br/>";
    ?>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        FirstName: <input type="text" name="firstname"><br /><br />
        LastName: <input type="text" name="lastname"><br /><br />
        Age: <input type="text" name="age"><br /><br />
        <input value="Submit your form" type="submit"><br /><br />
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $firstname = $_REQUEST['firstname'];
        $lastname = $_REQUEST['lastname'];
        $age = $_REQUEST['age'];
        if (empty($firstname)) {
            echo "Error : input for 'firstname' is required";
        } elseif (empty($lastname)) {
            echo "Error : input for 'lastname' is required";
        } elseif (empty($age)) {
            echo "Error : input for 'age' is required";
        } else {
            echo " User infos : " . $firstname . " " . $lastname . " " . $age;
        }
    } else {
        echo "Error: POST method is required to submit form ";
    }

    echo "<br/><br/><br/>";


    /* PHP $_POST
===================
$_POST is a PHP super global variable which is used to collect 
form data after submitting an HTML form with method="post". 

$_POST is also widely used to pass variables.

The example below shows a form with an input field and a submit 
button. When a user submits the data by clicking on "Submit", 
the form data is sent to the file specified in the action attribute 
of the <form> tag. In this example, we point to the file itself 
for processing form data. If you wish to use another PHP file to 
process form data, replace that with the filename of your choice. 
Then, we can use the super global variable $_POST to collect 
the value of the input field: */

    echo "\$_POST <br/>";
    echo "============================<br/><br/>";
    ?>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        FirstName: <input type="text" name="firstname"><br /><br />
        LastName: <input type="text" name="lastname"><br /><br />
        Age: <input type="text" name="age"><br /><br />
        <input value="Submit your form" type="submit"><br /><br />
    </form>

    <?php


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $age = $_POST['age'];
        if (empty($firstname)) {
            echo "Error : input for 'firstname' is required";
        } elseif (empty($lastname)) {
            echo "Error : input for 'lastname' is required";
        } elseif (empty($age)) {
            echo "Error : input for 'age' is required";
        } else {
            echo " User infos : " . $firstname . " " . $lastname . " " . $age;
        }
    } else {
        echo "Error: POST method is required to submit form ";
    }

    echo "<br/><br/><br/>";


    /* PHP $_GET
==================
$_GET is a PHP super global variable which is used to collect 
form data after submitting an HTML form with method="get".

$_GET can also collect data sent in the URL.

Assume we have an HTML page that contains a hyperlink with parameters:
___________________________________________________________________
<html>
<body>

<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>

</body>
</html>
____________________________________________________________________


When a user clicks on the link "Test $GET", the parameters "subject" 
and "web" are sent to "test_get.php", and you can then access their 
values in "test_get.php" with $_GET. */


    echo "\$_GET <br/>";
    echo "============================<br/><br/>";

    echo " Study " . $_GET['subject'] . " at " . $_GET['web'];
    ?>

    <a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>

    <?php
    /*


$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION
*/
    ?>




</body>

</html>