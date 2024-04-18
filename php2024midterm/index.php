<?php
session_start();


$username = isset($_COOKIE['username']) ? $_COOKIE['username'] : '';


if (isset($_SESSION['role'])) {
    switch ($_SESSION['role']) {
        case 'chair':
            header("Location: chair.php");
            exit;
        case 'reviewer':
            header("Location: reviewer.php");
            exit;
        case 'author':
            header("Location: author.php");
            exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <h1>高大資管論文投稿系統</h1>
    <form action="check.php" method="post">
    
    請選擇您的角色:<select id="role" name="role">
            <option value="chair">Chair</option>
            <option value="reviewer">Reviewer</option>
            <option value="author">Author</option>
        </select><br><br>
        賬號：<input type="text" name="username" value="<?php echo isset($_COOKIE['username']) ? $_COOKIE['username'] : ''; ?>"><br><br>
        密碼：<input type="password" id="password" name="password"><br><br>
        <input type="submit" value="提交">
    </form>
</body>
</html>
