<?php

namespace app\controllers;

use app\models\Products;

class ProductsController
{

  public function getProducts()
  {
    $products = new Products();

    return $products->getProducts();
  }
}
