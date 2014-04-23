<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 05.03.14
 * Time: 21:06
 */
$response = array();

if (isset($_POST['pid']) && isset($_POST['idRecord']) && isset($_POST['idStation']) && isset($_POST['nameStation']) && isset($_POST['timeStart']) && isset($_POST['timeStop']) && isset($_POST['longitude']) && isset($_POST['latitude']))  {

    $pid = $_POST['pid'];
    $idUser = $_POST['idUser'];
    $idRecord = $_POST['idRecord'];
    $idStation = $_POST['idStation'];
    $nameStation= $_POST['nameStation'];
    $timeStart = $_POST['timeStart'];
    $timeStop = $_POST['timeStop'];
    $longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];
    $sendToServer = $_POST['sendToServer'];

    require 'db_connect.php';

    $db = new DB_CONNECT();

    $result = mysql_query("UPDATE records SET idUser = '$idUser', idRecord = '$idRecord', idStation = '$idStation', nameStation = '$nameStation', timeStart = '$timeStart', timeStop = '$timeStop', longitude = '$longitude', latitude = '$latitude', sendToServer ='$sendToServer' WHERE pid = $pid");

    if ($result) {
        // successfully updated
        $response["success"] = 1;
        $response["message"] = "Record successfully updated.";

        echo json_encode($response);
    } else {

    }
} else {
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";

    echo json_encode($response);
}
?>
