function deleteProduct(id) {
  if (!confirm("Are you sure you want to delete this product?")) return false;

  let data = {
    id: id,
  };
  let payload = JSON.stringify(data);

  let xhttp = new XMLHttpRequest();
  xhttp.open("POST", "../controller/deleteProduct.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("data=" + encodeURIComponent(payload));

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("response").innerHTML = this.responseText;
      setTimeout(function () {
        window.location.reload();
      }, 1000);
    }
  };

  return false;
}
