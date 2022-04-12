<?php

class Connection
{

    public static function make(){
        try{
            return new PDO('mysql:host=localhost;dbname=my_project', 'root', '');
        }catch (PDOException $e){
            die('Could not connect.');
        }
    }
}