function Validate() {
  // input from forms
  const name = document.getElementById("name");
  const matricno = document.getElementById("matricno");
  const currentaddress = document.getElementById("currentaddress");
  const homeaddress = document.getElementById("homeaddress");
  const email = document.getElementById("email");
  const mobilephone = document.getElementById("mobilephone");
  const homephone = document.getElementById("homephone");

  // regex
  const regexName = /^[A-Za-z ]+$/;
  const regexMatricno = /^[A-Za-z0-9]+$/;
  const regexPhone = /^[0-9]$/;

  // error in input
  const errorName = document.getElementById("errorName");
  const errorMatricno = document.getElementById("errorMatricno");
  const errorCurrAddr = document.getElementById("errorCurrAddr");
  const errorHomeAddr = document.getElementById("errorHomeAddr");
  const errorEmail = document.getElementById("errorEmail");
  const errorMobilePhone = document.getElementById("errorMobilePhone");
  const errorHomePhone = document.getElementById("errorHomePhone");

  let isValid = true;

  if (!regexName.test(name.value)) {
    errorName.innerHTML = "Please enter a valid name (only letters and spaces allowed)";
    isValid = false;
  } else {
    errorName.innerHTML = "";
  }

  if (!regexMatricno.test(matricno.value)) {
    errorMatricno.innerHTML = "Please enter a valid matric number (only letters and digits allowed)";
    isValid = false;
  } else {
    errorMatricno.innerHTML = "";
  }

  if (currentaddress.value === "") {
    errorCurrAddr.innerHTML = "Please enter your current address";
    isValid = false;
  } else {
    errorCurrAddr.innerHTML = "";
  }

  if (homeaddress.value === "") {
    errorHomeAddr.innerHTML = "Please enter your home address";
    isValid = false;
  } else {
    errorHomeAddr.innerHTML = "";
  }

  if (email.validity.typeMismatch || !email.value.endsWith("@gmail.com")) {
    errorEmail.innerHTML = "Please enter a valid Gmail account";
    isValid = false;
  } else {
    errorEmail.innerHTML = "";
  }

  if (!regexPhone.test(mobilephone.value)) {
    errorMobilePhone.innerHTML = "Please enter a valid 11-digit mobile phone number";
    isValid = false;
  } else {
    errorMobilePhone.innerHTML = "";
  }

  if (!regexPhone.test(homephone.value)) {
    errorHomePhone.innerHTML = "Please enter a valid 11-digit home phone number";
    isValid = false;
  } else {
    errorHomePhone.innerHTML = "";
  }

  return isValid;
}
