<?php

use PHPUnit\Framework\TestCase;

class TaskListTest extends TestCase {

    private $CI;
    private $tasks;

    public function setUp()
    {
        //Load CI instance normally
        $this->CI = &get_instance();
        $this->CI->load->model('tasks');
        $this->tasks = new Tasks;
    }

    public function testTasks()
    {
        $completed   = 0;
        $in_progress = 0;

        foreach($this->tasks->all() as $task) {
            if( strcmp($task->status,"2") === 0 ){
                $completed++;
            } else{
                $in_progress++;
            }
        }

        $this->assertGreaterThan($completed, $in_progress);
    }
}