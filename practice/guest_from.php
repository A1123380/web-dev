<?php
session_start();
?>
<html>
    <head>
        <meta charset='utf-8'>
    </head>
<body>
    <?php
    if (isset($_SESSION["check"])){
        echo "welcome <br>";

        echo "<form action='guest_info.php' method='GET'>";
        echo "<input type='hidden' name='uSecret' value='hahaha'><br>";
        echo "please input your name:<input type='text' name='uName'><br>";      echo "Please input your password:<input type='password' name='uPwd'><br>";
        echo "Please input your email:<input type='email' name='uEmail'><br>";
        echo "<br>";
        echo "<input type='submit'><input type='reset'>";
        echo "<br>";
        echo "</form>";
    }else{
        echo "failed";
        header ("refresh:3;url='test.php'");
    }
    ?>
</body>
</html>
