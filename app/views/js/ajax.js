/*---------------Form Register User--------------*/
export const createUserRequest = async (formData) => {
  const response = await fetch(
    "http://localhost/foodlicious/app/ajax/userAjax.php",
    {
      method: "POST",
      body: formData,
    }
  );

  const { status, message } = await response.json();

  if (status === 400) {
    console.log(message);
    if (message.includes("PRIMARY")) {
      throw new Error("El dni ya está registrado");
    } else {
      throw new Error("El correo electrónico ya está registrado");
    }
  }
};

/*---------------Client Products--------------*/
export const getProductsRequest = async () => {
  const response = await fetch(
    "http://localhost/foodlicious/app/ajax/productsAjax.php",
    {
      method: "GET",
    }
  );

  const res = await response.json();

  return res;
};
