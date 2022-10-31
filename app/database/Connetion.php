<?php

namespace app\database;

use PDO;
use PDOException;

class Connection
{

  private static $pdo = null;

  public static function Connection()
  {

    try {
      if (static::$pdo) {
        return static::$pdo;
      }

      static::$pdo = new PDO('pgsql:host=localhost;port=5432;dbname=empresa;user=postgres;password=123');
    } catch (PDOException $e) {
      var_dump($e->getMessage());
    }
  }
}