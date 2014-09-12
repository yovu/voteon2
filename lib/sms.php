<?php 

  require '../vendor/autoload.php';

  Dotenv::load(__DIR__);

  /**
  *  Make the database connection
  */
  function getConnection()
  {
    try {
      $db_username = $_ENV['DB_USER'];
      $db_password = $_ENV['DB_PASS'];
      $conn = new PDO('mysql:host='.$_ENV['DB_HOST'].';dbname='.$_ENV['DB_NAME'].'', $db_username, $db_password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOExeption $e) {
      echo 'ERROR: '. $e->getMessage();
    }

    return $conn;
  }

?>