<?php
error_reporting(0);
 $api = $_GET['engine'];
 $b = $_GET['browser'];

if($b == 1){
    echo "You are being redirected...";
    header("Location: https://www.bing.com/search?q=$api");
}
elseif($b == 2){
    echo "You are being redirected...";
    header("Location: https://www.google.com/search?q=$api");
}
elseif($b == 3){
    echo "You are being redirected...";
    header("Location: https://duckduckgo.com/?q=$api");   
}
elseif($b == 4){
    echo "You are being redirected...";
    header("Location: https://yandex.com.tr/search/?text=$api");
}
elseif($b == 5){
    echo "You are being redirected...";
    header("Location: https://search.yahoo.com/search?p=$api");
}
else{
    echo "We encountered an Error.We send you back.";
    header("Refresh: 5; url=index.php");
}
// 2022 ©  GezegenDigital
?>
