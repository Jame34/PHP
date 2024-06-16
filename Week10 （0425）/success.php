<?php
session_start();
?>

<html>
<meta charset="utf8">
<?php
//echo "登入成功";
if(isset($_SESSION["check"])){ //利用destory會產生notice，因此先判斷有沒有變數
    if($_SESSION["check"] == "Yes"){
        echo "歡迎進入網頁!"."<br/>";
        echo "<a href = 'form.php'>國立高雄大學資訊管理學系晚會報名表格</a>";
    }else{
        echo "非法進入網頁";
        echo "請重新登入";
        echo "請等待3秒再重新嘗試";
        header("Refresh:3 ; url = login.php");
    }
}else{
    echo "非法進入網頁";
    echo "請重新登入";
    echo "請等待3秒再重新嘗試";
    header("Refresh:3 ; url = login.php");
}
echo "歡迎登入此網頁";
?>
</html>