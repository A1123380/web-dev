<html>
    <head>
        <meta charset='utf-8'>
</head>
<?php
$link = @mysqli_connect(
    'localhost', //mysql host name
    'root', // username
    '', //password
    'school'); //default use database name

// test database link//

//   if (!mysqli_select_db($link,'school'))
//   die("無法開啟資料庫!<br/>");
//else
//   echo "資料庫：開啟成功！<br/>";


$sql = "SELECT * FROM info";
mysqli_set_charset($link, 'utf8'); // utf8

if ( $result = mysqli_query($link, $sql)){
    echo "<table border='1'>";
    while ( $row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["no"]."</td>".
             "<td>".$row["name"]."</td>".
             "<td>".$row["address"]."</td>".
             "<td>".$row["birthday"]."</td>".
             "</br>";
        echo "</tr>";
    }
    echo "<table/>";
}
?>
</html>