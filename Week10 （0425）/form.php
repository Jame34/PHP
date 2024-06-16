<!DOCTYPE html>
<html>
<head>
    <title>國立高雄大學資訊管理學系晚會報名表格</title>
</head>
<h2>資管晚會報名</h2>
    <form action="result.php" method="get">
    姓名：<input type="text" name="sName" value="" placeholder="輸入姓名" id="name">
    <br/>
    <br/>
    電子郵件<input type="email" name="sEmail" placeholder="輸入郵件地址" required id="email">
    <br/>
    <br/>
    性別：
    <input type="radio" name="sGender" value="男" required >男
    <input type="radio" name="sGender" value="女">女
    <br/>
    <br/>
    年級：
    <input type = "checkbox" name = "sGrade" value = "大一">大一
    <input type = "checkbox" name = "sGrade" value = "大二">大二
    <input type = "checkbox" name = "sGrade" value = "大三">大三
    <input type = "checkbox" name = "sGrade" value = "大四">大四
    <br/>

    飲食習慣：
    <input type="radio" name="sVegetarian" value="素">素
    <input type="radio" name="sVegetarian" value="葷" selected required>葷
    <br/>

    衣服尺寸：
    <input type = "radio" name = "sSize" value = "XS">XS
    <input type = "radio" name = "sSize" value = "S">S
    <input type = "radio" name = "sSize" value = "M">M
    <input type = "radio" name = "sSize" value = "L">L
    <input type = "radio" name = "sSize" value = "XL">XL
    <input type = "radio" name = "sSize" value = "XXL">XXL
    <br/> 
    <input type="submit" value="提交報名">
    <input type="reset" value="寫錯了">
    </body>
  <?php
        if(isset($_SESSION["check"])) {
            if($_SESSION["check"] == "No") {
                header("Location: fail.php");
            }
        } else {
            header("Location: fail.php");
        }
    ?>
</html>
    

</html>
