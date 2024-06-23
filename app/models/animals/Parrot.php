<?php
namespace app\models\animals;

use app\models\organisms\Bird;

final class Parrot extends Bird {
    public function __construct($name, $gender) {
        parent::__construct($name, $gender, true);
    }

    public function move() {
        $this->addBioEntry("{$this->name} летает по вольеру.");
    }

    public function eat() {
        $this->addBioEntry("{$this->name} ест фрукты.");
    }

    public function reproduce() {
        $this->addBioEntry("{$this->name} откладывает яйца.");
    }
}