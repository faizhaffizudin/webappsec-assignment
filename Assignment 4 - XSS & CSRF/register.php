<?php
include 'header.php';

// connect database
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "webappsec";  
  
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}

// Retrieve registration form data
$email = $_POST['email'];
$password = $_POST['password'];
$hashed = password_hash($password, PASSWORD_DEFAULT);

// sanitize
$email = stripcslashes($email);  
$password = stripcslashes($password);  
$username = mysqli_real_escape_string($con, $email);  
$password = mysqli_real_escape_string($con, $password);  

// SQL query to insert the user into the database
$sql = "INSERT INTO login (email, password) VALUES ('$email', '$password')";
if (mysqli_query($con, $sql)) {
    echo "Registration successful";
    $_SESSION['email'] = $username;
    header('Location: loginforms.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
    // CSRF token is valid, process the form submission
} else {
    echo 'Token invalid. Operation not allowed.<br>';
}

// Close the database connection
mysqli_close($con);
?>