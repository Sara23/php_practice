<?php

$users = $app['database']->selectAll('users');

require 'views\view.php';