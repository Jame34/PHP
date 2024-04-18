<?php
session_start();


if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'reviewer') {
    header("Location: index.php"); 
    exit;
}


$username = $_SESSION['role'] === 'reviewer' ? 'Reviewer User' : '';


if (isset($_POST['logout'])) {
    session_destroy(); 
    header("Location: index.php"); 
    exit;
}


$comment = $_GET['comment'] ?? 'No comment provided';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviewer Page - Show Review</title>
</head>
<body>
    <h2>Reviewer您好，這是你評論的內容</h2>
    <h3>已評論內容:</h3>
    <p><?php echo $comment; ?></p>
    
    <form method="post">
        <input type="submit" name="logout" value="登出">
    </form>
</body>
</html>
