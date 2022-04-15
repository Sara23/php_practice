<?php

$tasks = $app['database']->selectAll('todos');

require 'views\view.php';