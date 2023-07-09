<?php
// regex
$regexName = "/^[A-Za-z ]+$/";
$regexMatricno = "/^[A-Za-z0-9]+$/";
$regexPhone = "/^[0-9]{11}$/";

// error in input
$errors = array();
$errorName = "";
$errorMatricno = "";
$errorCurrAddr = "";
$errorHomeAddr = "";
$errorEmail = "";
$errorMobilePhone = "";
$errorHomePhone = "";

// validate input
if (!preg_match($regexName, $_POST["name"])) {
  $errorName = "Please enter a valid name (only letters and spaces allowed)";
  array_push($errors, $errorName);
}
if (!preg_match($regexMatricno, $_POST["matricno"])) {
  $errorMatricno = "Please enter a valid matric number (only letters and digits allowed)";
  array_push($errors, $errorMatricno);
}
if ($_POST["currentaddress"] === "") {
  $errorCurrAddr = "Please enter your current address";
  array_push($errors, $errorCurrAddr);
}
if ($_POST["homeaddress"] === "") {
  $errorHomeAddr = "Please enter your home address";
  array_push($errors, $errorHomeAddr);
}
if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) || !strpos($_POST["email"], "@gmail.com")) {
  $errorEmail = "Please enter a valid Gmail account";
  array_push($errors, $errorEmail);
}
if (!preg_match($regexPhone, $_POST["mobilephone"])) {
  $errorMobilePhone = "Please enter a valid 11-digit mobile phone number";
  array_push($errors, $errorMobilePhone);
}
if (!preg_match($regexPhone, $_POST["homephone"])) {
  $errorHomePhone = "Please enter a valid 11-digit home phone number";
  array_push($errors, $errorHomePhone);
}

// IF no errors, displays the input values
if (count($errors) == 0) {
  echo "<h2>Student Details</h2>";
  echo "<p><strong>Name:</strong> " . $_POST["name"] . "</p>";
  echo "<p><strong>Matric No:</strong> " . $_POST["matricno"] . "</p>";
  echo "<p><strong>Current Address:</strong> " . $_POST["currentaddress"] . "</p>";
  echo "<p><strong>Home Address:</strong> " . $_POST["homeaddress"] . "</p>";
  echo "<p><strong>Email:</strong> " . $_POST["email"] . "</p>";
  echo "<p><strong>Mobile Phone No:</strong> " . $_POST["mobilephone"] . "</p>";
  echo "<p><strong>Home Phone No:</strong> " . $_POST["homephone"] . "</p>";
}

// ELSE, displays error messages
else {
  echo "<h2>Errors:</h2>";
  foreach ($errors as $error) {
    echo "<p>" . $error . "</p>";
  }
}
?>
