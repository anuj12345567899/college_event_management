<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>

<h2>Login</h2>
<form action="php/login.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <button type="submit">Login</button>
</form>

<?php include('includes/footer.php'); ?>
