<?php
session_start();
?>


<?php
$defaultName="nuk";;
$defaultPwd="123456";
$adminName="admin";
$adminPwd="654321";

$userName=$_POST["userName"];
$userPwd=$_POST["userPwd"];

if($defaultName==$userName && $defaultPwd==$userPwd){
	echo "Login success";
	$_SESSION["check"]=1;
	$cookiedate=strtotime("+10 seconds",time());
	header("Location:welcome_user.php");
}
else if($userName == $adminName && $userPwd == $adminPwd){
	echo "Login success, admin";
	$_SESSION["check"]=2;
	$cookiedate=strtotime("+10 seconds",time());
	header("Location:welcome_admin.php");
}
else{
	echo "Login failed, will send you back to login again";
	header("Refresh:3;url='login.php'");
} 
?>