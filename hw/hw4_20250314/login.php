<?php
if (isset($_COOKIE["userName"])) {
    echo "Welcome back, " . $_COOKIE["userName"] . "!<br>";
} else {
    echo "Welcome! Please log in.<br>";
}

$errorMessage = '';
if (isset($_GET['error']) && $_GET['error'] == 'true') {
    $errorMessage = "Login failed! Please check your username or password.";
}
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background-color: #fdf6e3;
            font-family: Arial, sans-serif;
            color: #4a3d2f;
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: #fff5d7;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        input[type="text"], input[type="password"] {
            width: 70%;
            padding: 10px;
            border: 2px solid #d9a60c;
            background: transparent;
            color: #4a3d2f;
            font-size: 16px;
            border-radius: 5px;
            outline: none;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #d9a60c;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 5px;
            border: none;
        }
        input[type="submit"]:hover {
            opacity: 0.8;
        }
        .error-message {
            color: red;
            font-weight: bold;
            background-color: #ffcccc;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        
        <?php if ($errorMessage): ?>
            <div class="error-message"><?= $errorMessage; ?></div>
        <?php endif; ?>

        <form action="logincheck.php" method="post">
            <div class="form-group">
                Please input your username: <input type="text" name="userName"><br>
            </div>
            <div class="form-group">
                Please input your password: <input type="password" name="userPwd"><br>
            </div>
            <input type="submit"><br>
        </form>
    </div>
</body>
</html>

