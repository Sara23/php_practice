<?php
require 'functions.php';

$task = [
    'title' => 'Build a portifolio',
    'due' => '10/04/2022',
    'assigned_to' => 'Sara',
    'completed' => false
];
$people = [13, 25, 2, 68, 121, 20, 21, 22, 18];


foreach ($people as $age){
    if(checkAge($age)){
        echo "Allowed, you are welcome!";
    } else{
        echo "Sorry, you are not allowed.";
    }
    echo "\r\n";
}


require 'view.php';