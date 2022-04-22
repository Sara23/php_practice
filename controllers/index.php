<?php

$users = App::get('database')->selectAll('users');

require 'views\view.php';