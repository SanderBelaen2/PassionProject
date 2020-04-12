<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/HomeDAO.php';
require_once __DIR__ . '/../dao/UserDAO.php';
require_once __DIR__ . '/simple_html_dom.php';
require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

class HomeController extends Controller {

  private $homeDAO;
  private $userDAO;

  function __construct() {
    $this->homeDAO = new HomeDAO();
    $this->userDAO = new UserDAO();
  }

  public function index() {
    if (empty($_SESSION['user'])) {
      $_SESSION['error'] = 'You need to be logged in';
      header('Location: index.php');
      exit();
    }else {
      $amountMockups = $this->homeDAO->countMockups();
      if(!empty($amountMockups)){
        $this->set('amountMockups', $amountMockups);
      }
      $amountMockupViews = $this->homeDAO->countMockupViews();
      if(!empty($amountMockupViews)){
        $this->set('amountMockupViews', $amountMockupViews);
      }
      $amountUnapprovedMockups = $this->homeDAO->countUnapprovedMockups();
      if(!empty($amountUnapprovedMockups)){
        $this->set('amountUnapprovedMockups', $amountUnapprovedMockups);
      }
      $this->set('title', "Home");
  }
  }

  public function bugs() {
    if (empty($_SESSION['user'])) {
      $_SESSION['error'] = 'You need to be logged in';
      header('Location: index.php');
      exit();
    }else {

      $this->set('title', "bugs");
  }
  }

  public function blog() {
    if (empty($_SESSION['user'])) {
      $_SESSION['error'] = 'You need to be logged in';
      header('Location: index.php');
      exit();
    }else {

      $categories = $this->homeDAO->selectCategories();
      if(!empty($categories)){
        $this->set('categories', $categories);
      }

      if(!empty($_POST['action']) && !empty($_POST['category'])){
        if($_POST['action'] == 'getmockups'){

          $data = array(
            'date1' => date("Y-m-d 00:00:00", strtotime("-30 day")),
            'date2' => date('Y-m-d 23:59:59'),
            'category' => $_POST['category']
          );
          $mostPopulairMockups = $this->homeDAO->selectMockupsBlog($data);
          $this->set('mostPopulairMockups', $mostPopulairMockups);
        }
      }


      $this->set('title', "generate Blog");
  }
  }

  public function autopost() {
    if (empty($_SESSION['user'])) {
      $_SESSION['error'] = 'You need to be logged in';
      header('Location: index.php');
      exit();
    }else {

      $consumer_key = 'NIUaRGSBCS1qTyR6IyAff6H0A';
      $consumer_secret = 'DxFSP6sqxnnva915xIv5YrY4sYbM4zrnS0Yj7Cp8PanpzyRcBa';
      $access_token = '1231181031111352321-tAvYQctBmJSTCewVVxzUDvtU5x2n7l';
      $access_token_secret = 'petFb1moz0r7RMz3zbtkiDXQfmIaYrd7Nyl75hwuJX9CH';

      $connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
      $content = $connection->get("account/verify_credentials");

      $randomNextMockup = $this->getRandomMockup();
      if(!empty($randomNextMockup)){
        $this->set('randomNextMockup', $randomNextMockup);
        if(!empty($_POST)){
          if($_POST['action'] == 'tweet') {
            $new_status = $connection->post("statuses/update", ['status' => 'New FREE mockup: '.$randomNextMockup['name'].' - Download it here: https://malli.graphics/detail/'.$randomNextMockup['url'].' #mockup #free #design']);
            if(!empty($new_status)){
              $this->set('$new_status', $new_status);
              $data = array(
                'mockup_id' => $randomNextMockup['id'],
                'timestamp' => date('Y-m-d H:i:s'),
              );
              $this->homeDAO->addTweetedMockup($data);
            }
          }
        }
      }

      $this->set('title', "AutoPost");
  }
  }

