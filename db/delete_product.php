<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 05.03.14
 * Time: 21:07
 */
$response = array();

if (isset($_POST['pid'])) {
    $pid = $_POST['pid'];

    require 'db_connect.php';

    $db = new DB_CONNECT();

    $result = mysql_query("DELETE FROM records WHERE pid = $pid");
    if (mysql_affected_rows() > 0) {
        $response["success"] = 1;
        $response["message"] = "Record successfully deleted";

        echo json_encode($response);
    } else {
        $response["success"] = 0;
        $response["message"] = "No product found";

        echo json_encode($response);
    }
} else {
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";

    echo json_encode($response);
}
?>