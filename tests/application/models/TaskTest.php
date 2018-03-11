<?php

use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{

    private $CI;
    private $task;

    function setUp() {
        $this->CI = &get_instance();
        $this->CI->load->model('task');
        $this->item = new Task();
    }

    public function testId() {
        $this->assertEquals("", $this->item->setId(1));
    }

    public function testSetTask()
    {
        $this->task->setTask("Todo project");
        $this->assertEquals("Todo project", $this->task->getTask());
    }

    public function testSetPriority(){
        $this->task->setPriority(3);
        $this->assertEquals(2, $this->task->getPriority());
        $this->expectException(Exception::class);
        $this->task->setPriority("testSetPriority");

    }

    public function testSetSize() {
        $this->task->setSize(4);
        $this->assertEquals(4, $this->task->getSize());
        $this->expectException(Exception::class);
        $this->task->setSize(7);
    }

    public function testSetGroup() {
        $this->task->setGroup(5);
        $this->assertEquals(5, $this->task->getGroup());
        $this->expectException(Exception::class);
        $this->task->setGroup(-10);
    }
}