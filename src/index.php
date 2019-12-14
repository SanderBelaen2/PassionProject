<?php
session_start();
ini_set('display_errors', true);
error_reporting(E_ALL);
date_default_timezone_set("Europe/Brussels");

$routes = array(
  'landing' => array(
    'controller' => 'Landing',
    'action' => 'index'
  ),
  'login' => array(
    'controller' => 'Landing',
    'action' => 'index'
  ),
  'logout' => array(
    'controller' => 'Users',
    'action' => 'logout'
  ),
  'register' => array(
    'controller' => 'Landing',
    'action' => 'index'
  ),
  'articles' => array(
    'controller' => 'Home',
    'action' => 'articles'
  ),
  'bundles' => array(
    'controller' => 'Home',
    'action' => 'bundles'
  ),
  'bundle' => array(
    'controller' => 'Home',
    'action' => 'bundle'
  ),
  'profile' => array(
    'controller' => 'Home',
    'action' => 'profile'
  ),
  'new' => array(
    'controller' => 'Home',
    'action' => 'new'
  ),
  'article-read' => array(
    'controller' => 'Home',
    'action' => 'article_read'
  ),
  'termsofservice' => array(
    'controller' => 'Landing',
    'action' => 'termsofservice'
  ),
  'whoweare' => array(
    'controller' => 'Landing',
    'action' => 'whoweare'
  )
);

if(empty($_GET['page'])) {
  $_GET['page'] = 'landing';
}
if(empty($routes[$_GET['page']])) {
  if(empty($_SESSION['user'])){
    header('Location: index.php');
    exit();
  }else {
    header('Location: index.php?page=landing');
    exit();
  }
}

$route = $routes[$_GET['page']];
$controllerName = $route['controller'] . 'Controller';

require_once __DIR__ . '/controller/' . $controllerName . ".php";

$controllerObj = new $controllerName();
$controllerObj->route = $route;
$controllerObj->filter();
$controllerObj->render();
