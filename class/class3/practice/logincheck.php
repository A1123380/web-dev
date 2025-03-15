<?php
session_start();
?>

<?php
$defaultName="user";
$defaultPwd="123456";
$adminName="admin";
$adminPwd="654321";

$userName=$_POST["userName"];
$userPwd=$_POST["userPwd"];

if ($defaultName == $userName && $defaultPwd == $userPwd) {
    echo "Login success";
    $_SESSION["check"] = 1;
    setcookie("userName", $userName, time() + 10); // 設置Cookie10 秒過期
    header("Location: welcome_user.php");
    exit();
}
else if ($userName == $adminName && $userPwd == $adminPwd) {
    echo "Login success, admin";
    $_SESSION["check"] = 2;
    setcookie("userName", $userName, time() + 10); // 設置Cookie10 秒過期
    header("Location: welcome_admin.php");
    exit();
}
else {
    echo "Login failed, will send you back to login again";
    header("Refresh:3;url=login.php");
    exit();
}
?>
