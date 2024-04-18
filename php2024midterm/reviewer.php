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


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['comment'])) {
    
    $comment = $_POST['comment'];
    
    header("Location: showreview.php?comment=$comment");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviewer Page</title>
</head>
<body>
    <h2>Reviewer您好，歡迎進入論文評論網頁</h2>
    
    <form method="post">
        <label for="comment">論文評論評語:</label><br>
        <textarea id="comment" name="comment" rows="4" cols="50"></textarea><br><br>
        <input type="submit" value="提交">
    </form>
    
    <form method="post">
        <input type="submit" name="logout" value="登出">
    </form>
</body>
</html>

