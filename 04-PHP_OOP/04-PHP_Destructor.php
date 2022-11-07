
<?php


/* PHP - The __destruct Function
=================================

A 'destructor' is called when the object is destructed 
or the script is stopped or exited.

IMPORTANT : If you create a '__destruct()' function, PHP will automatically 
----------  call this function at the end of the script.

Notice that the destruct function starts with two underscores (__)!

The example below has a '__construct()' function that is automatically 
called when you create an object from a class, and a '__destruct()' 
function that is automatically called at the end of the script: */


class Fruit
{
    public $name;
    public $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
        echo "Fruit created : ", $this->name ,"\n";
    }
    
    function __destruct()
    {
        echo "The fruit {$this->name} is destructed \n";
    }
}


$apple = new Fruit("Apple", "green");
$mangue = new Fruit('Mangue', "orange");

echo "\n--------------------\n";

// Another example:

class Fruit_2
{
    public $name;
    public $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    function __destruct()
    {
        echo "The fruit is {$this->name} and the color is {$this->color} 2\n";
    }
}


$apple = new Fruit_2("Apple", "red");
$abricot = new Fruit_2("Abricot", "orange");

/* NOTE: constructors and destructors are very useful by reducing the amount of code */
