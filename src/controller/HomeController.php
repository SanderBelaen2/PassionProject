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
    $bundles = $this->homeDAO->selectBundles($_SESSION['user']['id']);
    if(!empty($bundles)){
      $this->set('bundles', $bundles);
    }
    $articles = $this->homeDAO->selectArticlesByUserId($_SESSION['user']['id']);
    $new_articles = array();
    $proc_articles = array();
    $read_articles = array();
    if(!empty($articles)){
      foreach ($articles as $article) {
        if($article['proc'] == 0){
          array_push($new_articles, $article);
        }elseif($article['proc'] == 100){
          array_push($read_articles, $article);
        }else{
          array_push($proc_articles, $article);
        }
      }
      $this->set('new_articles', $new_articles);
      $this->set('proc_articles', $proc_articles);
      $this->set('read_articles', $read_articles);
    }
    $this->set('title', "Articles");
    }

  public function bundles() {
    $this->checkauthentication();

    if(!empty($_POST['action'])){
      if($_POST['action'] == 'newBundle'){

        $sports = ['sport', 'sports', 'tennis', 'soccer', 'football', 'basket', 'ball', 'bike'];
        $food = ['food', 'foodie', 'recipe', 'recipes', 'cooking', 'cook'];
        $travel = ['travel', 'plane', 'destination', 'roadtrip', 'trip', 'citytrip', 'traveling'];
        $movie = ['movie', 'movies', 'actor', 'actors', 'actrice', 'hollywood', 'film'];
        $art = ['art', 'arts', 'painting', 'sculpture', 'paint', 'artist'];
        $tech = ['tech', 'robot', 'computer', 'smartphone', 'tablet', 'cloud', 'internet'];
        $car = ['car', 'auto', 'ferrari', 'porsche'];
        $animal = ['animal', 'cat', 'dog', 'horse', 'fish', 'bunny'];
        $news = ['news', 'new', 'article', 'headlines', 'fish', 'bunny'];
        $business = ['business', 'money', 'finance', 'stock', 'fish', 'bunny'];

        if($this->str_contains_multiple_words(strtolower( $_POST['bundleName']), $sports)){
          $thumbnail = 'sportthumbnail.png';
        } elseif ($this->str_contains_multiple_words(strtolower( $_POST['bundleName']), $food)) {
          $thumbnail = 'foodthumbnail.png';
        }elseif ($this->str_contains_multiple_words(strtolower( $_POST['bundleName']), $travel)) {
          $thumbnail = 'travelthumbnail.png';
        }elseif ($this->str_contains_multiple_words(strtolower( $_POST['bundleName']), $movie)) {
          $thumbnail = 'moviethumbnail.png';
        }elseif ($this->str_contains_multiple_words(strtolower( $_POST['bundleName']), $art)) {
          $thumbnail = 'artthumbnail.png';
        }elseif ($this->str_contains_multiple_words(strtolower( $_POST['bundleName']), $car)) {
          $thumbnail = 'carthumbnail.png';
        }elseif ($this->str_contains_multiple_words(strtolower( $_POST['bundleName']), $tech)) {
          $thumbnail = 'techthumbnail.png';
        }elseif ($this->str_contains_multiple_words(strtolower( $_POST['bundleName']), $animal)) {
          $thumbnail = 'animalthumbnail.png';
        }elseif ($this->str_contains_multiple_words(strtolower( $_POST['bundleName']), $news)) {
          $thumbnail = 'newsthumbnail.png';
        }elseif ($this->str_contains_multiple_words(strtolower( $_POST['bundleName']), $business)) {
          $thumbnail = 'businessthumbnail.png';
        }else{
          $thumbnail = 'bundlethumbnail.png';
        }

      $data = array(
        'user_id' => $_SESSION['user']['id'],
        'name' => $_POST['bundleName'],
        'description' => $_POST['bundleDescription'],
        'thumbnail' => $thumbnail
      );
      $insertedBundle = $this->homeDAO->addBundle($data);

      header('Location: index.php?page=bundles');
      exit();
    }
    }

    $bundles = $this->homeDAO->selectBundlesByUserId($_SESSION['user']['id']);
    if(!empty($bundles)){
      $newBundles = array();
      foreach ($bundles as $bundle) {
        if(empty($newBundles[$bundle['name']])) {
          $newBundles[$bundle['name']] = $bundle;
        }
      }
      $this->set('bundles', $newBundles);
    }
    $this->set('title', "Bundles");
  }

  public function bundle() {
    $this->checkauthentication();
    if(!empty($_GET['id'])){
      $bundle = $this->homeDAO->selectBundleById($_GET['id']);
      if(!empty($bundle)){
        $data = array(
          'user_id' => $_SESSION['user']['id'],
          'bundle_id' => $_GET['id'],
        );
        $articles = $this->homeDAO->selectArticlesByBundleId($data);
        if(!empty($articles)){
          $this->set('articles', $articles);
        }
        $this->set('bundle', $bundle);
      }else{
        $_SESSION['error'] = 'This bundle does not exist...';
        header('Location: index.php?page=bundles');
        exit();
      }
    }

    if(!empty($_POST['action'])){
      if($_POST['action'] == 'deleteBundle'){
        $this->homeDAO->deleteBundle($_GET['id']);
        $_SESSION['info'] = "Bundle deleted.";
        header('Location: index.php?page=bundles');
        exit();
      }
    }
    $this->set('title', "Bundles");
  }

  public function profile() {
    $this->checkauthentication();
    $this->set('title', "profile");
  }

  public function new() {
    $this->checkauthentication();

    $bundles = $this->homeDAO->selectBundles($_SESSION['user']['id']);
    if(!empty($bundles)){
      $this->set('bundles', $bundles);
    }


    $site = [];

    if(!empty($_POST['action'])){
    if(!empty($_POST['newArticleLink'])){
      $url = $_POST['newArticleLink'];

      $parse = parse_url($url);
      $site['domain'] = $parse['host'];
      if(empty($site['domain'])){
        $_SESSION['error'] = 'That doesn\'t look like a real URL...';
        header('Location: index.php?page=new');
        exit();
      }

      $site['url'] = $url;

      $html = file_get_html($url);
      if($html){

      //h1
      $site['h1'] = $html->find('h1',0);
      if(!empty($site['h1'])) {
        $site['h1'] = $site['h1']->innertext;
      }else{
        $site['h1'] = $html->find('title',0)->innertext;
      ;};

      if(strpos($site['h1'], 'cookies') !== false){
      $_SESSION['error'] = 'Bohoo... \''.$site['domain'].'\' blocks scaping bots like Artic.le';
        header('Location: index.php?page=articles');
        exit();
      } else{

      $images = array();
        foreach($html->find('img') as $img) {
          if(sizeof($images) < 6 && strpos($img, '.svg') == false){
            $images[] = $img->src;
          }
        }
      $biggestImage = '';
      $biggestImageSize = 0;
      foreach ($images as $image) {
        if(substr( $image, 0, 4 ) !== "http"){
          $image = 'http://'.$site['domain'].'/'.$image;
        }
        list($width, $height) = getimagesize($image);
        if(($width * $height) > $biggestImageSize){
          $biggestImageSize = ($width * $height);
          $biggestImage = $image;
        }
      }

      $site['image']  = $biggestImage;
      if(empty($site['image'])) {
        $site['image'] = ''
      ;};



      //body

      $longarticlesps = array();
      $site['body'] = '';
      $site['bodyToRead'] = '';
      foreach($html->find('p') as $p) {
        if(strlen($p->innertext)>40){
          $longarticlesps[] = $p->innertext;
        }
       }

       foreach ($longarticlesps as $p) {
        strip_tags($p, '<a>');
        $site['body'] = $site['body'].' <p>'.$p.'</p>';
       }

       foreach ($longarticlesps as $p) {
        strip_tags($p);
        $site['bodyToRead'] = $site['bodyToRead'].' '.$p;
       }

       if(!empty($_POST['bundle'])){
        $this->set('bundle_id', $_POST['bundle']);
       }


      $this->set('site', $site);
      $this->set('longarticlesps', $longarticlesps);
      $html->clear();
      unset($html);
    }
  }

  }elseif($_POST['action'] == 'submitArticle'){

    $data = array(
      'url' => $_POST['url'],
      'user_id' => $_SESSION['user']['id'],
      'title' => $_POST['title'],
      'img' => $_POST['image'],
      'domain' => $_POST['domain'],
      'text' => $_POST['body'],
      'textToRead'=> $_POST['bodyToRead'],
      'bundle_id' => $_POST['bundle_id'],
    );

      // $data = array(
      //   'url' => $site['url'],
      //   'user_id' => $_SESSION['user']['id'],
      //   'title' => $site['h1'],
      //   'img' => $site['image'],
      //   'domain' => $site['domain'],
      //   'text' => $_POST['body'],
      //   'textToRead'=> $_POST['bodyToRead'],
      //   'bundle_id' => 25
      // );
      $insertedArticle = $this->homeDAO->addArticle($data);

      header('Location: index.php?page=articles');
      exit();


    }else{
    $_SESSION['error'] = 'Bohoo... this site blocks scaping bots like Artic.le';
    header('Location: index.php?page=articles');
    exit();
  }
}



    $this->set('title', "New Article");
  }

  public function article_read() {
    $this->checkauthentication();
    if(!empty($_GET['id'])){
      $article = $this->homeDAO->selectArticleById($_GET['id']);
      if(!empty($article)){
        $this->set('article', $article);
      }else{
        $_SESSION['error'] = 'This article does not exist...';
        header('Location: index.php?page=articles');
        exit();
      }
    }

    if(!empty($_POST['action'])){
      if($_POST['action'] == 'readProc'){
        $data = array(
          'article_id' => $article['id'],
          'proc' => $_POST['value']
        );
        $insertedProc = $this->homeDAO->updateProc($data);
      }
      if($_POST['action'] == 'markAsNew'){
        $data = array(
          'article_id' => $article['id'],
          'proc' => 0
        );
        $insertedProc = $this->homeDAO->updateProc($data);
        $_SESSION['info'] = "Marked as 'new'.";
        header('Location: index.php?page=articles');
        exit();
      }
      if($_POST['action'] == 'markAsRead'){
        $data = array(
          'article_id' => $article['id'],
          'proc' => 100
        );
        $insertedProc = $this->homeDAO->updateProc($data);
        $_SESSION['info'] = "Marked as 'read'.";
        header('Location: index.php?page=articles');
        exit();
      }
      if($_POST['action'] == 'deleteArticle'){
        $this->homeDAO->deleteArticle($_GET['id']);
        $_SESSION['info'] = "Article deleted.";
        header('Location: index.php?page=articles');
        exit();
      }

    }

    $this->set('title', $article['title']);
  }

  private function checkauthentication(){
    if (empty($_SESSION['user'])) {
      $_SESSION['error'] = 'You need to be logged in';
      header('Location: index.php');
      exit();
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
}
