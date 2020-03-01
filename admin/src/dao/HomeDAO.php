<?php

require_once( __DIR__ . '/DAO.php');

class HomeDAO extends DAO {

  public function selectMockupByName($name){
    $sql = "SELECT * FROM `mockups` WHERE `name` = :name";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':name', $name);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectCategories(){
    $sql = "SELECT * FROM `categories`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectUnapprovedMockups(){
    $sql = "SELECT `mockups`.`id`, `mockups`.`img`, `mockups`.`url`, `mockups`.`link`, `mockups`.`img_url`, `mockups`.`name`, `mockups`.`platform`, `mockups`.`text`, `categories`.`category` FROM `mockups` INNER JOIN `categories` ON `mockups`.`category_id` = `categories`.`id` WHERE `approved` = :approved ORDER BY `mockups`.`id` DESC";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':approved', 0);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function countUnapprovedMockups(){
    $sql = "SELECT COUNT(*) AS `amount` FROM `mockups` WHERE `approved` = :approved";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':approved', 0);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function countMockups(){
    $sql = "SELECT COUNT(*) AS `amount` FROM `mockups` WHERE `approved` != :approved";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':approved', 0);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function countMockupViews(){
    $sql = "SELECT COUNT(*) AS `amount` FROM `mockup_views`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function countSearches(){
    $sql = "SELECT COUNT(*) AS `amount` FROM `searches`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function addMockup($data){
    $sql = "INSERT INTO `mockups` (`name`, `url`,`category_id`, `platform`, `img`, `img_url`, `text`, `link`, `approved`) VALUES (:name, :url, :category_id, :platform, :img, :img_url, :text, :link, :approved)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':name', $data['name']);
    $stmt->bindValue(':url', $data['url']);
    $stmt->bindValue(':category_id', $data['category_id']);
    $stmt->bindValue(':platform', $data['platform']);
    $stmt->bindValue(':img', $data['img']);
    $stmt->bindValue(':img_url', $data['img_url']);
    $stmt->bindValue(':text', $data['text']);
    $stmt->bindValue(':link', $data['link']);
    $stmt->bindValue(':approved', $data['approved']);
    $stmt->execute();
  }

  public function deleteMockup($id){
    $sql = "DELETE FROM `mockups` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    return $stmt->execute();
  }

  public function approveMockup($id) {
    $sql = "UPDATE `mockups` SET `approved` = :approved WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':approved', 1);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
  }

  public function updateMockupCategory($id, $category) {
    $sql = "UPDATE `mockups` SET `category_id` = :category WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':category', $category);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
  }

  public function updateMockupPlatform($id, $platform) {
    $sql = "UPDATE `mockups` SET `platform` = :platform WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':platform', $platform);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
  }

  public function selectTweetedMockups(){
    $sql = "SELECT mockup_id FROM `tweeted`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectRandomMockup(){
    $sql = "SELECT `mockups`.`name`, `mockups`.`id`, `mockups`.`url`, `mockups`.`img_url` FROM `mockups` ORDER BY RAND() LIMIT 1";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function addTweetedMockup($data){
    $sql = "INSERT INTO `tweeted` (`mockup_id`, `timestamp`) VALUES (:mockup_id, :timestamp)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':mockup_id', $data['mockup_id']);
    $stmt->bindValue(':timestamp', $data['timestamp']);
    $stmt->execute();
  }

}
