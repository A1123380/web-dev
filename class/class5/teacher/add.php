<html>

<head>
<meta charset='utf-8'>
</head>

<?php
$sName=$_POST['sName'];
$sAddress=$_POST['sAddress'];
$sBday=$_POST['sBday'];

$link = mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'school');  // 預設使用的資料庫名稱
mysqli_set_charset($link, 'utf8');

$sql = "INSERT INTO info (name, address, birthday) VALUES ('$sName','$sAddress','$sBday')";
if(mysqli_query($link, $sql)){
    header("Location:dbtest.php");
}else{

}



?>