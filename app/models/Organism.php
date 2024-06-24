<?php
namespace app\models;

abstract class Organism
{
    protected $name;
    protected $gender;
    protected $fullness;
    protected $age;
    protected $alive;
    protected $bio = [];

    public function __construct($name, $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->fullness = 100;
        $this->age = 0;
        $this->alive = true;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getFullness()
    {
        return $this->fullness;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setGender($gender)
    {
        return $this->gender = $gender;
    }

    public function setFullness($fullness)
    {
        return $this->fullness = $fullness;
    }

    public function setAge($age)
    {
        return $this->age = $age;
    }

    public function isAlive()
    {
        return $this->alive;
    }

    public function setIsDie()
    {
        $this->alive = false;
    }

    public function getBio()
    {
        return $this->bio;
    }

    public function addBioEntry($entry)
    {
        $this->bio[] = $entry;
    }

    abstract public function move();

    abstract public function eat();

    abstract public function reproduce();
}
