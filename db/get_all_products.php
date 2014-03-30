<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 05.03.14
 * Time: 21:05
 */
$response = array();

require 'db_connect.php';

$db = new DB_CONNECT();

//
//$user = mysql_query("SELECT *FROM products")or die(mysql_error());
//
//while($row1 = mysql_fetch_array($user)){ // переменную запроса выборки необходимо обработать специальной функцией mysql_fetch_array()
//
//    echo $row1['name'].'---'.$row1['pass'];
//    echo '<br>';
//}


$result = mysql_query("SELECT *FROM products") or die(mysql_error());

if (mysql_num_rows($result) > 0) {
    $response["products"] = array();

    while ($row = mysql_fetch_array($result)) {
        $product = array();
        $product["pid"] = $row["pid"];
        $product["idRecord"] = $row["idRecord"];
        $product["idStation"] = $row["idStation"];
        $product["nameStation"] = $row["nameStation"];
        $product["timeStart"] = $row["timeStart"];
        $product["timeStop"] = $row["timeStop"];
        $product["latitude"] = $row["latitude"];
        $product["longitude"] = $row["longitude"];
        $product["created_at"] = $row["created_at"];
        $product["updated_at"] = $row["updated_at"];
        $product["sendToServer"] = $row["sendToServer"];

        array_push($response["products"], $product);
    }
    $response["success"] = 1;

    echo json_encode($response);
} else {
    $response["success"] = 0;
    $response["message"] = "No products found";

    echo json_encode($response);
}
?>