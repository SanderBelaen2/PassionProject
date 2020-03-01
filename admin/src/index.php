<?php
session_start();
ini_set('display_errors', true);
error_reporting(E_ALL);
date_default_timezone_set("Europe/Brussels");

$routes = array(
  'home' => array(
    'controller' => 'Home',
    'action' => 'index'
  ),
  'ads' => array(
    'controller' => 'Home',
    'action' => 'ads'
  ),
  'scrape' => array(
    'controller' => 'Home',
    'action' => 'scrape'
  ),
  'approve' => array(
    'controller' => 'Home',
    'action' => 'approve'
  ),
  'autopost' => array(
    'controller' => 'Home',
    'action' => 'autopost'
  ),
  'bugs' => array(
    'controller' => 'Home',
    'action' => 'bugs'
  ),
  'login' => array(
    'controller' => 'Users',
    'action' => 'login'
  ),
  'logout' => array(
    'controller' => 'Users',
    'action' => 'logout'
  )
);

if(empty($_GET['page'])) {
  $_GET['page'] = 'login';
}
if(empty($routes[$_GET['page']])) {
  if(empty($_SESSION['user'])){
    header('Location: index.php?page=login');
    exit();
  }else{
    header('Location: index.php?page=home');
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
