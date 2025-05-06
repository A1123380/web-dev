<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Admin</title>
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
        button {
            padding: 10px 20px;
            background-color: #d9a60c;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 5px;
            border: none;
            margin: 10px;
        }
        button:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if (isset($_SESSION["check"]) && $_SESSION["check"] == 2) {
            echo "<h1>Welcome admin</h1><br>";
            echo "<form action='welcome_user.php' method='get'>
                    <button type='submit'>Go to User</button>
                  </form><br>";
            echo "<form action='login.php' method='get'>
                    <button type='submit'>Logout</button>
                  </form><br>";
        } else {
            echo "Illegal admin!";
            header("Refresh:2;url=login.php");
            exit();
        }
        ?>
    </div>
</body>
</html>
