<?php
/**
 * Created by PhpStorm.
 * User: slmns
 * Date: 04-10-2017
 * Time: 11:22
 */

session_start();

?>

<!DOCTYPE html>

<html>


<body>

<?php

echo "Favorite Color is " .$_SESSION["Favecolor"] . ".<br>";
echo "Favorite Animal is ". $_SESSION["Faveanimal"] . ".<br>";

echo "Sessions variables are set";




?>



</body>

</html>
