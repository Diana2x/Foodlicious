<?php

namespace app\controllers;

use app\models\UserAuthModel;

class UserAuthController
{
  public function createUser($user)
  {
    $userAuthModel = new UserAuthModel();

    return $userAuthModel->createUser($user);
  }
}
