<?php

function checkAge($age) {
    if($age >= 21){
        return true;
    } else {
        return false;
    }
}

function connectToDb(){
    try{
        return new PDO('mysql:host=localhost;dbname=my_project', 'root', '');
    }catch (PDOException $e){
        die('Could not connect.');
    }
}

function fetchAllTasks($pdo){
    $statement = $pdo->prepare("select * from todos");
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

}