<?php

class Person {
    // Properties
    public $name;
    public $eyeColor;
    public $age;

    public function __construct($name, $eyeColor, $age) {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }
     
    //Methods
    public function setName($name) {

        $this->name = $name;
    }

}