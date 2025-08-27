<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>迎新活動行程與報名</title>
</head>
<body>
    <div class="container">
        <h2>迎新活動行程</h2>
        <table>
            <tr><th>時間</th><th>活動內容</th></tr>
            <tr><td>09:00 - 09:30</td><td>報到與入場</td></tr>
            <tr><td>09:30 - 10:00</td><td>開場致詞</td></tr>
            <tr><td>10:00 - 12:00</td><td>團隊遊戲時間</td></tr>
            <tr><td>12:00 - 13:30</td><td>午餐時間</td></tr>
            <tr><td>13:30 - 15:00</td><td>學長姐分享與問答</td></tr>
            <tr><td>15:00 - 16:00</td><td>迎新活動結束與大合照</td></tr>
        </table>

        <h2>報名表單</h2>
        <form action="schedule.php" method="post">
            <div>
                <label for="name">您的姓名:</label>
                <input type="text" id="name" name="name" placeholder="請輸入姓名" required>
            </div>
            <div>
                <label for="email">電子郵件:</label>
                <input type="email" id="email" name="email" placeholder="請輸入電子郵件" required>
            </div>
            <div>
                <label for="phone">聯絡電話:</label>
                <input type="text" id="phone" name="phone" placeholder="請輸入電話號碼" required>
            </div>
            <div>
                <label for="suggestions">其他建議:</label>
                <textarea id="suggestions" name="suggestions" placeholder="請留下您的建議或意見"></textarea>
            </div>
            <div>
                <button type="submit">報名提交</button>
                <a href="index.php"><button type="button">回到首頁</button></a>
            </div>
        </form>
    </div>
</body>
</html>
