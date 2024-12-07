<?php 
// Articles
$router->addRoute('GET', '/', [$articlesController, 'showAll']);
$router->addRoute('GET', '/articles/{id}', [$articlesController, 'show']);

// Infos
$router->addRoute('GET', '/infos', [$infosController, 'showAll']);

// TODO Admin
?>