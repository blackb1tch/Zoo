<?php
namespace app\models\animals;

use app\models\organisms\Mammal;

final class Platypus extends Mammal {
    public function __construct($name, $gender) {
        parent::__construct($name, $gender);
    }

    public function move() {
        $this->addBioEntry("{$this->getName()} плавает по вольеру.");
    }

    public function eat() {
        $this->addBioEntry("{$this->getName()} ест насекомых.");
    }

    public function reproduce() {
        $this->addBioEntry("{$this->getName()} откладывает яйца.");
    }
}
