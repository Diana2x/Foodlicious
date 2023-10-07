<?php

namespace app\models;

class Products extends DBManager
{
  public function __construct()
  {
    parent::__construct();
  }

  public function getProducts()
  {
    $sql = "SELECT id, name, price, img_url FROM products";

    $result = $this->getConnection()->query($sql);

    header('Content-Type: application/json');

    if ($result) {
      return json_encode(array("data" => $result->fetch_all(MYSQLI_ASSOC)));
    } else {
      $error = $this->getConnection()->error;
      return json_encode(array("error" => $error));
    }
  }
}
