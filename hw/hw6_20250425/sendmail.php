<?php
$uName = isset($_POST["uName"]) ? trim($_POST["uName"]) : '';
$uEmail = isset($_POST["uEmail"]) ? trim($_POST["uEmail"]) : '';

if (empty($uName) || empty($uEmail)) {
    die("請確實填寫姓名與電子郵件");
}
$target_dir = "assets/image/";
$imageFileType = strtolower(pathinfo($_FILES["Photo"]["name"], PATHINFO_EXTENSION));

$allowed_types = array("jpg", "jpeg", "png");
if (!in_array($imageFileType, $allowed_types)) {
    die("僅允許上傳 JPG 或 PNG 檔案");
}

if (!is_dir($target_dir)) {
    mkdir($target_dir, 0755, true);
}

$newFileName = uniqid('img_') . '.' . $imageFileType;
$target_file = $target_dir . $newFileName;

if (move_uploaded_file($_FILES["Photo"]["tmp_name"], $target_file)) {
    echo "圖片上傳成功<br>";
} else {
    die("圖片上傳失敗");
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myapp";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("資料庫連線失敗: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO users (name, email, photo) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $uName, $uEmail, $target_file);

if ($stmt->execute()) {
    echo "用戶資料已成功儲存<br>";
} else {
    die("資料儲存失敗: " . $stmt->error);
}

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
    $mail->Username   = 'example@mail.com';
    $mail->Password   = '';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;
    $mail->CharSet    = 'UTF-8';

    $mail->setFrom('example@mail.com', '網站管理員');
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

$stmt->close();
$conn->close();
?>


