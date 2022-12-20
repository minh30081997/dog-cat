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

    public function attack()
    {
        echo 'Cat attack !!!';
    }

    public function chase()
    {
        echo 'Cat chase Mouse';
    }
}

$cat = new Cat('Tom', 1, 'White');
$cat->show();
