<?php

namespace app\models;

// Класс вольера
class Enclosure {
    protected $isOpen;
    protected $isLocked;
    protected $hasRoof;
    protected $food;
    protected $animal;

    public function __construct($isOpen = true, $isLocked = false, $hasRoof = true, $food = 0) {
        $this->isOpen = $isOpen;
        $this->isLocked = $isLocked;
        $this->hasRoof = $hasRoof;
        $this->food = $food;
    }

    public function isOpen() {
        return $this->isOpen;
    }

    public function isLocked() {
        return $this->isLocked;
    }

    public function hasRoof() {
        return $this->hasRoof;
    }

    public function getFood() {
        return $this->food;
    }

    public function addFood($amount) {
        $this->food += $amount;
    }

    public function setAnimal(Organism $animal) {
        $this->animal = $animal;
    }

    public function getAnimal() {
        return $this->animal;
    }
}