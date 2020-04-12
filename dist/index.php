<?php
session_start();
if(empty($_SESSION['visited_mockups'])){
  $_SESSION['visited_mockups'] = array();
}
ini_set('display_errors', true);
error_reporting(E_ALL);
date_default_timezone_set("Europe/Brussels");

$routes = array(
  'index' => array(
    'controller' => 'Home',
    'action' => 'index'
  ),
  'category' => array(
    'controller' => 'Home',
    'action' => 'overview'
  ),
  'blog' => array(
    'controller' => 'Home',
    'action' => 'blog'
  ),
  'blogpost' => array(
    'controller' => 'Home',
    'action' => 'blogpost'
  ),
  'login' => array(
    'controller' => 'Users',
    'action' => 'login'
  ),
  'logout' => array(
    'controller' => 'Users',
    'action' => 'logout'
  ),
  'register' => array(
    'controller' => 'Users',
    'action' => 'register'
  ),
  'detail' => array(
    'controller' => 'Home',
    'action' => 'detail'
  ),
  'contact' => array(
    'controller' => 'Home',
    'action' => 'contact'
  ),
  'faq' => array(
    'controller' => 'Home',
    'action' => 'faq'
  ),
  'privacypolicy' => array(
    'controller' => 'Home',
    'action' => 'privacypolicy'
  ),
  'termsandconditions' => array(
    'controller' => 'Home',
    'action' => 'termsandconditions'
  ),
  'copyright' => array(
    'controller' => 'Home',
    'action' => 'copyright'
  ),
  'submit' => array(
    'controller' => 'Home',
    'action' => 'submit'
  ),
  'swipe' => array(
    'controller' => 'Swipe',
    'action' => 'swipe'
  )
);


if(empty($_GET['page'])) {
  $_GET['page'] = 'index';
}else{
  if(empty($routes[$_GET['page']])) {
    $_GET['page'] = 'index';
  }
}

if($_GET['page'] == 'category' && empty($_GET['category'])) {
  header('Location: all/1');
  exit();

}

$route = $routes[$_GET['page']];
$controllerName = $route['controller'] . 'Controller';

require_once __DIR__ . '/controller/' . $controllerName . ".php";

$controllerObj = new $controllerName();
$controllerObj->route = $route;
$controllerObj->filter();
$controllerObj->render();
