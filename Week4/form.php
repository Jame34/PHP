<!DOCTYPE html>
<html>
<head>
    <title>國立高雄大學資訊管理學系晚會報名表格</title>
</head>
<h2>資管晚會報名</h2>
    <form action="result.php" method="post">
    姓名：<input type="text" name="name" value="" placeholder="輸入姓名" id="name">
    <br/>
    <br/>
    電子郵件<input type="email" name="email" placeholder="輸入郵件地址" required id="email">
    <br/>
    <br/>
    性別：
    <input type="radio" name="gender" value="男" required >男
    <input type="radio" name="gender" value="女">女
    <br/>
    <br/>
    年級：
    <select name="age" required id="age">
        <option value="大一">大一</option>
        <option value="大二">大二</option>
        <option value="大三">大三</option>
        <option value="大四">大四</option>
    </select>
    <br/>
    <br/>
    飲食習慣：
    <input type="radio" name="vegetarian" value="素">素
    <input type="radio" name="vegetarian" value="葷" selected required>葷
    <br/>
    <br/>
    <label for="size">衣服尺寸：</label>
    <select name="size" id="size">
    <option value="XS">XS</option>
    <option value="S">S</option>
    <option value="M" selected>M</option>
    <option value="L">L</option>
    <option value="XL">XL</option>
    <option value="XXL">XXL</option>
    </select><br><br>
    <input type="submit" value="提交報名">
    <input type="reset" value="寫錯了">
    </form>
    

</html>
