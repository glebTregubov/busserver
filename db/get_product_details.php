<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 05.03.14
 * Time: 21:03
 */

$response = array();

require 'db_connect.php';

$db = new DB_CONNECT();

if (isset($_GET["pid"])) {
    $pid = $_GET['pid'];

    $result = mysql_query("SELECT *FROM products WHERE pid = $pid");

    if (!empty($result)) {
        if (mysql_num_rows($result) > 0) {

            $result = mysql_fetch_array($result);

            $product = array();
            $product["pid"] = $result["pid"];
            $product["idRecord"] = $result["idRecord"];
            $product["idStation"] = $result["idStation"];
            $product["nameStation"] = $result["nameStation"];
            $product["timeStart"] = $result["timeStart"];
            $product["timeStop"] = $result["timeStop"];
            $product["longitude"] = $result["longitude"];
            $product["latitude"] = $result["latitude"];
            $product["sendToServer"] = $result["sendToServer"];
            $response["success"] = 1;

            $response["product"] = array();

            array_push($response["product"], $product);

            echo json_encode($response);
        } else {
            $response["success"] = 0;
            $response["message"] = "No record found";

            echo json_encode($response);
        }
    } else {
        $response["success"] = 0;
        $response["message"] = "No record found";

        echo json_encode($response);
    }
} else {
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";

    echo json_encode($response);
}
?>