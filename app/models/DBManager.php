<?php

namespace app\models;

use \mysqli;

require_once __DIR__ . "/../../config/server.php";

class DBManager
{
  private $server = DB_SERVER;
  private $user = DB_USER;
  private $pass = DB_PASS;
  private $db = DB_NAME;
  private $con;

  public function __construct()
  {
    $this->con = new mysqli($this->server, $this->user, $this->pass, $this->db);

    if ($this->con->connect_error) {
      die("Error de conexión a la base de datos: " . $this->con->connect_error);
    }
  }

  public function getConnection()
  {
    return $this->con;
  }
}
