<?php

class Person
{
    public $name;
    public $surname;
    public $age;
    public $eyeColor;

    public function __construct($name, $surname, $age, $eyeColor)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->eyeColor = $eyeColor;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
    public function setEyeColor($eyeColor)
    {
        $this->eyeColor = $eyeColor;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getSurname()
    {
        return $this->surname;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getEyeColor()
    {
        return $this->eyeColor;
    }
}