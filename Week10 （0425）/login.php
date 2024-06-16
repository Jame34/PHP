<html>
<head>
<meta charset = "utf8">
</head>

<form action = "check.php" method = "get">
帳號：<input type = "text" name = "sName" placeholder = "Please input your account"><br/>
密碼：<input type = "password" name = "sPassword" placeholder = "Please input your password" required><br/>

<input type = "submit">
</form>
<?php
//header("Refresh:1") 每一秒更新一次網頁
date_default_timezone_set("Asia/Taipei");
echo date("y/m/d h:i:sa");
?>

</html>