<?php

class Task extends Entity {
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
    }
}