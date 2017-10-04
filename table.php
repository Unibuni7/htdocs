<!DOCTYPE html>
<html>
<head><head>
<body>
<?php
echo "<h1>
User Login system
</h1><p>
Welcome!
</p>";

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

// Choose content to acquire from table specific table
$sql = "SELECT navn, role FROM users, userroles, roles WHERE users.id = userroles.uid and roles.id = userroles.rid;";
$result = $conn->query($sql);

if($result->num_rows > 0){
	// output data of each row
	while($row = $result->fetch.assoc()){
		echo "<br />" .$row["navn"]. ": " . $row ["role"];
		
	}
} else {
	echo "0 result";
}

?>

<h1> Table for Users, Email and roles </h1>
<table>
<tr>
<td>
Name
</td>
<td>
Email
</td>
</tr>

<?php
if ($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}

// Choose content to acquire from specific table
 $sql = "SELECT * FROM users";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td style='border:1px solid;'>";
                echo $row["navn"];
                echo "</td>";
                echo "<td style='border:1px solid'>";
                echo $row['email'];
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }
        ?>

</table>

<h1>Enter values to insert into database</h1>

    <form action="table.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">

        <?php
        //Choose content to acquire from table specific table
        $navn = $_POST["name"];
        $email = $_POST["email"];
        $sql = "INSERT INTO `users` (`id`, `navn`, `email`, `password`) 
          VALUES (NULL, '$navn', '$email', 'test');";
        $result = $conn->query($sql);
        if ($result === true) {
            echo "New record successful";
        }else {
            echo "0 results";
        }
        $conn->close();
        ?>

    </form>		


</body>
</html>

