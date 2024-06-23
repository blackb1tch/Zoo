<?php

namespace app\models\animals\factory;

use app\models\animals\Bear;
use app\models\animals\Gazelle;
use app\models\animals\Platypus;
use app\models\animals\Wolf;
use http\Exception\InvalidArgumentException;

class MammalFactory extends AbstractAnimalFactory {
    public function createAnimal($type, $name, $gender) {
        switch ($type) {
            case 'gazelle':
                return new Gazelle($name, $gender);
            case 'bear':
                return new Bear($name, $gender);
            case 'wolf':
                return new Wolf($name, $gender);
            case 'platypus':
                return new Platypus($name, $gender);
            default:
                throw new InvalidArgumentException("Неизвестный тип животного: $type");
        }
    }
}