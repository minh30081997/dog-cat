<?php

require_once 'animal.php';
class Cat extends Animal
{
    public $voice = 'meo meo';

    public function scream()
    {
        return $this->voice;
    }

    public function show()
    {
        echo parent::show() . $this->scream();
    }
}

$cat = new Cat('Tom', 1, 'White');
$cat->show();
