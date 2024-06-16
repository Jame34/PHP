<?php

$sNo = $_GET["No"];
echo $sNo;


$link = @mysqli_connect(
    'localhost', 
    'root',     
    '', 
    'test_php'); 


$SQL="DELECT FROM test WHERE NO = '$sNo'";


if($result = mtsqli_query($link, $SQL)){
    echo "<br/>刪除成功";
}
echo "<br/><a herf = '0425_index.php'>查看資料庫資料</a>";

?>