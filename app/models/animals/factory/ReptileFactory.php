<?php

namespace app\models\animals\factory;

use app\models\animals\Cobra;
use app\models\animals\Crocodile;
use app\models\animals\Snake;
use Psr\Log\InvalidArgumentException;

class ReptileFactory extends AbstractAnimalFactory {
    public function createAnimal($type, $name, $gender) {
        switch ($type) {
            case 'crocodile':
                return new Crocodile($name, $gender);
            case 'snake':
                return new Snake($name, $gender);
            case 'cobra':
                return new Cobra($name, $gender);
            default:
                throw new InvalidArgumentException("Неизвестный тип животного: $type");
        }
    }
}
