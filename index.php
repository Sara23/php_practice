<?php


class Task {
    public $description;
    public $completed = false;

    public function __construct($description){
        $this->description = $description;
    }

    public function complete() {
        $this->completed = true;
    }

    public function is_complete(){
        return $this->completed;
    }
}

$tasks = [
    new Task('Start a project'),
    new Task('Do the groceries'),
    new Task('Clean the house'),
    new Task('Do the homework')
];

$tasks[2]->complete();


require 'view.php';