<?php

namespace app\models\organisms;

use app\models\Organism;

abstract class Bird extends Organism
{
    protected $canFly;

    public function __construct($name, $gender, $canFly)
    {
        parent::__construct($name, $gender);
        $this->canFly = $canFly;
    }

    public function canFly()
    {
        return $this->canFly;
    }
}