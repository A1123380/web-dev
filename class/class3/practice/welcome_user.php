<?php
session_start();
?>
<html>
<head></head>
<body>
    <?php
        if (isset($_SESSION["check"]) && ($_SESSION["check"] == 1 )) {
            echo "<h1>Welcome user</h1><br>";
            echo "<a href='login.php'>Logout</a>";
        } else {
            echo "illegal user!";
            header("Refresh:2;url=login.php"); 
        }
    ?>
</body>
</html>
