<?php

require_once( __DIR__ . '/DAO.php');

class HomeDAO extends DAO {

  public function selectLinksByUserId($user_id){
    $sql = "SELECT * FROM `links` WHERE `user_id` = :user_id ORDER  BY `id` DESC";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $user_id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function visitorSelectLinksByUserId($user_id){
    $sql = "SELECT * FROM `links` WHERE `user_id` = :user_id AND `url` != '' AND `url` != 'http://' AND `title` != '' AND `show` != 0 ORDER  BY `tile` DESC";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $user_id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function visitorSelectSocialsByUserId($user_id){
    $sql = "SELECT `socialplatforms`.`svg`, `socialplatforms`.`id` as `platform_id`, `socialplatforms`.`social_url`, `socials`.`handle` from `socialplatforms` LEFT JOIN `socials` ON `socials`.`platform_id` = `socialplatforms`.`id` WHERE `socials`.`user_id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $user_id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function addLink($data){
    $sql = "INSERT INTO `links` (`user_id`, `title`, `url`, `tile`) VALUES (:user_id, :title, :url, :tile)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->bindValue(':title', $data['title']);
    $stmt->bindValue(':url', $data['url']);
    $stmt->bindValue(':tile', $data['tile']);
    $stmt->execute();
  }

  public function updateLink($data) {
    $sql = "UPDATE `links` SET `title` = :title, `url` = :url WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':title', $data['title']);
    $stmt->bindValue(':url', $data['url']);
    $stmt->bindValue(':id', $data['link_id']);
    $stmt->execute();
}

public function updateLinkTitle($data) {
  $sql = "UPDATE `links` SET `title` = :title WHERE `id` = :id";
  $stmt = $this->pdo->prepare($sql);
  $stmt->bindValue(':title', $data['title']);
  $stmt->bindValue(':id', $data['link_id']);
  $stmt->execute();
}

public function updateLinkUrl($data) {
  $sql = "UPDATE `links` SET  `url` = :url WHERE `id` = :id";
  $stmt = $this->pdo->prepare($sql);
  $stmt->bindValue(':url', $data['url']);
  $stmt->bindValue(':id', $data['link_id']);
  $stmt->execute();
}

public function updateTileLink($data) {
  $sql = "UPDATE `links` SET  `tile` = :tile WHERE `id` = :id";
  $stmt = $this->pdo->prepare($sql);
  $stmt->bindValue(':tile', $data['tile']);
  $stmt->bindValue(':id', $data['link_id']);
  $stmt->execute();
}

public function updateShowLink($data) {
  $sql = "UPDATE `links` SET  `show` = :show WHERE `id` = :id";
  $stmt = $this->pdo->prepare($sql);
  $stmt->bindValue(':show', $data['show']);
  $stmt->bindValue(':id', $data['link_id']);
  $stmt->execute();
}

  public function deleteLink($id){
    $sql = "DELETE FROM `links` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    return $stmt->execute();
  }

  public function deleteLinkClicks($id){
    $sql = "DELETE FROM `linksclicks` WHERE `link_id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    return $stmt->execute();
  }

  public function addFeatureRequest($data){
    $sql = "INSERT INTO `featurerequests` (`user_id`, `subject`, `request`, `timestamp`) VALUES (:user_id, :subject, :request, :timestamp)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->bindValue(':subject', $data['subject']);
    $stmt->bindValue(':request', $data['request']);
    $stmt->bindValue(':timestamp', $data['timestamp']);
    $stmt->execute();
  }

  public function addBugReport($data){
    $sql = "INSERT INTO `bugreports` (`user_id`, `subject`, `text`, `timestamp`) VALUES (:user_id, :subject, :text, :timestamp)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->bindValue(':subject', $data['subject']);
    $stmt->bindValue(':text', $data['text']);
    $stmt->bindValue(':timestamp', $data['timestamp']);
    $stmt->execute();
  }

  public function selectSocialPlatforms($user_id){
    $sql = "SELECT `socialplatforms`.`svg`, `socialplatforms`.`placeholder`, `socialplatforms`.`id` as `platform_id`, `socials`.`handle`
    FROM `socialplatforms`
    LEFT JOIN `socials`
    ON `socials`.`platform_id` = `socialplatforms`.`id`
    WHERE `socials`.`user_id` = :id || `socials`.`user_id` IS NULL
    ORDER BY `socialplatforms`.`id`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $user_id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function addSocial($data){
    $sql = "INSERT INTO `socials` (`user_id`, `handle`, `platform_id`) VALUES (:user_id, :handle, :platform_id)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->bindValue(':handle', $data['handle']);
    $stmt->bindValue(':platform_id', $data['platform_id']);
    $stmt->execute();
  }

  public function updateSocial($data) {
    $sql = "UPDATE `socials` SET  `handle` = :handle WHERE `platform_id` = :platform_id AND `user_id` = :user_id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':handle', $data['handle']);
    $stmt->bindValue(':platform_id', $data['platform_id']);
    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->execute();
  }

  public function selectSocialByUserAndPlatform($data){
    $sql = "SELECT * from `socials` WHERE `user_id` = :user_id AND `platform_id` = :platform_id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->bindValue(':platform_id', $data['platform_id']);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function deleteSocial($data){
    $sql = "DELETE FROM `socials` WHERE `user_id` = :user_id AND `platform_id` = :platform_id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->bindValue(':platform_id', $data['platform_id']);
    return $stmt->execute();
  }





}
