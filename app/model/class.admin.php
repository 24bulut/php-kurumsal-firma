<?php
class Admin
{
  protected $userName, $password;

  public function setUserName($userName)
  {
    $this->userName = trim(strip_tags($userName));
  }
  public function setPassword($password)
  {
    $this->password = trim(strip_tags($password));
  }

  ## true | false
  public function signin()
  {
    $pdo = new Database();
    $connection = $pdo->MySqlConnection();
    $stmt = $connection->prepare("SELECT * FROM admin WHERE  username=?");
    $stmt->execute([$this->userName]);
    $admin = $stmt->fetch();
    if (!isset($admin["username"])) {
      return false;
    }
    if (password_verify($this->password, $admin['password'])) {
      $_SESSION["admin"] = "true";
      $_SESSION["admin_username"] = $admin['username'];
      return true;
    }
    return false;
  }
}
