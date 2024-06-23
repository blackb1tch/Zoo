<?php
namespace app\models\animals;

use app\models\organisms\Reptile;

final class Crocodile extends Reptile
{
    public function __construct($name, $gender)
    {
        parent::__construct($name, $gender);
    }

    public function move()
    {
        $this->addBioEntry("{$this->name} ползет по вольеру.");
    }

    public function eat()
    {
        $this->addBioEntry("{$this->name} ест мясо.");
    }

    public function reproduce()
    {
        $this->addBioEntry("{$this->name} откладывает яйца.");
    }
}