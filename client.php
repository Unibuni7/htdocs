<?php
/**
 * Created by PhpStorm.
 * User: slmns
 * Date: 25-10-2017
 * Time: 03:21
 */


require 'lib/nusoap.php';

$client = new nusoap_client("http://localhost/MAMP/htdocs/service.php?wsdl"); // create an instance for nusoap client
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>SOAP Web Service Client Side Demo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>SOAP Web Service Client Side Demo</h2>
    <form class="form-inline" action="" method="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control"  placeholder="Enter Product Name" required/>
        </div>
        <button type="submit" name="submit" class="btn btn-default">Submit</button>
    </form>
    <p>&nbsp;</p>
    <h3>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];

    $response = $client->call('get_price',array("name"=>$name));

    if (empty($response))
        echo "Price of that product is not avaliable";
    else
        echo $response;


}

?>
    </h3>
</div>
</body>
</html>
