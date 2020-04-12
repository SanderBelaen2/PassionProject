<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/HomeDAO.php';

class SwipeController extends Controller {

  private $userDAO;
  function __construct() {
    $this->homeDAO = new HomeDAO();
  }

  public function swipe() {
    $this->set('title', "Tinder for mockups!");
    $this->set('description', "An amazing collection of free and royalty free, photo realistic mockups: Start using them now for your projects, design project showcases, portfolios or presentations. Even for commercial use!");
    $this->set('canonical', "https://malli.graphics/swipe");
  }
}
