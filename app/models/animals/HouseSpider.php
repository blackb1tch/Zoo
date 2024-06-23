<?php
namespace app\models\animals;

use app\models\organisms\Arachnid;

final class HouseSpider extends Arachnid {
    public function __construct($name, $gender) {
        parent::__construct($name, $gender, false);
    }

    public function move() {
        $this->addBioEntry("{$this->name} плетет паутину.");
    }

    public function eat() {
        $this->addBioEntry("{$this->name} ловит насекомых.");
    }

    public function reproduce() {
        $this->addBioEntry("{$this->name} размножается.");
    }
}
