<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'author') {
    header("Location: index.php"); 
    exit;
}


$username = $_SESSION['role'] === 'author' ? 'Author User' : '';


if (isset($_POST['logout'])) {
    session_destroy(); 
    header("Location: index.php"); 
    exit;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['title'], $_POST['author'], $_POST['email'], $_POST['abstract'])) {
    
    $title = $_POST['title'];
    $author = $_POST['author'];
    $email = $_POST['email'];
    $abstract = $_POST['abstract'];
    
    header("Location: showpaper.php?title=$title&author=$author&email=$email&abstract=$abstract");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author Page</title>
</head>
<body>
    <h2>Author您好,歡迎進入論文投稿網頁</h2>
    
    <form method="post">
        論文標題：<input type="text" id="title" name="title" required><br><br>
        作者姓名：<input type="text" id="author" name="author" required><br><br>
        作者Email:<input type="email" id="email" name="email" required><br><br>
        論文摘要：<textarea id="abstract" name="abstract" rows="4" cols="50" required></textarea><br><br>
        
        <input type="submit" value="提交">
    </form>
    
    <form method="post">
        <input type="submit" name="logout" value="登出">
    </form>
</body>
</html>
