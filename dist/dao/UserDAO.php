<?php
require_once __DIR__ . '/DAO.php';
class UserDAO extends DAO {

  public function selectVisitorByIp($ip) {
    $sql = "SELECT `cookie`, `visits` FROM `visitors` WHERE `ip` = :ip";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':ip', $ip);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function getSubByEmail($email) {
    $sql = "SELECT * FROM `subs` WHERE `email` = :email";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function updateVisits($data) {
    $sql = "UPDATE `visitors` SET `visits` = :visits WHERE `cookie` = :cookie";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':visits', $data['visits']);
    $stmt->bindValue(':cookie', $data['cookie']);
    $stmt->execute();
  }

  public function justVisited($data){
    $sql = "SELECT * FROM `visitors` WHERE `ip` = :ip  AND `timestamp` BETWEEN :date1 AND :date2";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':ip', $data['ip']);
    $stmt->bindValue(':date2', $data['now']);
    $stmt->bindValue(':date1', $data['past']);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
}
