<html>

<head>
<meta charset='utf-8'>
</head>

<form action='add.php' method='POST'>
    Please input your name<input type="text" name='sName'><br/>
    Please input your address<input type="text" name='sAddress'><br/>
    Please input your date<input type="date" name='sBday'><br/>
    <input type="submit"><br/>
</form>

<?php
$link = mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'school');  // 預設使用的資料庫名稱

$sql = "SELECT * FROM info";

mysqli_set_charset($link, 'utf8');

if ( $result = mysqli_query($link, $sql)){
    echo "<table border='1'>";
    while( $row = mysqli_fetch_assoc($result)){ 
        echo "<tr>";
        echo "<td>".$row["no"]."</td>"."<td>".$row["name"]."</td>"."<td>".$row["address"]."</td>"."<td>".$row["birthday"]."</td><td><a href='del.php?no=".$row["no"]."'>刪除</td><td><a href='update.php?no=".$row["no"]."'>修改</td></td><br>";
        echo "</tr>";
    }
echo "</table>";
    }

?>
</html>