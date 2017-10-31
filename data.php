<?php
/**
 * Created by PhpStorm.
 * User: slmns
 * Date: 04-10-2017
 * Time: 13:31
 */


function get_price($name) {
    $products = [
        "book"=>20,
        "pen"=>10,
        "pencile"=>5
    ];

    foreach($products as $product=>$price) {
        if ($product==$name){
            return $price;
            break;
        }
    }
}


?>


