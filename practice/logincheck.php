<?php
session_start();

$guestName="guest";
$guestPassword="123";
$adminName="admin";
$adminPassword="123";
$userName=$_POST["userName"];
$userPassword=$_POST["userPassword"];
if($userName==$guestName && $userPassword==$guestPassword){
    echo "welcome , guest";
    $SEESION["check"]="guest";
    $_cookiedate=strtotime("+30 seconds",time());
    setcookie("userName",$guestName,$_cookiedate);
    header("location:guest_from.php");
    exit();
}else{
    echo "login failed";
    header("refresh:3;url='login.php'");
}

?>