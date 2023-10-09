<?php
require_once "./config/app.php";
require_once "./autoload.php";

if (isset($_GET['views'])) {
  $url = explode("/", $_GET['views']);
} else {
  $url = ["products"];
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php require_once "./app/views/inc/head.php"; ?>
</head>

<body>
  <?php

  use app\controllers\ViewsController;

  $role = ""; // dynamically get the role of the user 
  /*
    logged => $role = "Admin" || $role = "Client"
    not logged => $role = ""
  */

  $viewsControllers = new ViewsController();
  $view = $viewsControllers->getViewsController($url[0],  $role);

  if ($view === "404" || count($url) > 1) {
    require_once "./app/views/layouts/404.php";
  } elseif ($url[0] === "login" || $url[0] === "register") {
    require_once  $view;
    require_once "./app/views/layouts/footer.php";
  } else if ($role !== "Admin") {
    require_once "./app/views/layouts/navbar.php";
    require_once  $view;
    require_once "./app/views/layouts/footer.php";
  } else {
    require_once  $view;
  }

  ?>
  <h1>Hola</h1>
</body>

</html>