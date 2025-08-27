<?php
session_start();
?>
<h1>Login Result</h1>

<?php

$defaultName="nuk";
$defaultPwd="123456";
$userName=$_POST["userName"];
$userPwd=$_POST["userPwd"];

if ($defaultName == $userName && $defaultPwd == $userPwd) {
    echo "Login success";
    $_SESSION["check"]=1;
    $cookiedate=strtotime("+5 seconds",time());
    setcookie("userName",$defaultName,$cookiedate);
    //strtotime()過期時間
    header("Location: form.php");
} else {
    echo "Login failed, will send you back to login again";
    header("Refresh:3;url='login.php'");
}
?>