  public function approve() {
    if (empty($_SESSION['user'])) {
      $_SESSION['error'] = 'You need to be logged in';
      header('Location: index.php');
      exit();
    }else {
      if(!empty($_POST['action']) && !empty($_POST['mockup_id'])){
        if($_POST['action'] == 'approve'){
          if($_POST['category'] !== '0'){
            $this->homeDAO->updateMockupCategory($_POST['mockup_id'], $_POST['category']);
          }
          if($_POST['platform'] !== 'Ps'){
            $this->homeDAO->updateMockupPlatform($_POST['mockup_id'], $_POST['platform']);
          }
          $data = $this->homeDAO->approveMockup($_POST['mockup_id']);
          // header('Content-Type: application/json');
          // echo json_encode($data);
          // exit();
        }elseif($_POST['action'] == 'delete'){
          unlink('../assets/img/mockupimages/'.substr($_POST['mockup_img'], 0, -4).'_sm.jpg');
          unlink('../assets/img/mockupimages/'.substr($_POST['mockup_img'], 0, -4).'_md.jpg');
          unlink('../assets/img/mockupimages/'.substr($_POST['mockup_img'], 0, -4).'_lg.jpg');
          unlink('../assets/img/mockupimages/'.substr($_POST['mockup_img'], 0, -4).'_xl.jpg');
          // unlink('./../../src/assets/img/mockupimages/'.substr($_POST['mockup_img'], 0, -4).'_sm.jpg');
          // unlink('./../../src/assets/img/mockupimages/'.substr($_POST['mockup_img'], 0, -4).'_md.jpg');
          // unlink('./../../src/assets/img/mockupimages/'.substr($_POST['mockup_img'], 0, -4).'_lg.jpg');
          // unlink('./../../src/assets/img/mockupimages/'.substr($_POST['mockup_img'], 0, -4).'_xl.jpg');
          $this->homeDAO->deleteMockup($_POST['mockup_id']);
        }
      }

      $categories = $this->homeDAO->selectCategories();
      if(!empty($categories)){
        $this->set('categories', $categories);
      }

      $mockups = $this->homeDAO->selectUnapprovedMockups();
      if(!empty($mockups)){
        $this->set('mockups', $mockups);
      }
      $this->set('title', "approve");
    }
  }

