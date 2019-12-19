<?php

require_once( __DIR__ . '/DAO.php');

class HomeDAO extends DAO {

  public function selectArticlesByUserId($user_id){
    $sql = "SELECT * FROM `articles` WHERE `user_id` = :user_id ORDER  BY `id` DESC";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $user_id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectArticlesByBundleId($data){
    $sql = "SELECT * FROM `articles` WHERE `user_id` = :user_id && `bundle_id` = :bundle_id ORDER  BY `id` DESC";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->bindValue(':bundle_id', $data['bundle_id']);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectArticleById($id){
    $sql = "SELECT * FROM `articles` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function addArticle($data){
    $sql = "INSERT INTO `articles` (`url`, `user_id`, `title`, `img`, `domain`, `text`,`textToRead`, `proc`, `bundle_id`) VALUES (:url, :user_id, :title, :img, :domain, :text, :textToRead, :proc, :bundle_id)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':url', $data['url']);
    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->bindValue(':title', $data['title']);
    $stmt->bindValue(':img', $data['img']);
    $stmt->bindValue(':domain', $data['domain']);
    $stmt->bindValue(':text', $data['text']);
    $stmt->bindValue(':textToRead', $data['textToRead']);
    $stmt->bindValue(':proc', 0);
    $stmt->bindValue(':bundle_id', $data['bundle_id']);
    $stmt->execute();
  }

//   public function updateArticle($data) {
//     $sql = "UPDATE `Articles` SET `title` = :title, `url` = :url WHERE `id` = :id";
//     $stmt = $this->pdo->prepare($sql);
//     $stmt->bindValue(':title', $data['title']);
//     $stmt->bindValue(':url', $data['url']);
//     $stmt->bindValue(':id', $data['Article_id']);
//     $stmt->execute();
// }

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

public function selectBundles($user_id){
  $sql = "SELECT * FROM `bundles` WHERE `user_id` = :user_id ORDER  BY `id` ASC";
  $stmt = $this->pdo->prepare($sql);
  $stmt->bindValue(':user_id', $user_id);
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

public function selectBundlesByUserId($user_id){
  $sql = "SELECT `bundles`.*, `articles`.`img` FROM `bundles` left JOIN `articles` ON `bundles`.`id` = `articles`.`bundle_id` WHERE `bundles`.`user_id` = :user_id ORDER  BY `id` ASC";
  $stmt = $this->pdo->prepare($sql);
  $stmt->bindValue(':user_id', $user_id);
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

public function addBundle($data){
  $sql = "INSERT INTO `bundles` (`name`, `user_id`, `description`, `thumbnail`) VALUES (:name, :user_id, :description, :thumbnail)";
  $stmt = $this->pdo->prepare($sql);
  $stmt->bindValue(':user_id', $data['user_id']);
  $stmt->bindValue(':name', $data['name']);
  $stmt->bindValue(':description', $data['description']);
  $stmt->bindValue(':thumbnail', $data['thumbnail']);
  $stmt->execute();
}

public function selectBundleById($id){
  $sql = "SELECT * FROM `bundles` WHERE `id` = :id";
  $stmt = $this->pdo->prepare($sql);
  $stmt->bindValue(':id', $id);
  $stmt->execute();
  return $stmt->fetch(PDO::FETCH_ASSOC);
}

public function deleteBundle($id){
  $sql = "DELETE FROM `bundles` WHERE `id` = :id";
  $stmt = $this->pdo->prepare($sql);
  $stmt->bindValue(':id', $id);
  return $stmt->execute();
}


}
