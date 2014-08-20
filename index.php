<?php
  require 'vendor/autoload.php';

  date_default_timezone_set('America/New_York');

  $app = new \Slim\Slim(array(
    'debug' => true
  ));

  $app->setName('vore-on-two');

  //Routes
  $app->get('/', 'Pages:home');

  $app->group('/process', function () use ($app) {

    $app->get('/phone', 'Process:phone');

  });


  # lets go
  $app->run();
  
  /**
  *  Pages
  */
  class Pages
  {
    function home() {
      include('views/home.php');
    }
  }


  /**
  *  Process data as it comes in
  */
  class Process
  {
    function phone()
    {
      echo "no";
    }
  }

  function getConnection()
  {
    try {
      $db_username = "DATABASE_NAME";
      $db_password = "********";
      $conn = new PDO('mysql:host=localhost;dbname=root', $db_username, $db_password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOExeption $e) {
      echo 'ERROR: '. $e->getMessage();
    }

    return $conn;
  }
?>