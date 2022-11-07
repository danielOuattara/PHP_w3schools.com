
<?php

/* PHP - Constants in Classes
===============================

Constants cannot be changed once it is declared.

Constants can be useful in a class if you need to define 
some data within a class that cannot change

A constant in a class is declared with the 'const' keyword.

Constants are case-sensitive. It is recommended to 
name the constants in all uppercase letters.

We can access a constant from outside the class by using the class 
name followed by the "scope resolution operator (::)" followed by 
the constant name, like here:

Example
-------- */


class Goodbye_1
{
  const MESSAGE = "Thank you for visiting W3Schools.com!";
  protected const SECRET_MESSAGE = "PHP will make you clever";
  private const SECRET_PLACE = "In the South-West of France ";
}


echo Goodbye_1::MESSAGE . "<br/>";

echo "<br/>-------------------------------<br/>";


/*
Or, we can access a constant from inside the class by using the 
self keyword followed by the scope resolution operator (::) 
followed by the constant name, like here:

Example */

class Goodbye_2
{
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
  protected const SECRET_MESSAGE = "PHP will make you clever";
  private const SECRET_PLACE = "In the South-West of France ";

  public function byebye()
  {
    echo self::LEAVING_MESSAGE . "<br/>";
    echo self::SECRET_MESSAGE . "<br/>";
    echo self::SECRET_PLACE . "<br/>";
  }
}

$goodbye = new Goodbye_2();
$goodbye->byebye();
