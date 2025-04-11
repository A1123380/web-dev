<?php
session_start();

if(isset($_SESSION["check"])){
    $uSecret=$_GET["uSecret"];
    $uName=$_GET["uName"];
    $uEmail=$_GET["uEmail"];
    echo "Your name is:".$uName."<br>";
    echo "Your email is:".$uEmail."<br>";
    echo "Your Secret is:".$uSecret."<br>";
}else{
    echo "go back login.php";
    header("refresh:3;url='login.php'");
}

?>