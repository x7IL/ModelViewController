<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
<h2>Register</h2>
<form action="userController.php?action=register" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" required>
    <label for="password">Password:</label>
    <input type="password" name="password" required>
    <input type="submit" value="Register">
</form>
</body>
</html>
