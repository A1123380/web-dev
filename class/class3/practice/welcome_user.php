<?php
session_start();
?>
<html>
<head></head>
<body>
    <?php
        if (isset($_SESSION["check"])) {
            if ($_SESSION["check"] == 1) {
                echo "<h1>Welcome user</h1><br>";
            } else if ($_SESSION["check"] == 2) {
                echo "<h1>Welcome admin (User Mode)</h1><br>";
            }
            echo "<a href='login.php'>Logout</a><br>";
            if ($_SESSION["check"] == 2) {
                echo "<a href='welcome_admin.php'>Go to Admin Page</a><br>";
            }
        } else {
            echo "illegal user!";
            header("Refresh:2;url=login.php");
            exit();
        }
    ?>
</body>
</html>
