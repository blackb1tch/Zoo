<?php

namespace app\models\animals;

use app\models\organisms\Mammal;

final class Bear extends Mammal
{
    public function __construct($name, $gender)
    {
        parent::__construct($name, $gender);
    }

    public function move()
    {
        $this->addBioEntry("{$this->name} бродит по вольеру.");
    }

    public function eat()
    {
        $this->addBioEntry("{$this->name} ест мясо и ягоды.");
    }

    public function reproduce()
    {
        $this->addBioEntry("{$this->name} размножается.");
    }
}