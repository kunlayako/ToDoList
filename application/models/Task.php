<?php

class Task extends Entity {
    private $dateofbirth;
    private $age;
    private $name;

    public function setName($value) {
        if (empty($value)) {
            throw new Exception("Name can't be empty");
        }
        if (strlen(value) > 30) {
            throw new Exception('A Name cannot be longer than 30 characters');
        }
    }

    public function setDateofbirth($value) {
        if (empty($value)) {
            throw new Exception("Dateofbirth can't be empty");
        }
    }

    public function setAge($value) {
        if (empty($value)) {
            throw new Exception("Age can't be empty");
        }
    }

    public function getDateofbirth() {
        return $this->dateofbirth;
    }

    public function getAge() {
        return $this->age;
    }

    public function getName(){
        return $this->name;
    }
}