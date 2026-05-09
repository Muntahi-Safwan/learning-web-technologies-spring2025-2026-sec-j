function createProduct() {
  let name = document.getElementById("name").value;
  let description = document.getElementById("description").value;
  let price = document.getElementById("price").value;
  let quantity = document.getElementById("quantity").value;

  if (name == "" || description == "" || price == "" || quantity == "") {
    alert("Please fill in all fields.");
    return;
  }

  let xhttp = new XMLHttpRequest();
  xhttp.open("POST", "productController.php", true);
  xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhttp.send(
    `name=${name}&description=${description}&price=${price}&quantity=${quantity}&action=create`,
  );
  xhttp.onreadystatechange = function () {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      let response = JSON.parse(xhttp.responseText);
      if (response.status == "success") {
        alert("Product created successfully.");
      } else {
        alert("Failed to create product.");
      }
    }
  };
}

function updateProduct() {
  let id = document.getElementById("id").value;
  let name = document.getElementById("name").value;
  let description = document.getElementById("description").value;
  let price = document.getElementById("price").value;
  let quantity = document.getElementById("quantity").value;

  if (
    id == "" ||
    name == "" ||
    description == "" ||
    price == "" ||
    quantity == ""
  ) {
    alert("Please fill in all fields.");
    return;
  }

  let xhttp = new XMLHttpRequest();
  xhttp.open("POST", "productController.php", true);
  xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhttp.send(
    `id=${id}&name=${name}&description=${description}&price=${price}&quantity=${quantity}&action=update`,
  );
  xhttp.onreadystatechange = function () {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      let response = JSON.parse(xhttp.responseText);
      if (response.status == "success") {
        alert("Product updated successfully.");
      } else {
        alert("Failed to update product.");
      }
    }
  };
}

function deleteProduct() {
  let id = document.getElementById("id").value;

  if (id == "") {
    alert("Please enter a product ID.");
    return;
  }

  let xhttp = new XMLHttpRequest();
  xhttp.open("POST", "productController.php", true);
  xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhttp.send(`id=${id}&action=delete`);
  xhttp.onreadystatechange = function () {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      let response = JSON.parse(xhttp.responseText);
      if (response.status == "success") {
        alert("Product deleted successfully.");
      } else {
        alert("Failed to delete product.");
      }
    }
  };
}

function fetchProducts() {
  let xhttp = new XMLHttpRequest();
  xhttp.open("GET", "productController.php", true);
  xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhttp.send();
  xhttp.onreadystatechange = function () {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      let response = JSON.parse(xhttp.responseText);
      if (response.status == "success") {
        let products = response.data;
        let productList = document.getElementById("productList");
        productList.innerHTML = "";
        products.forEach((product) => {
          let li = document.createElement("li");
          li.textContent = `${product.name} - $${product.price}`;
          productList.appendChild(li);
        });
      } else {
        alert("Failed to fetch products.");
      }
    }
  };
}
