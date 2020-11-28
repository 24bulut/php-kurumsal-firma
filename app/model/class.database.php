<?php
  class Database{
    function MySqlConnection(){
      $host   = "localhost";
      $uname  = "root";
      $pass   = "";
      $db     = "corporate";

      try {
        $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $uname, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Bağlantı başarılı"; 
        }
    catch(PDOException $e)
        {
        echo "Bağlantı hatası: " . $e->getMessage();
        }
      /*
      $conn = @mysqli_connect($host,$uname,$pass,$db);
      mysqli_set_charset($conn, "utf8");
      */
      return $conn;
    }
  }

?>
