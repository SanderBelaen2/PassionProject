<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/UserDAO.php';
require_once __DIR__ . '/../dao/HomeDAO.php';

class HomeController extends Controller {

  private $userDAO;
  function __construct() {
    $this->userDAO = new UserDAO();
    $this->homeDAO = new HomeDAO();
  }

  public function index() {
    $this->cookieagreement();
    $this->globalCategories();
    if(empty($_GET['pagenr'])){
      $pagenr = 1;
    }else{
      $pagenr = $_GET['pagenr'];
    }

    if(!empty($_POST) && $_POST['action'] == 'delete_search'){
      header('location: /category/'.$_GET['category']).'/1';
      exit();
    }

    if(($_GET['page'] == 'category')){
      if(empty($_GET['s'])){
      if($_GET['category'] == 'all' || empty($_GET['category'])){
        $mockups = $this->homeDAO->selectMockups($pagenr);
        $amountofresults = $this->homeDAO->countMockups();
      }elseif($_GET['category'] !== 'all'){
        $mockups = $this->homeDAO->selectMockupsByCategory($_GET['category'], $pagenr);
        $amountofresults = $this->homeDAO->countMockupsByCategory($_GET['category']);
      }
    }else{
      if($_GET['category'] == 'all' || empty($_GET['category'])){
        $mockups = $this->homeDAO->selectMockupsWithSearch($pagenr, $_GET['s']);
        $amountofresults = $this->homeDAO->countMockupsWithSearch($_GET['s']);
      }elseif($_GET['category'] !== 'all'){
        $mockups = $this->homeDAO->selectMockupsByCategoryWithSearch($_GET['category'], $pagenr, $_GET['s']);
        $amountofresults = $this->homeDAO->countMockupsByCategoryWithSearch($_GET['category'], $_GET['s']);
      }
    }
    if(empty($resultpages)){$resultpages = 0;};
    $resultpages = ceil($amountofresults['amount']/15);
    if(!empty($mockups)){
      $this->set('mockups', $mockups);
    }
    $this->set('resultpages', $resultpages);
    }
    $date1 = date('Y-m-d 0:0:0');
    $date2 = date('Y-m-d 23:59:59');
    $mostPopulairMockup = $this->homeDAO->populairMockup($date1, $date2);
    if(!empty($mostPopulairMockup)){
      $this->set('mostPopulairMockup', $mostPopulairMockup);
    }
    $suggestedBlogs = $this->homeDAO->selectLastestBlogposts();
    if(!empty($suggestedBlogs)){
      $this->set('suggestedBlogs', $suggestedBlogs);
    }
    $this->set('title', "FREE High Quality PSD Mockups to Download");
    $this->set('description', "An amazing collection of free and royalty free, photo realistic mockups: Start using them now for your projects, design project showcases, portfolios or presentations. Even for commercial use!");
    $this->set('canonical', "https://malli.graphics/".$_GET['page']."/".$_GET['category'].$_GET['pagenr']);
  }


  public function blog() {
    $this->cookieagreement();
    $this->globalCategories();
    $blogposts = $this->homeDAO->selectAllBlogposts();
    if(!empty($blogposts)){
      $this->set('blogposts', $blogposts);
    }
    $this->set('title', "Blog");
    $this->cookieagreement();
    $this->set('description', "The Malli Graphics Blog consists of interesting articles our products, as well as what's going on in the design sector. Handy tips and tricks for getting the most out of your designs.");
    $this->set('canonical', "https://malli.graphics/blog");
  }

  public function blogpost() {
    $this->cookieagreement();
    $this->globalCategories();
    if (empty($_GET['id'])) {
      $_SESSION['error'] = 'This blogpost does not exist';
      header('Location: /blog');
      exit();
    } else {
      $existing = $this->homeDAO->selectBlogpostById($_GET['id']);
       if (empty($existing)) {
       $_SESSION['error'] = 'This blogpost does not exist';
      header('Location: /blog');
      exit();
    }else {
      $this->set('blogpost', $existing);
      $suggestedBlogs = $this->homeDAO->selectLastestBlogposts();
      if(!empty($suggestedBlogs)){
        $this->set('suggestedBlogs', $suggestedBlogs);
      }
    }
    $this->set('title', $existing['title']);
    $this->set('description', substr(strip_tags($existing['text']),0,150).'...');
    $this->set('canonical', "https://malli.graphics/blogpost/".$existing['id']);
  }
}

  public function contact() {
    $this->cookieagreement();
    $this->globalCategories();
    $this->set('description', "Do you have a question? Don't mind to ask it here! We'd love to help you further!");
    $this->set('title', "Don't mind to contact us!");
    $this->set('canonical', "https://malli.graphics/contact");
  }

