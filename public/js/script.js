// const submitBtn = document.getElementById("submitBtn");
//     submitBtn.addEventListener("click", function (e) {
//         submitForm()
//     })

function submitForm() {
  var name = document.getElementById("name");
  const email = document.getElementById("email");
  const phone = document.getElementById("phone");
  const password = document.getElementById("password");
  const nameError = document.getElementById("nameError");
  const emailError = document.getElementById("emailError");
  const phoneError = document.getElementById("phoneError");
  const passwordError = document.getElementById("passwordError");
  let nameVal = name.value;
  let emailVal = email.value;
  let phoneVal = phone.value;
  let passwordVal = password.value;
  validateName(nameVal, nameError, name);
  validateEmail(emailVal, emailError, email);
  validatePassword(passwordVal, passwordError, password);
  validatePhone(phoneVal, phoneError, phone);
}
function validatePhone(phoneVal, phoneError, phone) {
  console.log(isNaN(phoneVal));
  if (phoneVal.length == 0) {
    phoneError.innerText = "Phone is required";
    phone.style.border = "1px solid red";
  } else if (phoneVal.length != 10) {
    phoneError.innerText = "Invalid phone number length";
    phone.style.border = "1px solid red";
    phone.style.color = "red";
  } else if (isNaN(phoneVal)) {
    phoneError.innerText = "Invalid phone number";
    phone.style.border = "1px solid red";
    phone.style.color = "red";
  } else {
    phoneError.innerText = "";
    phone.style.border = "1px solid green";
    phone.style.color = "black";
  }
}
function validatePassword(passwordVal, passwordError, password) {
  if (passwordVal.length == 0) {
    passwordError.innerText = "Password is requred";
    password.style.border = "1px solid red";
  } else if (passwordVal.length < 6) {
    password.style.border = "1px solid black";
    password.style.color = "red";
    passwordError.innerText = "Password length must be atleast 8 characters";
  } else {
    password.style.border = "1px solid green";
    password.style.color = "black";
    passwordError.innerText = "";
  }
}
function validateEmail(emailVal, emailError, email) {
  let a = emailVal.indexOf("@");
  let b = emailVal.indexOf(".");
  if (emailVal.length == 0) {
    emailError.innerText = "Email is required";
    email.style.border = "1px solid red";
  } else if (a == -1 || b == -1 || a + 1 == b || emailVal.length - 1 == b) {
    emailError.innerText = "Invalid email address";
    email.style.border = "1px solid red";
    email.style.color = "red";
  } else {
    emailError.innerText = "";
    email.style.border = "1px solid green";
    email.style.color = "black";
  }
}
function validateName(nameVal, nameError, name) {
  if (nameVal.length == 0) {
    nameError.innerText = "Name is required";
    name.style.border = "1px solid red";
  } else if (nameVal.length < 5 || nameVal.lenngth > 15) {
    nameError.innerText = "";
    nameError.innerText = "Name length should be between 5 and 15";
    name.style.color = "red";
    name.style.border = "1px solid red";
  } else {
    let nameLength = nameVal.length;
    for (let i = 0; i < nameLength; i++) {
      if (!isNaN(nameVal[i])) {
        nameError.innerText = "Name must not contains a number";
      } else {
        nameError.innerText = "";
        name.style.color = "black";
        name.style.border = "1px solid green";
      }
    }
  }
}
function formSubmit() {
  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;
  const genders = document.getElementsByName("gender");
  const countrys = document.getElementsByName("country");
  let inputval = document.getElementById("inputVal");
  const religion = document.getElementsByName("hobby");
  console.log("clicked");
  let gender;
  let country;
  let checkedReligion = [];
  for (let i = 0; i < religion.length; i++) {
    if (religion[i].checked) {
      checkedReligion.push(religion[i].value);
    }
    // else{
    //     checkedReligion.pop(religion[i].value)

    // }
  }
  for (let i = 0; i < genders.length; i++) {
    if (genders[i].checked) {
      gender = genders[i].value;
    }
  }
  console.log("gender", gender);
  for (let i = 0; i < countrys.length; i++) {
    if (countrys[i].selected) {
      country = countrys[i].value;
    }
  }
  let countryval = document.querySelector("#country").options;
  // let val=document.querySelector("#country").selectedIndex.value
  console.log("countryval", countryval);
  console.log("country", country);
  if (username.length == 0 && password.length == 0 && country == undefined)
    alert("username ,password and country must be filled");
  else {
    console.log(checkedReligion);
    inputval.innerHTML =
      "Name:" +
      username +
      ", password:" +
      password +
      " ,country:" +
      country +
      " ,gender:" +
      gender +
      " ,hobby:" +
      checkedReligion.toString();
    console.log("country", country);
  }
}
