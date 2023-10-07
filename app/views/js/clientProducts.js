import { getProductsRequest } from "./ajax.js";

const products = document.getElementsByClassName("products");

getProductsRequest().then((res) => {
  res.data.forEach((product) => {
    products[0].innerHTML += `
      <div class="card shadow" style="width: 18rem;">
        <img src=${product.img_url} class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">${product.name}</h5>
          <p class="card-text">Precio s/. ${product.price}</p>
          <button class="d-flex btn btn-outline-warning mx-auto"><strong>Agregar al carrito</strong></button>
        </div>
      </div>
    `;
  });
});
