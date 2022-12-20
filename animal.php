<?php

class Animal
{
    public $name;
    public $age;
    public $color;

    public function __construct($name, $age, $color)
    {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }

    public function show()
    {
        echo $this->name . ': ' . $this->age . ' ' . $this->color . ' ';
    }

    public function test()
    {
    }
}
