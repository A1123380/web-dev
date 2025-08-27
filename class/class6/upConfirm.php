<html>
    <head>
        <meta charset='utf-8'>
    </head>
<?php
echo "file name: ".$_FILES["file"]["name"]."<br/>";
echo "file name: ".$_FILES["file"]["tmp_name"]."<br/>";
echo "file name: ".$_FILES["file"]["size"]."<br/>";
echo "file name: ".$_FILES["file"]["type"]."<br/>";

$time=time();

$FileName="pic\\".$time."_test.png";

// use rename to save tmp file
//if ( rename($_FILES["file"]["tmp_name"],$FileName)) {
//    echo "file upload success</br>";
//}
//else
    echo "file upload filed";
if ( copy($_FILES["file"]["tmp_name"],$FileName)) {
    echo "file upload success</br>";
}
else
    echo "file upload filed";
?>
</html>