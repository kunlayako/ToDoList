<?php
use PHPUnit\Framework\TestCase;

class TastTest  extends TestCase {

    public function setUp() {
        $this->CI = &get_instance();
        $this->CI->load->model('tasklist');
        $this->CI->load->model('list');
        $this->task = new TaskList();
    }
}