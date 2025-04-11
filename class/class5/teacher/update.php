<html>
<head>
<meta charset='utf-8'>
</head>
<?php
$no=$_GET['no'];
$link = mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'school');  // 預設使用的資料庫名稱

$sql = "SELECT * FROM info WHERE no='$no'";
mysqli_set_charset($link, 'utf8');

if ( $result = mysqli_query($link, $sql)){
    while( $row = mysqli_fetch_assoc($result)){ 
        $name=$row["name"];
        $address=$row["address"];
        $birthday=$row["birthday"];
    }
    }
?>
<form action='updateEx.php' method='POST'>
<input type="hidden" name='no' value='<?php echo $no?>'>
Please input your name:<input type="text" name='sName' value='<?php echo $name?>'><br/>
Please input your address:<input type="text" name='sAddress' value='<?php echo $address?>'><br/>
Please input your Birthday:<input type="date" name='sBday' value='<?php echo $birthday?>'><br/>
<input type="submit">
</form>