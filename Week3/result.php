<!DOCTYPE html>
<html>
<head>
    <title>報名結果</title>
</head>
<body>
    <h2>報名成功！</h2>
    <?php
    
    if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["gender"])&& isset($_POST["age"]) && isset($_POST["vegetarian"]) && isset($_POST["size"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        $age = $_POST["age"];
        $vegetarian = $_POST["vegetarian"];
        $size = $_POST["size"];

        echo "<p>姓名：$name</p>";
        echo "<p>電子郵件：$email</p>";
        echo "<p>性別：$gender";
        echo "<p>年級：$age";
        echo "<p>飲食習慣：$vegetarian</p>";
        echo "<p>衣服尺寸：$size</p>";
    } else {
        echo "<p>沒有收到有效的報名信息。</p>";
    }
    ?>
</body>
</html>
