<?php
session_start();


if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'chair') {
    header("Location: index.php");
    exit;
}


$username = $_SESSION['role'] === 'chair' ? 'Chair User' : '';


if (isset($_POST['logout'])) {
    session_destroy(); 
    header("Location: index.php"); 
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome, Chair</title>
</head>
<body>
    <h2>Welcome, <?php echo $username; ?></h2>
    <p>This is the Chair page.</p>
    <form method="post">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>
