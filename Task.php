<?php

class Task
{
    public $description;
    public $completed;

    public function complete() {
        $this->completed = true;
    }

    public function is_complete(){
        return $this->completed;
    }
}