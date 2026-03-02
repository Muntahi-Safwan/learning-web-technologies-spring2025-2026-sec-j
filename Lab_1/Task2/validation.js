// Email Validation
function validateEmail() {
  const emailInput = document.getElementById("email").value.trim();

  if (emailInput.length === 0) {
    alert("Email cannot be empty");
    return;
  }

  if (!emailInput.includes("@")) {
    alert("Email must contain an @ symbol");
    return false;
  }
  return true;
}

// Name Validation
function validateName() {
  const nameInput = document.getElementById("name").value;

  if (nameInput.length === 0) {
    alert("Name cannot be empty");
    return;
  }

  let firstCode = nameInput.toUpperCase().charCodeAt(0);
  if (firstCode < 65 || firstCode > 90) {
    alert("Name must start with a letter");
    return false;
  }

  for (var i = 0; i < nameInput.length; i++) {
    var ch = nameInput[i];
    if (
      !(
        (ch >= "a" && ch <= "z") ||
        (ch >= "A" && ch <= "Z") ||
        ch == "." ||
        ch == "-" ||
        ch == " "
      )
    ) {
      alert("Invalid character in name");
      return false;
    }
  }

  if (nameInput.split(" ").length < 2) {
    alert("Name must contain at least 2 words");
    return false;
  }

  if (!nameInput.includes(" ")) {
    alert("Name cannot contain an spaces");
    return false;
  }
  return true;
}

// Gender Validation
function validateGender() {
  const genderInput = document.getElementsByName("gender");
  let selected = false;
  console.log(genderInput);
  for (let i = 0; i < genderInput.length; i++) {
    if (genderInput[i].checked) {
      selected = true;
      break;
    }
  }

  if (!selected) {
    alert("Please select a gender");
    return;
  }
  return true;
}

// DoB Validation
function validateDOB() {
  let d = document.getElementById("dd").value;
  let m = document.getElementById("mm").value;
  let y = document.getElementById("yyyy").value;

  if (d == "" || m == "" || y == "") {
    alert("Date cannot be empty");
    return false;
  }

  if (
    isNaN(d) ||
    isNaN(m) ||
    isNaN(y) ||
    parseInt(d) < 1 ||
    parseInt(d) > 31 ||
    parseInt(m) < 1 ||
    parseInt(m) > 12 ||
    parseInt(y) < 1900 ||
    parseInt(y) > 2016
  ) {
    alert("Invalid Date");
    return false;
  }
  return true;
}

// Blood Group Validation
function validateBlood() {
  const bloodGroupInput = document.getElementById("bloodgroup");
  const selectedBloodGroup = bloodGroupInput.value;

  if (selectedBloodGroup === "") {
    alert("Please select a blood group");
    return false;
  }
  return true;
}

// Degree Validation
function validateDegree() {
  const degreeInput = document.getElementsByName("degree");
  let selected = false;

  for (let i = 0; i < degreeInput.length; i++) {
    if (degreeInput[i].checked) {
      selected = true;
      break;
    }
  }

  if (!selected) {
    alert("Please select a degree");
    return false;
  }
  return true;
}

// Validate Profile
function validateProfile() {
  var id = document.getElementById("userid").value;
  var pic = document.getElementById("picture").value;

  if (id == "" || id <= 0) {
    alert("User ID must be positive number");
    return false;
  }

  if (pic == "") {
    alert("Picture cannot be empty");
    return false;
  }
  return true;
}

// Full Form Validate
function validateForm() {
  if (!validateEmail()) return false;
  if (!validateName()) return false;
  if (!validateDOB()) return false;
  if (!validateBlood()) return false;
  if (!validateDegree()) return false;
  let pic = document.getElementById("picture").value;
  if (pic == "") {
    alert("Picture cannot be empty");
    return false;
  }
}
