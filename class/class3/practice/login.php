<?php
if (isset($_COOKIE["userName"])) {
    echo "Welcome back, " . $_COOKIE["userName"] . "!<br>";
} else {
    echo "Welcome! Please log in.<br>";
}
?>

<html>
<head></head>
<body>
    <h1>Login</h1>
    <form action="logincheck.php" method="post">
        Please input your username:<input type="text" name="userName"><br>
        Please input your password:<input type="password" name="userPwd"><br>
        <input type="submit"><br>
    </form>
</body>
</html>
