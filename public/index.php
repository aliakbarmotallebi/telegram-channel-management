<?php

/**
 * Front controller
 *
 * PHP version 7.0
 */

/**
 * Composer
 */
require dirname(__DIR__) . '/vendor/autoload.php';


/**
 * Error and Exception handling
 */
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');


/**
 * Routing
 */
$router = new Core\Router();

// Add the routes
$router->add('', ['controller' => 'Panel', 'action' => 'index']);
$router->add('bots', ['controller' => 'Bot', 'action' => 'index']);
$router->add('bots/create', ['controller' => 'Bot', 'action' => 'create']);
// $router->add('{controller}/{action}');

    
$router->dispatch($_SERVER['QUERY_STRING']);
