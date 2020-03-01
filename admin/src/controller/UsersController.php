<?php

require_once __DIR__ . '/Controller.php';

require_once __DIR__ . '/../dao/UserDAO.php';

class UsersController extends Controller {

  private $userDAO;

  function __construct() {
    $this->userDAO = new UserDAO();
  }

  public function index() {
  }

  public function register() {
    $this->set('title', "Register");

    if (!empty($_POST)) {
      $this->handleRegister();
    }
  }

  public function login() {
    $this->set('title', "Login");

    if(empty($_SESSION["user"])){
    if (!empty($_POST)) {
      if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $existing = $this->userDAO->selectByEmail($_POST['email']);
        if (!empty($existing)) {
          if (password_verify($_POST['password'], $existing['password'])) {
            $_SESSION['user'] = $existing;
            $_SESSION['info'] = 'Logged In';
            header('Location: index.php?page=home');
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
  }else{
    header('Location: index.php?page=home');
    exit();
  }
  }

  public function logout() {
    if (!empty($_SESSION['user'])) {
      unset($_SESSION['user']);
    }
    $_SESSION['info'] = 'Logged Out';
    header('Location: /');
    exit();
  }

  public function resetpassword(){
    if(!empty($_GET['id'])){
      $existing = $this->userDAO->selectByPasswordHash($_GET['id']);
      if(!empty($existing)){
        $user = $this->userDAO->selectById($existing['user_id']);
        if(!empty($user)){
          $this->set('firstname', $user['firstname']);
          if(!empty($_POST['action'])){
            if($_POST['action'] == 'resetpassword'){
              if (empty($_POST['password'])) {
                $errors['password'] = 'Please enter a password';
              }
              if ($_POST['confirm_password'] != $_POST['password']) {
                $errors['confirm_password'] = 'Passwords do not match';
              }
              if(empty($errors)){
                $data = array(
                  'user_id' => $user['id'],
                  'password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
                );
                $updatedPassword = $this->userDAO->updatePassword($data);
                if(!empty($updatedPassword)){
                  $_SESSION['info'] = 'Password Updated!';
                  $_SESSION['user'] = $user;
                  $this->userDAO->deleteForgotPasswordHash($_GET['id']);
                  $this->userDAO->insertLogin($user['id']);
                  header('Location: home');
                  exit();
                }
              }else{
                $this->set('errors', $errors);
              }
            }
          }
        }
      }else{
        $_SESSION['error'] = "This email is not valid anymore.";
      }
    }else{
      header('Location: /');
      exit();
    }

    $this->set('title', "Reset Password");
  }

  private function handleRegister() {
    $errors = array();
    if (empty($_POST['email'])) {
      $errors['email'] = 'Please enter your email';
    } else {
      $existing = $this->userDAO->selectByEmail($_POST['email']);
      if (!empty($existing)) {
        $errors['email'] = 'Email address is already in use';
      }
    }
    if (empty($_POST['password'])) {
      $errors['password'] = 'Please enter a password';
    }
    if ($_POST['confirm_password'] != $_POST['password']) {
      $errors['confirm_password'] = 'Passwords do not match';
    }
    if (empty($errors)) {
      $customURL = $this->generate_string();

      $data = array(
        'email' => $_POST['email'],
        'password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
        'image' => 'assets/img/profilepics/mini.png',
        'username' => '',
        'firstname' => '',
        'bio' => '',
        'username' => '',
        'url' => $customURL,
        'badge' => 2,
        'color' => '#57c0ff'
      );
      $inserteduser = $this->userDAO->insert($data);
      if (!empty($inserteduser)) {
        $_SESSION['info'] = 'Registration Successful!';
        $_SESSION['user'] = $inserteduser;
        $this->userDAO->insertRegister($inserteduser['id']);
        $data = array(
          'user_id' => $inserteduser['id'],
          'badge_id' => 2
        );
        $this->userDAO->insertBadge($data);
        header('Location: home');
        exit();
      } else {
        print_r($this->userDAO->validate($data));
      }
    }
    if (empty($errors)) {
      $inserteduser = $this->userDAO->insert(array(
        'email' => $_POST['email'],
        'password' => password_hash($_POST['password'], PASSWORD_BCRYPT)
      ));
      if (!empty($inserteduser)) {
        $_SESSION['info'] = 'Registration Successful!';
        header('Location: index.php');
        exit();
      }
    }
    $_SESSION['error'] = 'Registration Failed!';
    $this->set('errors', $errors);
  }

    private function generate_string($length = 10) {
      $random_string = substr(str_shuffle(str_repeat($x='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);

      $existingURL = $this->userDAO->selectByURL($random_string);
      if (!empty($existingURL)) {
        $this->generate_string();
      }else{
        return $random_string;
      }

  }

}
