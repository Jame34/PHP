<?php

$No=$_POST["uNo"];
echo $No;

//連接資料庫
$link = @mysqli_connect(
    'localhost',
    'root',
    '',
    'school');

//SQL語法
$SQL = "UPDATE * student SET Name = '$Name', Department' WHERE No = '$No'";
if($reslt = mysqli_query($link,$SQL)){
    echo ""
}
?>