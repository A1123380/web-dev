<?php
session_start();
?>
<html>
    <head></head>
    <body>
        <?php
            if(isset($_SESSION["check"]) && $_SESSION["check"] == 2) {
                echo "<h1>Welcome admin</h1><br>";
                echo "<a href='welcome_user.php'>Go_user</a><br>";
                echo "<a href='login.php'>Logout</a><br>";
            } else {
                echo "Illegal admin!";
                header("Refresh:2;url=login.php");
                exit();
            }
        ?>
    </body>
</html>