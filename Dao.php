<?php
// Dao.php
// class for getting products in MySQL
class Dao {

  private $host = "localhost";
  private $db = "zgoodspe";
  private $user = "zgoodspe";
  private $pass = "radsies1";

  public function getConnection () {
    return
      new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,
          $this->pass);
  }

  public function getUsers () {
    $conn = $this->getConnection();
    return $conn->query("SELECT id, name FROM user");
  }

  public function getUser ($id) {
    $conn = $this->getConnection();
    $getQuery = "SELECT id, email, password FROM user WHERE id = :id";
    $q = $conn->prepare($getQuery);
    $q->bindParam(":id", $id);
    $q->execute();
    return reset($q->fetchAll());
  }

 /* public function saveUser ($name, $description, $imagePath) {
    $conn = $this->getConnection();
    $saveQuery =
        "INSERT INTO product
        (name, description, image_path)
        VALUES
        (:name, :description, :imagePath)";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":name", $name);
    $q->bindParam(":description", $description);
    $q->bindParam(":imagePath", $imagePath);
    $q->execute();
 }*/

} // end Dao
