<?php

require 'functions.php';
require 'Task.php';

$pdo = connectToDb();

$tasks = fetchAllTasks($pdo);

//$tasks = [];

require 'view.php';