<?php

require_once('app/connection.php');


if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
    
} else {
    $controller = 'home';
    $action     = 'home';
}

require_once('app/views/layout.php');