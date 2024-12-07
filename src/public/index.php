<?php
// require core elements
require_once('../core/config.php');
require_once('../core/db.php');
require_once('../core/router.php');

$router = new Router();

// load controllers
require_once('../app/controllers/articles.php');
require_once('../app/controllers/infos.php');

$articlesController = new ArticlesController();
$infosController = new InfosController();

// load routes
require_once('../core/config/routes.php');

// dispatch request
$router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
?>