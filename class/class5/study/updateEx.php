<!DOCTYPE html>
<html lang="zh-tw">
    <head>
        <meta charset='utf-8'>
        <meta name="viewport", content="width=device-width, ini">
    </head>
<?php

$no=$_POST["no"];
$sName=$_POST["sName"];
$sAddress=$_POST["sAddress"];
$sBday=$_POST["sBday"];

$link = mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  //s 密碼
    'school');  // 預設使用的資料庫名稱

mysqli_set_charset($link, 'utf8');

$sql = "UPDATE info SET name='$sName', address='$sAddress', birthday='$sBday' WHERE no='$no'";
if(mysqli_query($link, $sql)){
    header("Location: dbtest.php");
}else{
}
?>
</html>