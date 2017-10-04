<?php
/**
 * Created by PhpStorm.
 * User: slmns
 * Date: 04-10-2017
 * Time: 11:16
 */


session_start();

?>

<!DOCTYPE html>

<html>


<body>

<?php

$_SESSION["Favecolor"] = "Black";
$_SESSION["Faveanimal"] = "Cat";

echo "Sessions variables are set";




?>



</body>

</html>
