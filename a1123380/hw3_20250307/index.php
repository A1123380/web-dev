<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>迎新活動</title>
    <style>
        body {
            display: flex;/*  Flexbox 控制內容排列 */
            justify-content: center;/* 內容水平置中 */
            align-items: center;/* 內容垂直置中 */
            height: 100vh;
            margin: 0;/* 外邊距 */
            text-align: center;/* 文字置中 */
            font-family: Arial, sans-serif;
            background: #fff8e1;
            color: #4a3d2f;
        }
        .container {
            max-width: 600px;
            padding: 20px;/* 內邊距 */
        }
        img {
            width: 100%;
            max-width: 500px;
            border-radius: 10px;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: #f6be11;
            color: #4a3d2f;
            text-decoration: none; /* 移除超連結底線 */
            border-radius: 5px;
            font-weight: bold;
        }
        a:hover {
            background: #d9a60c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>歡迎來到迎新活動！</h1>
        <p>我們為新生準備了一系列精彩活動，幫助大家認識彼此，並了解校園環境。</p>
        <img src="images/cover.avif" alt="迎新活動圖片">
        <br>
        <a href="schedule.php">查看迎新活動行程與報名</a>
    </div>
</body>
</html>
