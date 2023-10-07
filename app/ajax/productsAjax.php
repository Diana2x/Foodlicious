<?php
require_once "../../config/app.php";
require_once "../views/inc/sessionStart.php";
require_once "../../autoload.php";

use app\controllers\productsController;

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $productsController = new ProductsController();

  echo $productsController->getProducts();
  exit();
}
