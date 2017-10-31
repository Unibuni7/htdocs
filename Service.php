<?php
/**
 * Created by PhpStorm.
 * User: slmns
 * Date: 04-10-2017
 * Time: 13:15
 */


require 'lib/nusoap.php';
require 'data.php';

$server = new nusoap_server(); // Create an instance for nusoap server.

$server -> configureWDSL("Soap Demo","urn:soapdemo"); //Configure WDSL file

$server->register(
    "get_price", //name of function
    array("name"=> "xsd:string"), //input
    array("return"=> "xsd:integer") //output


);

$server-> service(file_get_contents("php://input"));







?>