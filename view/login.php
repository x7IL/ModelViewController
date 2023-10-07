<?php include 'header.php'; ?>

<h2>Login</h2>
<form action="userController.php?action=login" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" required>
    <label for="password">Password:</label>
    <input type="password" name="password" required>
    <input type="submit" value="Login">
</form>

<?php include 'footer.php'; ?>
