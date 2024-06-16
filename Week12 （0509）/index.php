<meta charest = 'utf8'>

<?php
//連結資料庫
$link = @mysqli_connect(
    'localhost', //MySQL主機名稱
    'root',      //使用者名稱
    '', //密碼
    'test_php'); //預設使用的資料庫名稱

    if(!$link)
        die("無法開啟資料庫！<br/>");
    else
        echo "資料開啟成功！<br/>";
        
//SQL語法
$SQL = "SELECT * FROM test";

//送出查詢
$result = mysqli_query($link, $SQL);

//結果轉陣列
echo "<table border = '1'>";
while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
        //echo "<td>".$row["name"]."</td><td>".$row["studentID"]."</td><td>".$row["height"]."</td><td>刪除</td><td>修改</td>";
        echo "<td>".$row["name"]."</td><td>".$row["studentID"]."</td><td>".$row["height"]."</td><td><a href='del.php?name=".$row["name"]."'>刪除</a></td><td>修改</td>";
        echo "</tr>"
}
mysqli_close($link);
    
?>