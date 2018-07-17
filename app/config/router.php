<?php

$router = $di->getRouter();

// Define your routes here

$router->handle();

$router = new Phalcon\Mvc\Router();  

$router->add('/komunitas', array( 
   'controller' => 'komunitas', 
   'action' => 'index', 
));

$router->add('/komunitas/createKomunitas', array( 
   'controller' => 'KomunitasController', 
   'action' => 'create', 
));