  public function termsandconditions() {
    $this->cookieagreement();
    $this->globalCategories();
    $this->set('title', "Terms & Conditions");
    $this->set('description', "These terms and conditions outline the rules and regulations for the use of The Mockup Collection's Website, located at mockupcollection.com. The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: \"Client\", \"You\" and \"Your\" refers to you, the person log on this website and compliant to the Company’s terms and conditions. \"The Company\", \"Ourselves\", \"We\", \"Our\" and \"Us\", refers to our Company. \"Party\", \"Parties\", or \"Us\", refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.");
    $this->set('canonical', "https://malli.graphics/termsandconditions");
  }

  public function privacypolicy() {
    $this->cookieagreement();
    $this->globalCategories();
    $this->set('title', "Privacy Policy");
    $this->set('description', "At mockup collection, accessible from mockupcollection.com, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by mockup collection and how we use it. If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.");
    $this->set('canonical', "https://malli.graphics/privacypolicy");
  }

  public function faq() {
    $this->cookieagreement();
    $this->globalCategories();
    $this->set('title', "Frequently Asked Questions and their anwsers.");
    $this->set('description', "Do you have a question? Find the anwser here or ask it directly! | Frequently Asked Questions and their anwsers.");
    $this->set('canonical', "https://malli.graphics/faq");
  }

  public function detail() {
    $this->cookieagreement();
    $this->globalCategories();
    if(!empty($_GET['url'])){

      $mockup = $this->homeDAO->selectMockupByUrl($_GET['url']);
      if(!empty($mockup)){

        if(!in_array(strval($mockup['id']), $_SESSION['visited_mockups'])) {
          $data = array(
            'mockup_id' => $mockup['id'],
            'timestamp' => date('Y-m-d H:i:s'),
          );
          $insertedMockupView = $this->homeDAO->addMockupView($data);
          array_push($_SESSION['visited_mockups'], strval($mockup['id']));
        }

        $_SESSION['attempts'] = 0;
        $randomNextMockup = $this->getRandomMockup();
        if(!empty($randomNextMockup)){
          $this->set('randomNextMockup', $randomNextMockup);
        }

        $mockupSuggestions = $this->homeDAO->selectMockupSuggestions($mockup['id'],$mockup['category_id']);
        if(!empty($mockupSuggestions)){
          $this->set('mockupSuggestions', $mockupSuggestions);
        }

        $this->set('mockup', $mockup);
        $this->set('title', 'Mockup '.str_replace('mockup', '', $mockup['name']).' FREE download');
        $this->set('description', substr(strip_tags($mockup['text']),0,150).'...');
        $this->set('canonical', "https://malli.graphics/detail/".$mockup['url']);
      }else{
        $_SESSION['info'] = "We did not find this mockup.";
        header('location: /category/'.$_GET['category']).'/1';
        exit();
      }
    }else{
      header('location: /category/'.$_GET['category']).'/1';
      exit();
    }
  }

  private function globalCategories(){
    $categories = $this->homeDAO->selectCategories();
    if(!empty($categories)){
      $this->set('categories', $categories);
    }
  }

  private function cookieagreement(){
    $ip = $this->get_client_ip_env();
    $cookie = $this->userDAO->selectVisitorByIp($ip);
    if(!empty($cookie)){
      $this->set('cookie', $cookie);

      $date_past = date('Y-m-d H:i:s',time() - 15 * 60);

      $data = array(
        'now' => date('Y-m-d H:i:s'),
        'past' => $date_past,
        'ip' => $this->get_client_ip_env()
      );

      $justVisited = $this->userDAO->justVisited($data);

      if(empty($justVisited)){
        $data = array(
          'cookie' => $cookie['cookie'],
          'visits' => $cookie['visits']+1
        );
        $updatedVisit = $this->userDAO->updateVisits($data);
      }

      if(!isset($_COOKIE['pdLiw5pCSAeSnm9bUgSl'])){
        setcookie('pdLiw5pCSAeSnm9bUgSl', $cookie['cookie'], time() + 31556926, "/");
      }
    }
    if (!empty($_POST['action'])) {
      if($_POST['action'] == "cookieagree"){
        $cookie_name = "pdLiw5pCSAeSnm9bUgSl";
        $cookie_value = serialize(bin2hex(random_bytes(8)));
        setcookie($cookie_name, $cookie_value, time() + 31556926, "/"); // 86400 = 1 day
        $data = array(
          'ip' => $this->get_client_ip_env(),
          'timestamp' => date('Y-m-d H:i:s'),
          'cookie' => $cookie_value
        );
        $insertedVisit = $this->homeDAO->addVisit($data);
      }
    }
  }

  private function getRandomMockup() {
    $_SESSION['attempts']++;
    $tempMockup = $this->homeDAO->selectRandomMockup();
    if($_SESSION['attempts']<8){
      if(!empty($tempMockup)){
        if(in_array(strval($tempMockup['id']), $_SESSION['visited_mockups'])) {
          return $this->getRandomMockup();
      }else{
        return $tempMockup;
      }
    }
    }else{
      return $tempMockup;
    }
  }

  private function get_client_ip_env() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';

    return $ipaddress;
}


}
