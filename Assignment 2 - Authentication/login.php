<?php
session_start();

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
$username = mysqli_real_escape_string($con, $email);  
$password = mysqli_real_escape_string($con, $password);  
    
// SQL query to insert the user into the database
$sql = "select * from login where email = '$email' and password = '$password'";  
$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
          
if($count == 1) {  
    $_SESSION['email'] = $username;
    header("Location: index.php"); 
}  
else {  
    echo "<br><h2><center>Login failed. Try again.</h2></center>";
    echo "<center><a href='login.html'>Back</a></center>"; 
} 

// Close the database connection
mysqli_close($con);

?>