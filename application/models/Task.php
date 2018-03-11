<?php

class Task extends Entity {
<<<<<<< HEAD
    private $priority;
    private $size;
    private $group;
    private $task;

    public function setTask($value) {

        if (!ctype_alnum(trim(str_replace(' ','',$value)))) {
            throw new Exception('does not consist of alpha, numeric and spaces');
        }

        if (empty($value)) {
            throw new Exception("Task Name can't be empty");
        }
        if (strlen($value) > 30) {
            throw new Exception('A Task Name cannot be longer than 30 characters');
        }

        $this->task = $value;
    }

    public function setPriority($value) {
        if (!is_int($value)) {
            throw new Exception("Priority has to be an integer");
        }
        if ($value < 1 || $value > 4) {
            throw new Exception('Must be between 1 to 4');
        }

        $this->priority = $value;
    }

    public function setSize($value) {
        if (!is_int($value)) {
            throw new Exception('Size must be an integer');
        }
        if ($value < 1 || $value > 4) {
            throw new Exception('Must be between 1 to 4');
        }

        $this->size = $value;
    }

    public function setGroup($value) {
        if (!is_int($value)) {
            throw new Exception('Group must be an integer');
        }
        if ($value < 1 || $value > 5) {
            throw new Exception('Must be between 1 to 5');
        }
        $this->group = $value;
    }

    public function getTask() {
        return $this->task;
    }

    public function getPriority() {
        return $this->priority;
    }

    public function getSize(){
        return $this->size;
    }

    public function getGroup() {
        return $this->group;
=======
    public $id;
    public $priority;
    public $task;
    public $size;
    public $group;

    public function setId($value) {
        if (empty($value))
            throw new Exception('ID ust exist');
        $this->id = $value;
    }

    public function setPriority($value) {
        if (! is_numeric($value))
            throw new Exception('Must contain priority');
        if ($value > 4)
            throw new Exception('Priority must be < 4');
        $this->priority = $value;
    }

    public function setTask($value) {
        if (strlen($value) > 64) {
            throw new Exception('Task cannot be longer than 64 chars');
        }
        if (!ctype_alnum(trim(str_replace(' ','',$value))))
            throw new Exception('Task is invalid');
        $this->priority = $value;
    }

    public function setSize($value) {
        if (!is_numeric($value))
            throw new Exception('Size cannot be empty');
        if ($value > 4)
            throw new Exception('Please choose proper size');
        $this->size = $value;
    }

    public function setGroup($value) {
        if (!is_numeric($value))
            throw new Exception('Group cannot be empty');
        if ($value > 4)
            throw new Exception('Please choose a proper group');
        $this->group = $value;
>>>>>>> 7e211108dcd4174981c01407c7b3c4e2999d5f1a
    }
}