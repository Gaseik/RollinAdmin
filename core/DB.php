<?php
class DB {

  private $host = 'localhost';
  private $dbuser = 'root';
  private $password = '';
  private $dbname = 'rollin';

  private $pdo = null;
  private $stmt = null;

  function __construct() {
    try {
      $this->pdo = new PDO(
        "mysql:host=$this->host;dbname=$this->dbname;charset=utf8",
        "$this->dbuser", "$this->password", [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
          PDO::ATTR_EMULATE_PREPARES => false,
        ]
      );
    } catch (Exception $ex) {die($ex->getMessage());}
  }

  function __destruct() {
    if ($this->stmt !== null) {$this->stmt = null;}
    if ($this->pdo !== null) {$this->pdo = null;}
  }

  function selectDB($sql, $cond = null) {
    $result = false;
    try {
      $this->stmt = $this->pdo->prepare($sql);
      $this->stmt->execute($cond);
      $result = $this->stmt->fetchAll();
    } catch (Exception $ex) {die($ex->getMessage());}
    $this->stmt = null;
    return $result;
  }

  function insertDB($sql, $cond = null) {
    $result = false;
    try {
      $this->stmt = $this->pdo->prepare($sql);
      $this->stmt->execute($cond);
      $result = $this->pdo->lastInsertId(); # get the last ID inserted
    } catch (Exception $ex) {die($ex->getMessage());}
    $this->stmt = null;
    return $result;
  }

  function updateDB($sql, $cond = null) {
    $result = false;
    try {
      $this->stmt = $this->pdo->prepare($sql);
      $this->stmt->execute($cond);
      $result = "success";
    } catch (Exception $ex) {die($ex->getMessage());}
    $this->stmt = null;
    return $result;
  }

  function deleteDB($sql, $ids) {
    if (empty($ids)) {return "error: no ids";}
    $result = false;
    try {
      $this->stmt = $this->pdo->prepare($sql);
      $this->stmt->execute($ids);
      $result = "success";
    } catch (Exception $ex) {die($ex->getMessage());}
    $this->stmt = null;
    return $result;
  }

}
?>
