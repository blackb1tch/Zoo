<?php
namespace app\models\animals;

use app\models\organisms\Arachnid;

final class Tarantula extends Arachnid {
    public function __construct($name, $gender) {
        parent::__construct($name, $gender, true);
    }

    public function move() {
        $this->addBioEntry("{$this->name} ползет по вольеру.");
    }

    public function eat() {
        $this->addBioEntry("{$this->name} ловит насекомых.");
    }

    public function reproduce() {
        $this->addBioEntry("{$this->name} размножается.");
    }
}