<?php

$sName = $_POST["sName"];
$sDept = $_POST["sDept"];

//連接資料庫
$link = @mysqli_connect(
    'localhost', //MySQL主機名稱
    'root',      //使用者名稱
    '', //密碼
    'test_php'); //預設使用的資料庫名稱

if(!$link)
    die("無法開啟資料庫!<br/>");
else
    echo "資料庫開啟成功!<br/>";

//SQL語法
$SQL = "SELECT * FROM test";

//送出查詢
if($result = mysqli_query($link, $SQL)){
    echo "<br/>新增成功";
};
echo "<br/><a href = '0425_index.php'>查看資料庫資料</a>";
?>