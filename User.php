<!DOCTYPE html>
<head></head>
<body>
<?php


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "usersystem";
$port = "8889";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


$sql = "Select*From users";
$result = $conn->query($sql);

if ($result->num_rows >0){
while($row = $result->fetch_assoc()){
	echo "<br/>".$row["id"]. ". ".$row["navn"];
	
}

} else {
	echo"0 results";
}

Select navn,role FROM users,userroles where users.id = userroles.uid AND roles.id;
$conn->close();
?>
</body>
</html>