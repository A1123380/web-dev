<html>
<head>
    <meta charset='utf-8'>
    <title>會員註冊</title>
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
            text-align: left;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"], input[type="email"], input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 2px solid #d9a60c;
            background: transparent;
            color: #4a3d2f;
            font-size: 16px;
            border-radius: 5px;
            outline: none;
        }
        button {
            padding: 10px 20px;
            background-color: #d9a60c;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 5px;
            border: none;
        }
        button:hover {
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
    <h2>會員註冊</h2>
    <form action="sendmail.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="uName">Name</label>
        <input type="text" id="uName" name="uName" required>
    </div>
    <div class="form-group">
        <label for="uEmail">Email</label>
        <input type="email" id="uEmail" name="uEmail" required>
    </div>
    <div class="form-group">
        <label for="photo">Photo (JPG/PNG)</label>
        <input type="file" id="photo" name="Photo" accept=".jpg,.jpeg,.png" required>
    </div>
    <button type="submit">Register</button>
</form>
</div>

</body>
</html>

