<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>迎新活動行程與報名</title>
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
            margin-bottom: 20px;
        }
        .schedule-table {
            width: 100%;
            margin: 20px 0;
            border-collapse: collapse;
        }
        .schedule-table th, .schedule-table td {
            padding: 10px;
            text-align: center;
        }
        .schedule-table th {
            background-color: #d9a60c;
            color: white;
        }
        .schedule-table td {
            background-color: #f6e7b5;
        }
        .form-group {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            margin-bottom: 15px;
        }
        label {
            width: 90px;
            text-align: right;
            margin-right: 10px;
            font-weight: bold;
        }
        input, textarea {
            border: none;
            padding: 8px;
            width: 70%;
            border-bottom: 2px solid #d9a60c;
            background: transparent;
            color: #4a3d2f;
            font-size: 16px;
            outline: none;
        }
        input::placeholder, textarea::placeholder {
            color: #a28c6a;
        }
        textarea {
            resize: none;
            height: 100px;
        }
        .btn-container {
            margin-top: 20px;
        }
        .submit-btn, .back-btn {
            padding: 10px 20px;
            border: none;
            background-color: #d9a60c;
            color: #4a3d2f;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin: 5px;
            border-radius: 5px;
        }
        .back-btn {
            background-color: #a28c6a;
        }
        .submit-btn:hover, .back-btn:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>迎新活動行程</h2>
        <table class="schedule-table">
            <tr>
                <th>時間</th>
                <th>活動內容</th>
            </tr>
            <tr>
                <td>09:00 - 09:30</td>
                <td>報到與入場</td>
            </tr>
            <tr>
                <td>09:30 - 10:00</td>
                <td>開場致詞</td>
            </tr>
            <tr>
                <td>10:00 - 12:00</td>
                <td>團隊遊戲時間</td>
            </tr>
            <tr>
                <td>12:00 - 13:30</td>
                <td>午餐時間</td>
            </tr>
            <tr>
                <td>13:30 - 15:00</td>
                <td>學長姐分享與問答</td>
            </tr>
            <tr>
                <td>15:00 - 16:00</td>
                <td>迎新活動結束與大合照</td>
            </tr>
        </table>

        <h2>報名表單</h2>
        <form action="schedule.php" method="post">
            <div class="form-group">
                <label for="name">您的姓名:</label>
                <input type="text" id="name" name="name" placeholder="請輸入姓名" required>
            </div>
            <div class="form-group">
                <label for="email">電子郵件:</label>
                <input type="email" id="email" name="email" placeholder="請輸入電子郵件" required>
            </div>
            <div class="form-group">
                <label for="phone">聯絡電話:</label>
                <input type="text" id="phone" name="phone" placeholder="請輸入電話號碼" required>
            </div>
            <div class="form-group">
                <label for="suggestions">其他建議:</label>
                <textarea id="suggestions" name="suggestions" placeholder="請留下您的建議或意見"></textarea>
            </div>
            <div class="btn-container">
                <button type="submit" class="submit-btn">報名提交</button>
                <a href="index.php"><button type="button" class="back-btn">回到首頁</button></a>
            </div>
        </form>
    </div>

</body>
</html>
