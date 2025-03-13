<?php

$uName = $_POST["uName"];
$uEmail = $_POST["uEmail"];
$uPhone = $_POST["uPhone"];
$suggestions = $_POST["suggestions"];
$gender = $_POST["gender"];  // 接收性別資料

echo "Your name is: " . nl2br(htmlentities(strip_tags($uName))) . "<br>";
echo "Your email is: " . nl2br(htmlentities(strip_tags($uEmail))) . "<br>";
echo "Your phone is: " . nl2br(htmlentities(strip_tags($uPhone))) . "<br>";
echo "Your suggestion is: " . nl2br(htmlentities(strip_tags($suggestions))) . "<br>";
echo "Your gender is: " . nl2br(htmlentities(strip_tags($gender))) . "<br>";

// 檢查表單資料是否存在，避免 undefined index 錯誤
//$uName = isset($_POST["uName"]) ? $_POST["uName"] : "未提供";
//$uEmail = isset($_POST["uEmail"]) ? $_POST["uEmail"] : "未提供";
//$uPhone = isset($_POST["uPhone"]) ? $_POST["uPhone"] : "未提供";
//$suggestions = isset($_POST["suggestions"]) ? $_POST["suggestions"] : "未提供";

// 防止 XSS 攻擊
//echo "Your name is: " . htmlspecialchars($uName) . "<br>";
//echo "Your email is: " . htmlspecialchars($uEmail) . "<br>";
//echo "Your phone is: " . htmlspecialchars($uPhone) . "<br>";
//echo "Your suggestion is: " . htmlspecialchars($suggestions) . "<br>";

?>