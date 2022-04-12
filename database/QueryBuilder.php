<?php
require 'Task.php';

class QueryBuilder {
    protected $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function selectAll($table) {

        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();

        if($table === 'todos'){
            return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
        } else {
            return $statement->fetchAll(PDO::FETCH_CLASS);
        }
    }
}