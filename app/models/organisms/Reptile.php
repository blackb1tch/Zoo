<?php
namespace app\models\organisms;

use app\models\Organism;

abstract class Reptile extends Organism
{
    public function __construct($name, $gender)
    {
        parent::__construct($name, $gender);
    }
}