const signup = () => {
  let username = document.getElementById("username").value;
  let password = document.getElementById("password").value;
  let email = document.getElementById("email").value;

  let data = {
    username: username,
    password: password,
    email: email,
  };
  let user = JSON.stringify(data);

  let xhttp = new XMLHttpRequest();
  xhttp.open("post", "../controller/register.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("user=" + user);

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      let response = JSON.parse(this.responseText);
      let responseDiv = document.getElementById("response");

      responseDiv.innerHTML = response;
      setTimeout(function () {
        window.location.href = "login.php";
      }, 2000);
    }
  };
  return false;
};
