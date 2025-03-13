<?php

$uName = $_POST["uName"];
$uPasswd = $_POST["uPasswd"];
$uMail = $_POST["uMail"];
$uColor = $_POST["uColor"];
$uAge = $_POST["uAge"];
$uBirth = $_POST["uBirth"];
$uUrl = $_POST["uUrl"];
$uLike = $_POST["uLike"];
$uSecret = $_POST["uSecret"];
$uGender = $_POST["uGender"];
$uInterest = $_POST["uInterest"];
$uCity = $_POST["uCity"];
$uComment = $_POST["uComment"];

echo "Your name is:".$uName."<br>";
echo "Your password is:".$uPasswd."<br>";
echo "Your mail is:".$uMail."<br>";
echo "Your color is:".$uColor."<br>";
echo "Your age is:".$uAge."<br>";
echo "Your birthday is:".$uBirth."<br>";
echo "Your url is:".$uUrl."<br>";
echo "Your like is:".$uLike."<br>";
echo "uSecret is:".$uSecret."<br>";
echo "Your Gender is:" . $uGender . "<br>";
echo "Your City is:" . $uCity . "<br>";
//book 7-3 page35
//strip_tags($uComment) 刪除所有 HTML 標籤，防止惡意 HTML 注入。
//htmlentities(...) 轉換 HTML 特殊字元，確保輸出為純文字。
//nl2br(...) 將 \n 轉換成 <br>，保留換行格式。
echo "Your comments" . nl2br(htmlentities(strip_tags($uComment))) . "<br>";

//book 8-9

//sample 1
//$j;
//foreach($uInterest as $i){
//    $j=$j.$i.",";
//}
//echo "Your Interests are:".$j."<br>";


//sample 2
//$x=count($uInterest);

//if( $x ==0 ){
//}else{
//    for( $i = 0 ; $i < $x; $i++){
//       if($i==$x-1){
//            echo $uInterest[$i]
//        }
//    }
//}
//for($i=0)
//}
?>
