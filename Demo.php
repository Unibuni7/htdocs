<?php
/**
 * Created by PhpStorm.
 * User: slmns
 * Date: 04-10-2017
 * Time: 09:09
 */


echo "Abdul rulez <br>";

for ($i = 1; $i <= 10; $i++){
    for ($j = 1; $j <= 10; $j++){
        $result = $i * $j;

        echo "$i * $j = $result .<br>";

    }

}

print_r($_GET);
$name= $_GET['name'];
$name2= $_GET['othername'];
$name3= $_GET['thirdname'];

echo "Hello " .$name. ", " . $othername . ", " .$thirdname;
echo "Password er " . $_GET['password'];




?>

<form action="Demo.php" method="GET">

    name: <input type="text" name="name" />
    <input type="submit" />


</form>

<?php

print_r($_GET);
$username = $_GET['username'];
$password = $_GET['password'];

$users = array(array($username,$password),
    array($username, $password)
);
echo  "<br> Username: " .$users[0][0] . " Password: ". $users[0][1];
?>

<form action="Demo.php" method="get">

    username: <input type="text" name="username" />
    password: <input type="text" name="password"/>
    <input type="submit" />

    <?php


    if ($username && $password){
        echo "Logget ind";
    } else {
        echo "Wrong";
    }
?>




</form>

