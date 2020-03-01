<?php

require_once( __DIR__ . '/DAO.php');

class HomeDAO extends DAO {

  public function addVisit($data){
    $sql = "INSERT INTO `visitors` (`ip`, `timestamp`, `cookie`) VALUES (:ip, :timestamp, :cookie)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':ip', $data['ip']);
    $stmt->bindValue(':timestamp', $data['timestamp']);
    $stmt->bindValue(':cookie', $data['cookie']);
    $stmt->execute();
  }

  public function selectMockups($pagenumber){
    $sql = "SELECT `mockups`.`id`, `mockups`.`img`, `mockups`.`url`, `mockups`.`img_url`, `mockups`.`name`, `mockups`.`platform`, `categories`.`category` FROM `mockups` INNER JOIN `categories` ON `mockups`.`category_id` = `categories`.`id` WHERE `mockups`.`approved` = 1 ORDER BY `mockups`.`id` DESC LIMIT :pagenumber, 15";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':pagenumber', ($pagenumber-1)*15);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectMockupByUrl($url){
    $sql = "SELECT `mockups`.`id`, `mockups`.`url`, `mockups`.`img_url`, `mockups`.`name`, `mockups`.`link`, `mockups`.`text`,`mockups`.`platform`,`mockups`.`category_id`, `categories`.`category` FROM `mockups` INNER JOIN `categories` ON `mockups`.`category_id` = `categories`.`id` WHERE `mockups`.`url` = :url ORDER BY `mockups`.`id` DESC";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':url', $url);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  // public function selectMockupById($id){
  //   $sql = "SELECT `mockups`.`id`, `mockups`.`img`, `mockups`.`img_url`, `mockups`.`name`, `mockups`.`link`, `mockups`.`text`,`mockups`.`platform`, `categories`.`category` FROM `mockups` INNER JOIN `categories` ON `mockups`.`category_id` = `categories`.`id` WHERE `mockups`.`id` = :id ORDER BY `mockups`.`id` DESC";
  //   $stmt = $this->pdo->prepare($sql);
  //   $stmt->bindValue(':id', $id);
  //   $stmt->execute();
  //   return $stmt->fetch(PDO::FETCH_ASSOC);
  // }

  public function populairMockup($date1, $date2){
    $sql = "SELECT mockup_id
    FROM `mockup_views`
    WHERE `timestamp` BETWEEN :date1 AND :date2
    GROUP BY mockup_id
    ORDER BY COUNT(*)
    DESC
    LIMIT 1";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':date1', $date1);
    $stmt->bindValue(':date2', $date2);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectMockupsWithSearch($pagenumber, $s){
    $sql = "SELECT `mockups`.`id`, `mockups`.`img`, `mockups`.`url`, `mockups`.`name`, `mockups`.`platform`, `categories`.`category` FROM `mockups` INNER JOIN `categories` ON `mockups`.`category_id` = `categories`.`id` WHERE `name` LIKE :s AND `mockups`.`approved` = 1 ORDER BY `mockups`.`id` DESC LIMIT :pagenumber, 15";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':pagenumber', ($pagenumber-1)*15);
    $stmt->bindValue(':s', '%'.$s.'%');
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectMockupsByCategory($category, $pagenumber){
    $sql = "SELECT `mockups`.`id`, `mockups`.`img`, `mockups`.`url`, `mockups`.`name`, `mockups`.`platform`, `categories`.`category` FROM `mockups` INNER JOIN `categories` ON `mockups`.`category_id` = `categories`.`id` WHERE `categories`.`short` = :category AND `mockups`.`approved` = 1 ORDER BY `mockups`.`id` DESC LIMIT :pagenumber, 15";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':category', $category);
    $stmt->bindValue(':pagenumber', ($pagenumber-1)*15);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectMockupsByCategoryWithSearch($category, $pagenumber, $s){
    $sql = "SELECT `mockups`.`id`, `mockups`.`img`, `mockups`.`url`, `mockups`.`name`, `mockups`.`platform`, `categories`.`category` FROM `mockups` INNER JOIN `categories` ON `mockups`.`category_id` = `categories`.`id` WHERE `categories`.`short` = :category AND `name` LIKE :s AND `mockups`.`approved` = 1 ORDER BY `mockups`.`id` DESC LIMIT :pagenumber, 15";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':category', $category);
    $stmt->bindValue(':pagenumber', ($pagenumber-1)*15);
    $stmt->bindValue(':s', '%'.$s.'%');
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectRandomMockup(){
    $sql = "SELECT `mockups`.`id`, `mockups`.`url` FROM `mockups` WHERE `mockups`.`approved` = 1 ORDER BY RAND() LIMIT 1";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectMockupSuggestions($id, $category_id){
    $sql = "SELECT `mockups`.`id`, `mockups`.`img`, `mockups`.`url`, `mockups`.`name`, `mockups`.`platform`, `categories`.`category` FROM `mockups` INNER JOIN `categories` ON `mockups`.`category_id` = `categories`.`id` WHERE `mockups`.`category_id` = :category_id AND `mockups`.`id` != :id AND `mockups`.`approved` = 1 ORDER BY RAND() LIMIT 4";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->bindValue(':category_id', $category_id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function countMockups(){
    $sql = "SELECT COUNT(*) AS `amount` FROM `mockups`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function countMockupsByCategory($category){
    $sql = "SELECT COUNT(*) AS `amount` FROM `mockups` INNER JOIN `categories` ON `mockups`.`category_id` = `categories`.`id` WHERE `categories`.`short` = :category";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':category', $category);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function countMockupsWithSearch($s){
    $sql = "SELECT COUNT(*) AS `amount` FROM `mockups` WHERE `name` LIKE :s";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':s', '%'.$s.'%');
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function countMockupsByCategoryWithSearch($category, $s){
    $sql = "SELECT COUNT(*) AS `amount` FROM `mockups` INNER JOIN `categories` ON `mockups`.`category_id` = `categories`.`id` WHERE `categories`.`short` = :category AND `name` LIKE :s";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':category', $category);
    $stmt->bindValue(':s', '%'.$s.'%');
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectCategories(){
    $sql = "SELECT * FROM categories";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectBlogpostById($id){
    $sql = "SELECT * FROM `blogposts` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectAllBlogposts(){
    $sql = "SELECT * FROM `blogposts` ORDER BY `blogposts`.`id` DESC";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectLastestBlogposts(){
    $sql = "SELECT * FROM `blogposts` ORDER BY `blogposts`.`id` DESC LIMIT 3";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function addSearchQuery($data){
    $sql = "INSERT INTO `searches` (`query`, `timestamp`, `result`) VALUES (:query, :timestamp, :result)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':query', $data['query']);
    $stmt->bindValue(':timestamp', $data['timestamp']);
    $stmt->bindValue(':result', $data['result']);
    $stmt->execute();
  }

  public function addMockupView($data){
    $sql = "INSERT INTO `mockup_views` (`mockup_id`, `timestamp`) VALUES (:mockup_id, :timestamp)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':mockup_id', $data['mockup_id']);
    $stmt->bindValue(':timestamp', $data['timestamp']);
    $stmt->execute();
  }

  public function selectArticleById($id){
    $sql = "SELECT * FROM `articles` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function deleteArticle($id){
    $sql = "DELETE FROM `articles` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    return $stmt->execute();
  }

  public function updateProc($data) {
    $sql = "UPDATE `articles` SET `proc` = :proc WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':proc', $data['proc']);
    $stmt->bindValue(':id', $data['article_id']);
    $stmt->execute();
  }

}
