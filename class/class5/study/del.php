<!DOCTYPE html>
<html lang="zh-tw">
    <head>
        <meta charset='utf-8'>
        <meta name="viewport", content="width=device-width">
    </head>
<?php

$no=$_GET["no"];

$link = mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  //s 密碼
    'school');  // 預設使用的資料庫名稱

mysqli_set_charset($link, 'utf8');

$sql = "DELETE FROM info WHERE no='$no'";

if(mysqli_query($link, $sql)){
    header("Location: dbtest.php");
}else{

}

?>

</html>