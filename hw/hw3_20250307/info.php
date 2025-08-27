<?php
$uName = $_POST["uName"];
$uEmail = $_POST["uEmail"];
$uPhone = $_POST["uPhone"];
$suggestions = $_POST["suggestions"];
$gender = $_POST["gender"];

function sanitize($input) {
    return nl2br(htmlentities(strip_tags($input)));
}
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>報名資訊確認</title>
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
        h2 {
            color: #d9a60c; 
            margin-bottom: 20px;
        }
        .back-btn {
            padding: 10px 20px;
            border: none;
            background-color: #a28c6a;
            color: #4a3d2f;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
        }
        .back-btn:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>您的報名資訊</h2>
        <?php
        echo "您的姓名: " . sanitize($uName) . "<br>";
        echo "您的電子郵件: " . sanitize($uEmail) . "<br>";
        echo "您的電話: " . sanitize($uPhone) . "<br>";
        echo "您的性別: " . sanitize($gender) . "<br>";
        echo "您的建議: " . sanitize($suggestions) . "<br>";
        ?>
        <a href="index.php" class="back-btn">回到報名頁面</a>
    </div>
</body>

</html>
