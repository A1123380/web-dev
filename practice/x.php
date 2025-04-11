<?php
session_start();
?>

<head>
    <meta charset="utf-8">
</head>

<?php
$defaultName="guest";
$defaultPassword="123";
$adminName="admin";
$adminPassword="123";
$userName=$_POST["userName"];
$userPassword=$_POST["userPassword"];

if($userName==$defaultName && $userPassword==$defaultPassword){
    echo "hello guest, login success";
    $_SESSION["check"]="guest";
    $cookiedate=strtotime("+30 seconds",time());
    setcookie("userName",$defaultName, $cookiedate);
    header("location:guest_from.php");
}else if($userName==$adminName && $userPassword==$adminPassword){
    echo "hello admin, login success";
    $_SESSION["check"]="admin";
    $cookiedate=strtotime("+30 seconds",time());
    setcookie("userName",$adminName, $cookiedate);
    //header("location:admin_from.php");
}else{
    echo "login failed, go back to login again";
    header("refresh:3;url='test.php'");
}
?>