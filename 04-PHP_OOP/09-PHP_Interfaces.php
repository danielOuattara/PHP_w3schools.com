<?php

/* PHP - What are Interfaces ?
==============================

Interfaces allow you to specify what methods a class 
should implement.

Interfaces make it easy to use a variety of different 
classes in the same way. 

When one or more classes use the same interface, it is 
referred to as "polymorphism".

Interfaces are declared with the interface keyword:

Syntax
--------*/

interface InterfaceName
{
    public function someMethod1();
    public function someMethod2($name, $color);
    public function someMethod3(): string;
}


/*PHP - Interfaces vs. Abstract Classes
=========================================

Interface are similar to abstract classes. 

The difference between interfaces and abstract classes are:

> Interfaces cannot have properties, while abstract classes can

> All interface methods must be public, while abstract class 
  methods is public or protected

> All methods in an interface are abstract, so they cannot be 
  implemented in code and the abstract keyword is not necessary


NOTE:   Classes can implement an interface while inheriting from 
-----   another class at the same time



PHP - Using Interfaces
========================

To implement an interface, a class must use the 'implements' 
keyword.

A class that implements an interface must implement all of 
the interface's methods.

Example
-------- */


interface Animal
{
    public function makeSound();
}


//--------------------------

class Cat implements Animal
{
    public function makeSound()
    {
        echo "Meow";
    }
}


$animal = new Cat();
$animal->makeSound();

echo "<br>-------------------------------<br>";

/*
From the example above, let's say that we would like 
to write software which manages a group of animals. 

There are actions that all of the animals can do, but 
each animal does it in its own way.

Using interfaces, we can write some code which can work 
for all of the animals even if each animal behaves 
differently:

Example
-------- */

// Interface definition
interface Animal_2
{
    public function makeSound();
}


// Class definitions
class Cat_2 implements Animal
{
    public function makeSound()
    {
        echo " Meow ";
    }
}


class Dog_2 implements Animal
{
    public function makeSound()
    {
        echo " Bark ";
    }
}


class Mouse_2 implements Animal
{
    public function makeSound()
    {
        echo " Squeak ";
    }
}


// Create a list of animals
$cat = new Cat_2();
$dog = new Dog_2();
$mouse = new Mouse_2();
// $animals = array($cat, $dog, $mouse);
$animals = [$cat, $dog, $mouse];


// Tell the animals to make a sound
foreach ($animals as $animal) {
    $animal->makeSound();
}

/*
Example Explained
------------------

Cat, Dog and Mouse are all classes that implement 
the Animal interface, which means that all of them 
are able to make a sound using the makeSound() method. 

Because of this, we can loop through all of the animals 
and tell them to make a sound even if we don't know 
what type of animal each one is.

Since the interface does not tell the classes how to 
implement the method, each animal can make a sound in 
its own way.*/


// My own code test

// Interface definition
interface Animal_3
{
    public function makeSound();
    public function eat();
}


// Class definitions
class Cat_3 implements Animal
{
    public function makeSound()
    {
        echo " Meow ";
    }
    public function eat()
    {
        echo " I eat fishes, mice and carrot";
    }
}


class Toyguer extends Cat_3
{
    public $color;

    public function description()
    {
        echo "I am a tpyger cat";
    }
}


$toyger = new Toyguer();
$toyger->description();
$toyger->makeSound();
$toyger->eat();





class Dog_3 implements Animal
{
    public function makeSound()
    {
        echo " Bark ";
    }
}
