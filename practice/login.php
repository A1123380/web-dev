<?php
session_start();
?>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Login_test</title>
    <style>
        body{
            text-align: center;
        }
        .form-group{
            display: inline-block;
            width: 180px;
            text-align: right;
        }
        .form-label{
            margin-bottom:15px;
            border-style: solid; /* 要加上邊框樣式才會顯示顏色 */
            border-color: #000000;
            border-radius: 55px;
        }
    </style>
    </head>
    <body>
        <?php
        echo "<h1>Login test</h1>";
        echo "<form action='logincheck.php' method='post'>";
        echo "<div class ='form-group'>";
        echo "<div class='form-label'>Please input your name:</label>";
        echo "<input type='text' name='userName'>";
        echo "</div>";
        echo "<br>";

        echo "Please input your password:<input type='password' name='userPassword'>";
        echo "<br>";
        echo "<input type=submit>";
        echo "</form>";
        ?>
    </body>
</html>