<?php
namespace app\models\organisms;

use app\models\Organism;

abstract class Arachnid extends Organism
{
    protected $poisonous;

    public function __construct($name, $gender, $poisonous)
    {
        parent::__construct($name, $gender);
        $this->poisonous = $poisonous;
    }

    public function isPoisonous()
    {
        return $this->poisonous;
    }
}
