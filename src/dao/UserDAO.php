<?php
require_once __DIR__ . '/DAO.php';
class UserDAO extends DAO {

  public function selectById($id) {
    $sql = "SELECT * FROM `users` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectByEmail($email) {
    $sql = "SELECT * FROM `users` WHERE `email` = :email";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectByURL($url) {
    $sql = "SELECT * FROM `users` WHERE `url` = :url";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':url', $url);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function insert($data) {
    $errors = $this->validate($data);
    if (empty($errors)) {
      $sql = "INSERT INTO `users` (`email`, `password`) VALUES (:email, :password)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':email', $data['email']);
      $stmt->bindValue(':password', $data['password']);
      if($stmt->execute()) {
        $insertedId = $this->pdo->lastInsertId();
        return $this->selectById($insertedId);
      }
    }
    return false;
  }

  public function validate($data) {
    $errors = array();
    if (empty($data['email'])) {
      $errors['email'] = 'please enter the email';
    }
    if (empty($data['password'])) {
      $errors['password'] = 'please enter the password';
    }
    return $errors;
  }

  public function updateUserSettings($data) {
      $sql = "UPDATE `users` SET `firstname` = :firstname, `username` = :username, `bio` = :bio, `email` = :email, `url` = :url WHERE `id` = :id";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':firstname', $data['firstname']);
      $stmt->bindValue(':username', $data['username']);
      $stmt->bindValue(':bio', $data['bio']);
      $stmt->bindValue(':email', $data['email']);
      $stmt->bindValue(':url', $data['url']);
      $stmt->bindValue(':id', $data['user_id']);
      if($stmt->execute()) {
        return $this->selectById($data['user_id']);
      }
    return false;
  }

  public function updatePP($data) {
    $sql = "UPDATE `users` SET `image` = :image WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':image', $data['image']);
    $stmt->bindValue(':id', $data['user_id']);
    if($stmt->execute()) {
      return $this->selectById($data['user_id']);
    }
  return false;
}

  public function updateColor($data) {
    $sql = "UPDATE `users` SET `color` = :color WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':color', $data['theme_color']);
    $stmt->bindValue(':id', $data['user_id']);
    $stmt->execute();
}

  public function addSub($data) {
      $sql = "INSERT INTO `subs` (`email`, `timestamp`, `ip`) VALUES (:email, :timestamp, :ip)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':email', $data['email']);
      $stmt->bindValue(':timestamp', $data['timestamp']);
      $stmt->bindValue(':ip', $data['ip']);
      $stmt->execute();
    return false;
  }

  public function getSubByEmail($email) {
    $sql = "SELECT * FROM `subs` WHERE `email` = :email";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
}
