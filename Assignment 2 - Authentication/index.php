<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email']) && isset($_SESSION['password'])) {
    // User is not logged in, redirect to the login page
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student Details Form</title>
	<link rel="stylesheet" href="style.css">
	<script src="js/validation.js"></script>
</head>
<body>
	<h2>A. Student Details</h2>
	<form action="details.php" method="POST" onsubmit="return Validate()">
		
		<div class="form-group">
			<label for="name">Name (Legal/Official) :</label>
			<input type="text" id="name" name="name" pattern="[A-Za-z ]+" required>
		</div>
		<div id="errorName" class="error"></div>
		
		<div class="form-group">
			<label for="matricno">Matric No :</label>
			<input type="text" id="matricno" name="matricno" pattern="[A-Za-z0-9]+" required>
		</div>
		<div id="matricnoError" class="error"></div>
		
		<div class="form-group">
			<label for="currentaddress">Current Address :</label>
			<input type="text" id="currentaddress" name="currentaddress" required>
		</div>
		<div id="errorCurrentaddress" class="error"></div>
		
		<div class="form-group">
			<label for="homeaddress">Home Address :</label>
			<input type="text" id="homeaddress" name="homeaddress" required>
		</div>
		<div id="errorHomeaddress" class="error"></div>
		
		<div class="form-group">
			<label for="email">Email (Gmail Account) :</label>
			<input type="email" id="email" name="email" required>
		</div>
		<div id="errorEmail" class="error"></div>
		
		<div class="form-group">
			<label for="mobilephone">Mobile Phone No :</label>
			<input type="tel" id="mobilephone" name="mobilephone" pattern="[0-9]{10,11}" required>
		</div>
		<div id="errorMobilephone" class="error"></div>
		
		<div class="form-group">
			<label for="homephone">Home Phone No (Emergency) :</label>
			<input type="tel" id="homephone" name="homephone" pattern="[0-9]{10,11}" required>
		</div>
		<div id="errorHomephone" class="error"></div><br>
		
		<div class="form-group">
			<input type="submit" value="Submit">
		</div>
	</form>
</body>
</html>
