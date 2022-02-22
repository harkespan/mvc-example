<?php namespace Libraries;
  use PDO;
  class Database {
    private static $instance = NULL;

    public function __construct() {}

    private function __clone() {}

    public static function getInstance() {
      if (!isset(self::$instance)) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        self::$instance = new PDO('mysql:host=localhost;dbname=test', 'root', '', $pdo_options);
      }
      return self::$instance;
    }
  }
?>