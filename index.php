<?php
  require 'vendor/autoload.php';

  Dotenv::load(__DIR__);

  date_default_timezone_set('America/New_York');

  $app = new \Slim\Slim(array(
    'debug' => true
  ));

  $app->setName('vore-on-two');

  //Routes
  $app->get('/', 'Pages:home');

  $app->group('/process', function () use ($app) {

    $app->post('/phone', 'Process:phone');

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
      global $app;
      $req = $app->request();
      $phone = $req->params('phone');

      $sql = "INSERT INTO phones (phone, ip, created_at) VALUES (:phone, :ip, NOW())";

      try {
        $conn = getConnection();
        $q = $conn->prepare($sql);
        $q->execute(array(
          'phone' => $phone,
          'ip' => $_SERVER['REMOTE_ADDR']
        ));
        $conn = null;

        $response['status'] = array(
          'code' => '200'
        );

      } catch (PDOExeption $e) {
        $response['status'] = array(
          'code' => '500',
          'message' => $e->getMessage
        );
      }

      echo json_encode($response);

    }
  }

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