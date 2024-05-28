<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>

<h2>Register</h2>
<form action="php/register.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <button type="submit">Register</button>
</form>

<?php include('includes/footer.php'); ?>
