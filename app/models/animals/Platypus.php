<?php
namespace app\models\animals;

use app\models\organisms\Mammal;

final class Platypus extends Mammal {
    public function __construct($name, $gender) {
        parent::__construct($name, $gender);
    }

    public function move() {
        $this->addBioEntry("{$this->name} плавает по вольеру.");
    }

    public function eat() {
        $this->addBioEntry("{$this->name} ест насекомых.");
    }

    public function reproduce() {
        $this->addBioEntry("{$this->name} откладывает яйца.");
    }
}
