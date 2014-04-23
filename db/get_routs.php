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


$result = mysql_query("SELECT * FROM routs") or die(mysql_error());

if (mysql_num_rows($result) > 0) {
    $response["routs"] = array();

    while ($row = mysql_fetch_array($result)) {
        $routs = array();
        $routs["pid"] = $row["pid"];
        $routs["name_station"] = $row["name_station"];
        $routs["id_station"] = $row["id_station"];
        $routs["id_route"] = $row["id_route"];

        array_push($response["routs"], $routs);
    }
    $response["success"] = 1;

    echo json_encode($response);
} else {
    $response["success"] = 0;
    $response["message"] = "No products found";

    echo json_encode($response);
}
?>
