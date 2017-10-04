<?php
/**
 * Created by PhpStorm.
 * User: slmns
 * Date: 04-10-2017
 * Time: 11:01
 */



$_cookie_name = "user";
$cookie_value = "ASDA";
setcookie($_cookie_name,$cookie_value,time() + (86400*30), "/");

?>
<html>

<body>

<?php


if(!isset($_COOKIE[$_cookie_name])) {

    echo "Cookie named '" . $_cookie_name . "' is not set";
} else {
    echo "Cookie '" . $_cookie_name . "' is set <br>";
    echo "Value is: " . $_COOKIE[$_cookie_name];
}


?>


</body>

</html>
