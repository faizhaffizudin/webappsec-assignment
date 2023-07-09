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

// CHECK EMAIL AND PASSWORD
$email = $_POST['email'];  
$password = $_POST['password'];
$hashed = password_hash($password, PASSWORD_DEFAULT);

// sanitize
$email = stripcslashes($email);  
$password = stripcslashes($password);  
$email = mysqli_real_escape_string($con, $email);  
$password = mysqli_real_escape_string($con, $password);

// // Prepare the statement for the stored procedure
// $stmt = mysqli_prepare($conn, "CALL User(?)");

// // Bind the parameter
// mysqli_stmt_bind_param($stmt, "s", $email);

// // Execute the stored procedure
// mysqli_stmt_execute($stmt);

// // Get the result set
// $result = mysqli_stmt_get_result($stmt);
    
// SQL query to insert the user into the database
$sql = "select * from login where email = '$email' and password = '$password'";  
$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
          
if($count == 1) {  
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['role'] = $row['role'];
    header("Location: index.php"); 
}  
else {  
    echo "<br><h2><center>Login failed. Try again.</h2></center>";
    echo "<center><a href='loginforms.php'>Back</a></center>"; 
} 

if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
    // CSRF token is valid, process the form submission
} else {
    echo 'Token invalid. Operation not allowed.<br>';
}

// Close the database connection
mysqli_close($con);

?>