<?php
session_start();
?>
<meta charset = "utf8">

<?php
$tName = "a1093328";
$tPassword = "a1093328";

$sName = $_GET["sName"];
$sPassword = $_GET["sPassword"];

echo $sName."<br/>".$sPassword."<br/>";

if($tName == $sName && $tPassword == $sPassword){
    //echo "登入成功";
    $_SESSION["check"] = "Yes";
    header("Location:success.php");
}else{
    //echo "登入失敗";
    $_SESSION["check"] = "No";
    header("Location:fail.php");
}
ob_flush(); //暫存
// echo $sName."".$sPassword;

?>