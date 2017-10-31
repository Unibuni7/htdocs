<!DOCTYPE html>
<html lang="en">
<head>
    <title>Opgave 2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Opgave 2</h2>
    <form class="form-inline" action="" method="POST">
        <div class="form-group">
            <label for="titel">Titel</label>
            <input type="text" name="titel" class="titel-class"  placeholder="Enter website Titel" required/>
            <label for="URL">URL</label>
            <input type="url" name="URL" class="URL-class" placeholder="Enter URL" required/>
            <label for="Category">Category</label>
            <input type="text" name="Category" class="Category-class" placeholder="Enter Category" required/>
        </div>
        <button type="submit" name="submit" class="btn btn-default">Submit</button>
    </form>
    <p>&nbsp;</p>
    <h3>
        <?php
        /**
         * Created by PhpStorm.
         * User: slmns
         * Date: 31-10-2017
         * Time: 10:39
         */


        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "Opgave2";
        $port = "8889";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname, $port);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";

        /*$titel = $html -> find('div[class="titel-class"]',0);
        echo $titel->innertext;
        $URL = $html -> find('div[class="URL-class"]',0);
        echo $URL->innertext;
        $Cat = $html -> find('div[class="Category-class"]',0);
        echo $Cat->innertext;*/

        $date = date('Y-m-d');
        $titel = $_POST["titel"];
        $URL = $_POST["URL"];
        $Cate = $_POST["Category"];



        if (isset($_REQUEST['submit'])) {
// INSERT INTO `websites` (`id`, `Titel`, `URL`, `Date`, `Category`) VALUES (NULL, 'DR', 'HTTP://DR:DK', '2017-10-10', 'NEWS');
            $sql = "INSERT INTO websites (id,Titel,URL,Dato,Category) VALUES (null,'$titel','$URL','$date','$Cate')";
        }




        if (mysqli_query($conn,$sql)){
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }



        ?>


    </h3>

    <h1> Table for Websites </h1>
    <table>
        <tr>
            <td>
                Titel
            </td>
            <td>
                URL
            </td>
            <td>
                Dato
            </td>
            <td>
                Category
            </td>
        </tr>

        <?php
        if ($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }

        // Choose content to acquire from specific table
        $sql = "SELECT * FROM websites";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td style='border:1px solid;'>";
                echo $row["Titel"];
                echo "</td>";
                echo "<td style='border:1px solid'>";
                echo $row['URL'];
                echo "</td>";
                echo "<td style='border:1px solid;'>";
                echo $row["Dato"];
                echo "</td>";
                echo "<td style='border:1px solid;'>";
                echo $row["Category"];
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>

    </table>
</div>
</body>
</html>
