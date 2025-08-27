<?php

$uName = $_POST["uName"];
$uEmail = $_POST["uEmail"];
$uPhone = $_POST["uPhone"];
$suggestions = $_POST["suggestions"];
$gender = $_POST["gender"];

echo "Your name is: " . nl2br(htmlentities(strip_tags($uName))) . "<br>";
echo "Your email is: " . nl2br(htmlentities(strip_tags($uEmail))) . "<br>";
echo "Your phone is: " . nl2br(htmlentities(strip_tags($uPhone))) . "<br>";
echo "Your suggestion is: " . nl2br(htmlentities(strip_tags($suggestions))) . "<br>";
echo "Your gender is: " . nl2br(htmlentities(strip_tags($gender))) . "<br>";


?>
