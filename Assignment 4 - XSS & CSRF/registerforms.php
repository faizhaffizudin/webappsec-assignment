<?php
include 'header.html';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Register</h1>

    <form action="register.php" method="POST">
    <input type="hidden" name="csrf_token" value="<?php echo $csrfToken; ?>">

        <div class="form-group">
        <label>Email:</label>
        <input type="email" name="email" required>
        <br>

        <label>Password:</label>
        <input type="password" name="password" style="width: 300px" required>
        <br><br>

        <input type="submit" value="Register">
        </div>
        <br><br>
    </form>

</body>
</html>