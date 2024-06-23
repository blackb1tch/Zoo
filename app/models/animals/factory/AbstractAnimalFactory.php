<?php

namespace app\models\animals\factory;

// Абстрактная фабрика для создания животных
abstract class AbstractAnimalFactory {
    abstract public function createAnimal($type, $name, $gender);
}
