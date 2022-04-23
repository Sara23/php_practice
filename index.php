<?php

require 'vendor/autoload.php';


$query = require 'core\bootstrap.php';

Router::load('route.php')->direct(Request::uri(), Request::method());