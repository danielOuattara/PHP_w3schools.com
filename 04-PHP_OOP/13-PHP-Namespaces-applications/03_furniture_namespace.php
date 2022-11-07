<?php

namespace Furniture;

class Table
{
    public $title = "";
    public $feet = 0;
    public $color = '';

    public function message()
    {
        echo "<p> Table '{$this->title}' has {$this->feet} feet and its color is {$this->color}. </p>";
    }
}



class Chair
{
    public $price = 0;
    public $name = '';

    public function message()
    {
        echo "<p>The price of the chair {$this->name} is {$this->price}.</p>";
    }
}



class Bed
{
    public $price = 0;
    public $name = '';

    public function message()
    {
        echo "<p>The price of the bed {$this->name} is {$this->price}.</p>";
    }
}
