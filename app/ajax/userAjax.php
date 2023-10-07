<?php
require_once "../../config/app.php";
require_once "../views/inc/sessionStart.php";
require_once "../../autoload.php";

use app\controllers\userAuthController;
use app\models\user;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $userAuthController = new UserAuthController();

  $user = new User();
  $user->setDni(trim($_POST['dni']));
  $user->setName(trim($_POST['name']));
  $user->setLastname(trim($_POST['lastname']));
  $user->setEmail(trim($_POST['email']));
  $user->setPassword(trim($_POST['password']));
  $user->setRole('Client');

  echo $userAuthController->createUser($user);
  exit();
}
