<meta charset='utf8'>

<?php
$No = $_GET["no"];
//連接資料庫
$link = @mysqli_connect(  //@表示不顯示錯誤訊息
    'localhost',  //MySQL主機名稱 
    'root',       //使用者名稱 
    '',           //密碼
    'school'      //預設使用的資料庫名稱
);      

//SQL語法
$SQL = "SELECT * FROM student WHERE No='$No'";
if($result = mysqli_query($link, $SQL)){
    $row=mysqli_fetch_assoc($result);
    $Name=$row["name"];
    $studentID=$row["studentID"];
    $height=$row["height"];
}
?>

<form action="updatecheck.php" method="post">

編號:<?php echo $No ?><input type="hidden" name="no" value='<?php echo $No ?>'><br/>
姓名:<input type="text" name="name"><br/>
學號:<input type="text" name="studentID"><br/>
<input type="submit">

</form>