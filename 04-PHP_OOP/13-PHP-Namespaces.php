<?php

/* PHP Namespaces
===================

Namespaces are qualifiers that solve two different problems:

1) They allow for better organization by grouping classes 
   that work together to perform a task

2) They allow the same name to be used for more than one class

For example, you may have a set of classes to describe an 
HTML table, such as 'Table', 'Row' and 'Cell' while also having 
another set of classes to describe furniture, such as 'Table', 
'Chair' and 'Bed'. 

Namespaces can be used to organize the classes into two different 
groups while also preventing the two classes Table and Table from 
being mixed up.



Declaring a Namespace
======================

Namespaces are declared at the beginning of a file using 
the 'namespace' keyword:


Syntax
----------

namespace Html; // Declare a namespace called 'Html':


NOTE: A namespace declaration must be the first thing in the PHP file. 


The following code would be invalid:

# <?php
#   echo "Hello World!";
#   namespace Html;
#   ...
# ?>


Constants, classes and functions declared in this file will 
belong to the Html namespace:


Example
--------

Create a Table class in the Html namespace: */

namespace Html;

class Table
{
  public $title = "";
  public $numRows = 0;

  public function message()
  {
    echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
  }
}



$table = new Table();
$table->title = "My table";
$table->numRows = 5;

?>


<!DOCTYPE html>
<html>

<body>

  <?php
  $table->message();
  ?>

</body>

</html>

<?php



/* For further organization, it is possible to have nested namespaces:


Syntax : Declare a namespace called Html inside a namespace called Code:
-------

namespace Code\Html;

---------------------


Using Namespaces
====================

Any code that follows a namespace declaration is operating 
inside the namespace, so classes that belong to the namespace 
can be instantiated without any qualifiers. 

To access classes from outside a namespace, the class needs to 
have the namespace attached to it.


Example: Use classes from the Html namespace:

$table = new Html\Table()
$row = new Html\Row();

When many classes from the same namespace are being used at 
the same time, it is easier to use the namespace keyword:


Example:
--------

Use classes from the Html namespace without the need for the Html\qualifier:

namespace Html;

$table = new Table();
$row = new Row();



Namespace Alias
================

It can be useful to give a namespace or class an alias to make 
it easier to write. This is done with the 'use' keyword:


Example: Give a namespace an alias:
--------

include "index.php";
use Html as H;
$table = new H\Table();


Example : Give a class an alias:
---------

include "index.php";
use Html\Table as T;
$table = new T();
$table = new T();


Combined alias ?
---------------

include "index.php";
use Html as H;
use Html\Table as T;
$table = new H\T();


*/