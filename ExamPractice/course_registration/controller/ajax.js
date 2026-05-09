function addRegistration() {
  let student_name = document.getElementById("student_name").value;
  let student_id = document.getElementById("student_id").value;
  let course_name = document.getElementById("course_name").value;
  let semester = document.getElementById("semester").value;

  let xhttp = new XMLHttpRequest();
  xhttp.open("POST", "../controller/courseController.php", true);
  xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhttp.send(
    `student_name=${student_name}&student_id=${student_id}&course_name=${course_name}&semester=${semester}&action=add`,
  );
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      let response = JSON.parse(this.responseText);
      if (response.status == "error") {
        document.getElementById("err").innerText = response.message;
      } else {
        let res = "";
        for (let i = 0; i < response.data.length; i++) {
          res += `
            <tr>
              <td>${response.data[i].student_name}</td>
              <td>${response.data[i].student_id}</td>
              <td>${response.data[i].course_name}</td>
              <td>${response.data[i].semester}</td>
              <td><button onclick="deleteRegistration(${response.data[i].student_id})">Delete</button></td>
            </tr>
          `;
        }
        document.getElementById("tableBody").innerHTML = res;
      }
    }
  };
}

function getRegistrations() {
  let xhttp = new XMLHttpRequest();
  xhttp.open("GET", "../controller/courseController.php?action=get", true);
  xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhttp.send();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      let response = JSON.parse(this.responseText);
      if (response.status == "error") {
        document.getElementById("err").innerText = response.message;
      } else {
        let res = "";
        for (let i = 0; i < response.data.length; i++) {
          res += `
            <tr>
              <td>${response.data[i].student_name}</td>
              <td>${response.data[i].student_id}</td>
              <td>${response.data[i].course_name}</td>
              <td>${response.data[i].semester}</td>
              <td><button onclick="deleteRegistration(${response.data[i].student_id})">Delete</button></td>
            </tr>
          `;
        }
        document.getElementById("tableBody").innerHTML = res;
      }
    }
  };
}

function deleteRegistration(id) {
  console.log("clicked");
  let xhttp = new XMLHttpRequest();
  xhttp.open("POST", "../controller/courseController.php", true);
  xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhttp.send(`id=${id}&action=delete`);
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      let response = JSON.parse(this.responseText);
      if (response.status == "error") {
        document.getElementById("err").innerText = response.message;
      } else {
        document.getElementById("tableBody").innerHTML = "";
        let res = "";
        for (let i = 0; i < response.data.length; i++) {
          res += `
            <tr>
              <td>${response.data[i].student_name}</td>
              <td>${response.data[i].student_id}</td>
              <td>${response.data[i].course_name}</td>
              <td>${response.data[i].semester}</td>
              <td><button onclick="deleteRegistration(${response.data[i].id})">Delete</button></td>
            </tr>
          `;
        }
        document.getElementById("tableBody").innerHTML = res;
      }
    }
  };
}

getRegistrations();
