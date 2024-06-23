<?php
namespace app\models\animals;

use app\models\organisms\Bird;

final class Penguin extends Bird
{
    public function __construct($name, $gender)
    {
        parent::__construct($name, $gender, false);
    }

    public function move()
    {
        $this->addBioEntry("{$this->name} ходит по вольеру.");
    }

    public function eat()
    {
        $this->addBioEntry("{$this->name} ест рыбу.");
    }

    public function reproduce()
    {
        $this->addBioEntry("{$this->name} откладывает яйца.");
    }
}