<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/HomeDAO.php';
require_once __DIR__ . '/simple_html_dom.php';

class HomeController extends Controller {

  private $homeDAO;
    function __construct() {
    $this->homeDAO = new HomeDAO();
  }

  public function articles() {
    $this->checkauthentication();
    $this->set('title', "Articles");
    }

  public function bundles() {
    $this->checkauthentication();
    $this->set('title', "bundles");
  }

  public function profile() {
    $this->checkauthentication();
    $this->set('title', "profile");
  }

  public function new() {
    $this->checkauthentication();

    if(!empty($_POST['newArticleLink'])){
      $html = file_get_html($_POST['newArticleLink']);
      $site = [];
      $site['h1'] = $html->find('h1',0)->innertext;
      $site['image']  = $html->find('img', 0)->src@ -ç;
      $this->set('site', $site);

      $html->clear();
      unset($html);
    }


    $this->set('title', "New Article");
  }

  private function checkauthentication(){
    if (empty($_SESSION['user'])) {
      $_SESSION['error'] = 'You need to be logged in';
      header('Location: index.php');
      exit();
    }
  }


}
