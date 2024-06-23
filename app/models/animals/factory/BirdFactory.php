<?php

namespace app\models\animals\factory;

use app\models\animals\Parrot;
use app\models\animals\Penguin;
use Psr\Log\InvalidArgumentException;

class BirdFactory extends AbstractAnimalFactory {
    public function createAnimal($type, $name, $gender) {
        switch ($type) {
            case 'penguin':
                return new Penguin($name, $gender);
            case 'parrot':
                return new Parrot($name, $gender);
            default:
                throw new InvalidArgumentException("Неизвестный тип животного: $type");
        }
    }
}