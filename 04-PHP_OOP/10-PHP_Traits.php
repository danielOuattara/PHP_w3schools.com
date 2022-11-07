<?php

/* PHP - What are Traits ?
============================

PHP only supports single inheritance: a child class 
can inherit only from one single parent.

So, what if a class needs to inherit multiple behaviors ? 
OOP "traits" solve this problem.

Traits are used to declare methods that can be used in 
multiple classes. 

Traits can have methods and abstract methods that can be 
used in multiple classes, and the methods can have any 
access modifier (public, private, or protected).

Traits are declared with the "trait" keyword:

syntax 
-------*/

trait TraitName
{
  // some code...
}


/* To use a trait in a class, use the "use" keyword: */



class MyClass
{
  use TraitName;
}

//------------------------------------------------------------------

/* Let's look at an example: */


trait message1
{
  public function msg1()
  {
    echo "OOP is fun! ";
  }
  public function msg2()
  {
    echo "I am hungry! ";
  }
}


class Welcome
{
  use message1;
}



$obj = new Welcome();
$obj->msg1();
$obj->msg2();

echo "<br>-------------------------------<br>";


/* Example Explained
----------------------

Here, we declare one 'trait': message1. Then, we 
create a class 'Welcome'.

The class uses the trait, and all the methods in 
the trait will be available in the class.

If other classes need to use the msg1() function, 
simply use the message1 trait in those classes. 

This reduces code duplication, because there is 
no need to redeclare the same method over and over 
again.


PHP - Using Multiple Traits
================================

Let's look at another example: */


trait message2
{
  public function msg1()
  {
    echo "OOP is fun! ";
  }
}

//---

trait message3
{
  public function msg2()
  {
    echo "OOP reduces code duplication!";
  }
}


//---


class Welcome2
{
  use message2;
}


$obj2 = new Welcome2();
$obj2->msg1();

echo "<br>-------------------------------<br>";


//---


class Welcome3
{
  use message2, message3;
}


$obj3 = new Welcome3();
$obj3->msg1();
$obj3->msg2();

echo "<br>-------------------------------<br>";

/* Example Explained
---------------------

Here, we declare two traits: message1 and message2. 

Then, we create two classes: Welcome2 and Welcome3. 

Welcome2 class uses the message2 trait.

Welcome3 uses both message2 and message3 traits, 
separated by comma. */