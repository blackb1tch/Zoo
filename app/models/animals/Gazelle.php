<?php

namespace app\models\animals;

use app\models\organisms\Mammal;

final class Gazelle extends Mammal
{
    public function __construct($name, $gender)
    {
        parent::__construct($name, $gender);
    }

    public function move()
    {
        $this->addBioEntry("{$this->getName()} бегает по вольеру.");
    }

    public function eat()
    {
        $this->addBioEntry("{$this->getName()} ест траву.");
    }

    public function reproduce()
    {
        $this->addBioEntry("{$this->getName()} размножается.");
    }
}