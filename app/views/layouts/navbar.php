<header class="d-flex justify-content-between align-items-center py-3 px-1 flex-wrap gap-3">
  <img class="mw-100 h-auto" src="<?php echo APP_URL ?>app/views/img/logo3.png" alt="logo2">
  <div class="d-flex gap-3">
    <a class="btn btn-dark mt-auto" href="login" role="button">Iniciar Sesión</a>
    <a class="btn btn-dark mt-auto" href="register" role="button">Registrarse</a>
  </div>
</header>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav w-100">
        <li class="nav-item">
          <a class="nav-link active" href="#">Hamburguesas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pizzas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Bebidas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Promociones</a>
        </li>
      </ul>
    </div>
    <div class="shopping-cart">
      <h6 class="nav-total-price">S/. 0.00</h6>
      <svg xmlns="http://www.w3.org/2000/svg" class="position-relative icon icon-tabler icon-tabler-shopping-cart" width="30" height="30" viewBox="0 0 24 24" stroke-width="2" stroke="orange" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
        <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
        <path d="M17 17h-11v-14h-2"></path>
        <path d="M6 5l14 1l-1 7h-13"></path>
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
          99+
        </span>
      </svg>
    </div>
  </div>
</nav>