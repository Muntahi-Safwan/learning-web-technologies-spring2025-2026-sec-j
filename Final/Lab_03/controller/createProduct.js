function createProduct() {
  let id = document.getElementById("id").value;
  let name = document.getElementById("name").value;
  let description = document.getElementById("description").value;
  let price = document.getElementById("price").value;
  let quantity = document.getElementById("quantity").value;

  let data = {
    id: id,
    name: name,
    description: description,
    price: price,
    quantity: quantity,
  };

  let product = JSON.stringify(data);

  let xhttp = new XMLHttpRequest();
  xhttp.open("post", "../controller/createProduct.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("product=" + product);

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("response").innerHTML = this.responseText;
      document.querySelector("form").reset();

      setTimeout(function () {
        document.getElementById("response").innerHTML = "";
      }, 2000);
    }
  };

  return false;
}