  public function scrape() {
    if (empty($_SESSION['user'])) {
      $_SESSION['error'] = 'You need to be logged in';
      header('Location: index.php');
      exit();
    }else {

      if(!empty($_POST)){
        if($_POST['action'] == 'scrape') {
          if($_POST['source'] == 'mockupworld') {
          $url = 'https://mockupworld.co/all-mockups/page/'.$_POST['page'];
          $html = file_get_html($url);
          if($html){
            $links = array();
            foreach($html->find('.content-link') as $a) {
             $links[] = $a->href;
            }
            $scrapedMockups = 0;

            foreach ($links as $link) {
              $detail_html = file_get_html($link);
              $mockup;
              if($detail_html){
                $mockup['name'] = $detail_html->find('h1',0)->innertext;
                  $existing = $this->homeDAO->selectMockupByName($mockup['name']);
                  if(empty($existing)){
                    $mockup['img_title'] = preg_replace('/[[:space:]]+/', '-', $mockup['name']);
                    $mockup['img_title'] = html_entity_decode($mockup['img_title']);
                    $mockup['img_title'] = str_replace(array('/','&',';','\''), '',$mockup['img_title']);
                    $tempURL = $detail_html->find('.mockup-meta',0)->find('a',0)->href;
                    $parse = parse_url($tempURL);
                    parse_str($parse['query'], $query);
                    if(!empty($query['xurl'])){
                    $mockup['link'] = $query['xurl'];
                    $mockup['category'] = $detail_html->find('.mockup-meta-title',0)->next_sibling()->innertext;
                    $mockup['platform'] = $detail_html->find('.mockup-meta-title',1)->next_sibling()->innertext;
                    $img = $detail_html->find('.image', 0)->src;

                    // $imgLoc = '../assets/img/mockupimages/'.$mockup['img_title'].'_sm.jpg';

                    $imgLoc = '../assets/img/mockupimages/'.$mockup['img_title'].'_md.jpg';
                    file_put_contents($imgLoc, file_get_contents($img));

                    $mockup['img'] = str_replace('536', '290', $img);
                    $url = $mockup['img'];
                    $imgLoc = '../assets/img/mockupimages/'.$mockup['img_title'].'_sm.jpg';
                    file_put_contents($imgLoc, file_get_contents($url));

                    $mockup['img'] = str_replace('536', '1072', $img);
                    $url = $mockup['img'];
                    $imgLoc = '../assets/img/mockupimages/'.$mockup['img_title'].'_lg.jpg';
                    file_put_contents($imgLoc, file_get_contents($url));

                    $mockup['img'] = str_replace('536', '1536', $img);
                    $url = $mockup['img'];
                    $imgLoc = '../assets/img/mockupimages/'.$mockup['img_title'].'_xl.jpg';
                    file_put_contents($imgLoc, file_get_contents($url));

                    $mockup['text'] = $detail_html->find('.mockup-description',0)->find('p',0)->innertext;
                    $mockup['text'] = strip_tags($mockup['text']);
                    $mockup['text'] = str_replace(' (full version)', '', $mockup['text']);

                    $mobile = ['iphone', 'apple watch', 'ipad'];
                    $paper = ['paper', 'books'];
                    $packaging = ['packaging'];
                    $fashion = ['fashion', 'apparel'];
                    $food = ['food', 'beverages'];
                    $branding = ['signs', 'billboards'];
                    $desktop = ['imac', 'macbook'];

                    if($this->str_contains_multiple_words(strtolower($mockup['category']), $mobile)){
                      $mockup['category'] = 1;
                    } elseif ($this->str_contains_multiple_words(strtolower($mockup['category']), $desktop)) {
                      $mockup['category'] = 2;
                    }elseif ($this->str_contains_multiple_words(strtolower($mockup['category']), $paper)) {
                      $mockup['category'] = 3;
                    }elseif ($this->str_contains_multiple_words(strtolower($mockup['category']), $packaging)) {
                      $mockup['category'] = 4;
                    } elseif ($this->str_contains_multiple_words(strtolower($mockup['category']), $food)) {
                      $mockup['category'] = 5;
                    }elseif ($this->str_contains_multiple_words(strtolower($mockup['category']), $branding)) {
                      $mockup['category'] = 6;
                    }elseif ($this->str_contains_multiple_words(strtolower($mockup['category']), $fashion)) {
                      $mockup['category'] = 7;
                    }else{
                      $mockup['category'] = 9;
                    }

                    if($mockup['platform'] == "PSD"){
                      $mockup['platform'] = 'Ps';
                    }elseif($mockup['platform'] == "Sketch"){
                      $mockup['platform'] = "Sk";
                    }else{
                      $mockup['platform'] = "Ps";
                    }

                    $data = array(
                      'name' => $mockup['name'],
                      'url' => $mockup['img_title'],
                      'category_id' => $mockup['category'],
                      'platform' => $mockup['platform'],
                      'img' => $mockup['img_title'].'.jpg',
                      'img_url' => $mockup['img'],
                      'text' => $mockup['text'],
                      'link' => $mockup['link'],
                      'approved' => 0
                    );
                    $insertedMockup = $this->homeDAO->addMockup($data);
                    $scrapedMockups++;
                    $random = rand(0,2000)/1000;
                    sleep($random);
                  }
                }
              }
            }
            $this->set('scrapedMockups', $scrapedMockups);
          }
        }elseif($_POST['source'] == 'cssauhthor'){
          $url = 'https://cssauthor.com/mockups/page/'.$_POST['page'];
          $html = file_get_html($url);
          if($html){
            $links = array();
            foreach($html->find('.img-holder') as $a) {
              $links[] = $a->href;
            }

            $scrapedMockups = 0;
            foreach ($links as $link) {
              $detail_html = file_get_html($link);
              $mockup;
              if($detail_html){
                $mockup['name'] = $detail_html->find('.post-title',0)->innertext;
                $mockup['name'] = strip_tags(htmlspecialchars($mockup['name']));
                $existing = $this->homeDAO->selectMockupByName($mockup['name']);
                if(empty($existing)){
                  $mockup['img_title'] = preg_replace('/[[:space:]]+/', '-', $mockup['name']);
                  $mockup['img_title'] = html_entity_decode($mockup['img_title']);
                  $mockup['img_title'] = str_replace(array('/','&',';','\''), '',$mockup['img_title']);
                  $mockup['link'] = $detail_html->find('.resource_code_btn',0)->href;
                  $mockup['platform'] = $detail_html->find('.post-meta-info',0)->first_child()->find('strong', 0)->innertext;
                  $mockup['text'] = $detail_html->find('.continue-reading-content',0)->find('p',1)->innertext;
                  $mockup['text'] = strip_tags($mockup['text']);
                  $mockup['img'] = $detail_html->find('.continue-reading-content',0)->find('img',3)->src;
                  $mockup['img'] = str_replace('//', 'https://',$mockup['img']);

                  $imgLoc = '../src/assets/img/mockupimages/'.$mockup['img_title'].'_xl.jpg';
                  file_put_contents($imgLoc, file_get_contents($mockup['img']));
                  $imgLoc = '../src/assets/img/mockupimages/'.$mockup['img_title'].'_lg.jpg';
                  file_put_contents($imgLoc, file_get_contents($mockup['img']));

                  $url = $mockup['img'];
                  $image_info = getimagesize($mockup['img']);
                  $height = round($image_info[1]/954*768);
                  $url = str_replace('.jpg', '-768x'.$height.'.jpg', $mockup['img']);
                  $imgLoc = '../src/assets/img/mockupimages/'.$mockup['img_title'].'_md.jpg';
                  file_put_contents($imgLoc, file_get_contents($url));

                  $url = $mockup['img'];
                  $height = round($image_info[1]/954*300);
                  $url = str_replace('.jpg', '-300x'.$height.'.jpg', $mockup['img']);
                  $imgLoc = '../src/assets/img/mockupimages/'.$mockup['img_title'].'_sm.jpg';
                  file_put_contents($imgLoc, file_get_contents($url));


                  $mobile = ['iphone', 'apple watch', 'ipad', 'phone', 'tablet', 'galaxy', 'smartphone'];
                  $paper = ['paper', 'book', 'card', 'flyer', 'frame', 'postcard', 'envelope', 'business', 'brochure'];
                  $packaging = ['packaging', 'box', 'package', 'jar'];
                  $fashion = ['fashion', 'apparel', 'shirt', 'clothing', 'tag', 'jeans'];
                  $food = ['food', 'beverages', 'cup', 'glass', 'bottle', 'can'];
                  $branding = ['signs', 'billboard', 'banner', 'poser', 'logo', 'brand', 'branding', 'identity'];
                  $desktop = ['imac', 'macbook', 'laptop'];

                  if($this->str_contains_multiple_words(strtolower($mockup['name']), $mobile)){
                    $mockup['category'] = 1;
                  } elseif ($this->str_contains_multiple_words(strtolower($mockup['name']), $desktop)) {
                    $mockup['category'] = 2;
                  }elseif ($this->str_contains_multiple_words(strtolower($mockup['name']), $paper)) {
                    $mockup['category'] = 3;
                  }elseif ($this->str_contains_multiple_words(strtolower($mockup['name']), $packaging)) {
                    $mockup['category'] = 4;
                  } elseif ($this->str_contains_multiple_words(strtolower($mockup['name']), $food)) {
                    $mockup['category'] = 5;
                  }elseif ($this->str_contains_multiple_words(strtolower($mockup['name']), $branding)) {
                    $mockup['category'] = 6;
                  }elseif ($this->str_contains_multiple_words(strtolower($mockup['name']), $fashion)) {
                    $mockup['category'] = 7;
                  }else{
                    $mockup['category'] = 9;
                  }

                  if($mockup['platform'] == "PSD"){
                    $mockup['platform'] = 'Ps';
                  }elseif($mockup['platform'] == "Sketch"){
                    $mockup['platform'] = "Sk";
                  }else{
                    $mockup['platform'] = "Ps";
                  }

                  $data = array(
                    'name' => $mockup['name'],
                    'url' => $mockup['img_title'],
                    'category_id' => $mockup['category'],
                    'platform' => $mockup['platform'],
                    'img' => $mockup['img_title'].'.jpg',
                    'img_url' => $mockup['img'],
                    'text' => $mockup['text'],
                    'link' => $mockup['link'],
                    'approved' => 0
                  );
                  $insertedMockup = $this->homeDAO->addMockup($data);
                  $scrapedMockups++;
                  $random = rand(0,2000)/1000;
                  sleep($random);
                }
              }
            }
          }
        }
        }
      }
      $this->set('title', "Scrape");
    }
  }

  private function str_contains_multiple_words($string, $array_of_words){
    $isTrue = false;
    foreach ($array_of_words as $word) {
      if(strpos($string, $word) !== false){
        $isTrue = true;
      }
    }
    if($isTrue === true){
      return true;
    }else{
      return false;
    }
  }

  private function getRandomMockup() {

    $allTweetedMockups = $this->homeDAO->selectTweetedMockups();

    $tempMockup = $this->homeDAO->selectRandomMockup();
    if(!empty($tempMockup)){
      if(in_array(strval($tempMockup['id']), $allTweetedMockups)) {
        return $this->getRandomMockup();
    }else{
      return $tempMockup;
    }
  }

  }

}
