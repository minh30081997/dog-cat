<?php

include_once 'animal.php';

class Dog extends Animal
{
    public $voice = 'gau gau';

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
        echo 'Dog attack !!!';
    }

    public function chase()
    {
        echo 'Dog chase Cat';
    }
}

$dog = new Dog('Mickey', '2', 'black');
$dog->show();
