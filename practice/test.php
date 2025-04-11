<?php
?>

<html>
<head>
    <meta charset='utf-8'>
    <title>HI</title>
</head>  
<body>
<form action="x.php" method="post">    
please input your name<input type="text" name="userName"><br>
please input your password<input type="password" name="userPassword"><br>
<input type="submit"><br>

<?php
date_default_timezone_set("Asia/Taipei");
echo time();
echo "<br>";
echo "time now:";
echo date("Y-m-d H:i:s");
?>
</form>
</body>
</html>