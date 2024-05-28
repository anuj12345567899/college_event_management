<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>

<h2>Dashboard</h2>
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
echo "Welcome, " . $_SESSION['username'];
?>
<p>This is the user dashboard.</p>

<?php include('includes/footer.php'); ?>
