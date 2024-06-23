<?php
namespace app\models\animals\factory;

use app\models\animals\HouseSpider;
use app\models\animals\Tarantula;
use Psr\Log\InvalidArgumentException;

class ArachnidFactory extends AbstractAnimalFactory {
    public function createAnimal($type, $name, $gender) {
        switch ($type) {
            case 'tarantula':
                return new Tarantula($name, $gender);
            case 'house_spider':
                return new HouseSpider($name, $gender);
            default:
                throw new InvalidArgumentException("Неизвестный тип животного: $type");
        }
    }
}