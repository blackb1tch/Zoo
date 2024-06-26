<?php
namespace app\models\animals;

use app\models\organisms\Reptile;

final class Cobra extends Reptile {
    public function __construct($name, $gender, $poisonous = true) {
        parent::__construct($name, $gender);
        $this->poisonous = $poisonous;
    }
    public function isPoisonous() {
        return $this->poisonous;
    }

    public function move() {
        $this->addBioEntry("{$this->getName()} ползет по вольеру.");
    }

    public function eat() {
        $this->addBioEntry("{$this->getName()} ест мелких животных.");
    }

    public function reproduce() {
        $this->addBioEntry("{$this->getName()} откладывает яйца.");
    }
}