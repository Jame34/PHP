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


$title = $_GET['title'] ?? 'No title provided';
$author = $_GET['author'] ?? 'No author provided';
$email = $_GET['email'] ?? 'No email provided';
$abstract = $_GET['abstract'] ?? 'No abstract provided';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author Page - Show Paper</title>
</head>
<body>
    <h2>Author您好,這是你提交的論文摘要。</h2>

    <h3>提交之論文摘要:</h3>
    <p><strong>論文標題:</strong> <?php echo $title; ?></p>
    <p><strong>作者姓名:</strong> <?php echo $author; ?></p>
    <p><strong>作者EmaiL:</strong> <?php echo $email; ?></p>
    <p><strong>論文摘要:</strong> <?php echo $abstract; ?></p>
    
    <form method="post">
        <input type="submit" name="logout" value="登出">
    </form>
</body>
</html>
