<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/UserDAO.php';

class LandingController extends Controller {

  private $userDAO;
  function __construct() {
    $this->userDAO = new UserDAO();
  }

  public function index() {
      $this->set('title', "Landing");

      if($_GET['page'] == 'login'){
        $this->set('title', "Login");

        if(!empty($_SESSION['user'])){
          header('Location: index.php?page=articles');
          exit();
        }
      }

      if (!empty($_POST)) {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
          $existing = $this->userDAO->selectByEmail($_POST['email']);
          if (!empty($existing)) {
            if (password_verify($_POST['password'], $existing['password'])) {
              $_SESSION['user'] = $existing;
              $_SESSION['info'] = 'Logged In';
              header('Location: index.php?page=articles');
              exit();
            } else {
              $_SESSION['error'] = 'Unknown username / password';
            }
          } else {
            $_SESSION['error'] = 'Unknown username / password';
          }
        } else {
          $_SESSION['error'] = 'Please fill in both your email and password.';
        }
        header('Location: index.php?page=login');
        exit();
      }
  }

  public function termsofservice() {
    $this->set('title', "Terms of Service");
  }

  public function whoweare() {
    $this->set('title', "Who we are");
  }


}
