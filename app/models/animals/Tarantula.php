<?php
namespace app\models\animals;

use app\models\organisms\Arachnid;

final class Tarantula extends Arachnid {
    public function __construct($name, $gender) {
        parent::__construct($name, $gender, true);
    }

    public function move() {
        $this->addBioEntry("{$this->getName()} ползет по вольеру.");
    }

    public function eat() {
        $this->addBioEntry("{$this->getName()} ловит насекомых.");
    }

    public function reproduce() {
        $this->addBioEntry("{$this->getName()} размножается.");
    }
}