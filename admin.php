<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>

<h2>Admin Panel</h2>
<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit();
}
echo "Welcome, " . $_SESSION['username'];
?>
<p>This is the admin panel.</p>

<?php include('includes/footer.php'); ?>
