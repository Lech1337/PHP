<?php
$_cookie_name = "user";
setcookie($_cookie_name,"",time()- 3600);
if(!isset($_COOKIE[$_cookie_name])){
    echo "Cookie named '" . $_cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $_cookie_name . "' is set!<br>";
    echo "Value is:" . $_COOKIE[$_cookie_name];
}
?>