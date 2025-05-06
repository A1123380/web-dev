<?php
// 接收表單資料
$uName = isset($_POST["uName"]) ? trim($_POST["uName"]) : '';
$uEmail = isset($_POST["uEmail"]) ? trim($_POST["uEmail"]) : '';

// 如果姓名或email沒填，直接中止
if (empty($uName) || empty($uEmail)) {
    die("請確實填寫姓名與電子郵件");
}
// 處理圖片上傳
$target_dir = "assets/image/";
$imageFileType = strtolower(pathinfo($_FILES["Photo"]["name"], PATHINFO_EXTENSION));

// 允許 jpg/png
$allowed_types = array("jpg", "jpeg", "png");
if (!in_array($imageFileType, $allowed_types)) {
    die("僅允許上傳 JPG 或 PNG 檔案");
}

// 確保資料夾存在
if (!is_dir($target_dir)) {
    mkdir($target_dir, 0755, true);
}

// 產生唯一檔名
$newFileName = uniqid('img_') . '.' . $imageFileType;
$target_file = $target_dir . $newFileName;

// 移動檔案
if (move_uploaded_file($_FILES["Photo"]["tmp_name"], $target_file)) {
    echo "圖片上傳成功<br>";
} else {
    die("圖片上傳失敗");
}

// 3. 連接資料庫 (MySQL)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myapp";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("資料庫連線失敗: " . $conn->connect_error);
}

// 儲存資料 (photo 存檔案路徑)
$stmt = $conn->prepare("INSERT INTO users (name, email, photo) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $uName, $uEmail, $target_file);

if ($stmt->execute()) {
    echo "用戶資料已成功儲存<br>";
} else {
    die("資料儲存失敗: " . $stmt->error);
}

// 發送確認信 (PHPMailer)
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'monkey60404@gmail.com';
    $mail->Password   = 'gahd frjf clff zxma';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;
    $mail->CharSet    = 'UTF-8';

    $mail->setFrom('monkey60404@gmail.com', '網站管理員');
    $mail->addAddress($uEmail, $uName);

    $subject = "會員註冊成功通知";
    $content = nl2br("親愛的 '$uName'，您好！<br><br>您已成功註冊本網站會員。<br>感謝您的加入！<br><br>此信件為系統自動發送，請勿回覆。");

    $mail->isHTML(true);
    $mail->Subject = mb_encode_mimeheader($subject, "UTF-8");
    $mail->Body    = $content;
    $mail->AltBody = strip_tags(str_replace("<br>", "\n", $content));

    $mail->send();
    echo "確認信已寄出到 $uEmail";
} catch (Exception $e) {
    echo "信件無法寄出. 錯誤: {$mail->ErrorInfo}";
}

// 關閉資料庫
$stmt->close();
$conn->close();
?>
