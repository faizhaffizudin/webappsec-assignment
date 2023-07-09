<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log In</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Log In</h1>

    <form action="login.php" method="POST">
    <input type="hidden" name="csrf_token" value="<?php echo $csrfToken; ?>">

        <div class="form-group">
        <label>Email:</label>
        <input type="email" name="email" required>
        <br>

        <label>Password:</label>
        <input type="password" name="password" style="width: 300px" required>
        <br><br>

        <input type="submit" value="Login">
        </div>
        <br><br>

        <p>No account? Register <a href="registerforms.php">here</a></p>
    </form>

</body>
</html>