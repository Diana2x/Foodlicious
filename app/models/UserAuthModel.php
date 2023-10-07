<?php

namespace app\models;

class UserAuthModel extends DBManager
{
  private $con;

  public function __construct()
  {
    $db = new DBManager();
    $this->con = $db->getConnection();
  }

  public function createUser($user)
  {
    $sql = "INSERT INTO users (dni, name, lastname, email, password, role) VALUES (?,?,?,?,?,?)";
    $stmt = $this->con->prepare($sql);

    $dni = $user->getDni();
    $name = $user->getName();
    $lastname = $user->getLastname();
    $email = $user->getEmail();
    $password = $user->getPassword();
    $role = $user->getRole();

    $stmt->bind_param("ssssss", $dni, $name, $lastname, $email, $password, $role);

    try {
      $stmt->execute();

      $msj = "Usuario registrado con éxito.";
      $status = 201;
    } catch (\mysqli_sql_exception $e) {
      $msj = $e->getMessage();
      $status = 400;
    }

    return json_encode(array("message" => $msj, "status" => $status));
  }
}
