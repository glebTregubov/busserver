<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 05.03.14
 * Time: 21:03
 */
$response = array();

if (isset($_POST['idRecord']) && isset($_POST['idStation']) && isset($_POST['nameStation']) && isset($_POST['timeStart']) && isset($_POST['timeStop']) && isset($_POST['longitude']) && isset($_POST['latitude'])) {
/**
    $idUser = $_POST['idUser'];
    $idRecord = $_POST['idRecord'];
    $idStation = $_POST['idStation'];
    $nameStation= $_POST['nameStation'];
    $timeStart = $_POST['timeStart'];
    $timeStop = $_POST['timeStop'];
    $longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];
    $sendToServer = $_POST['sendToServer'];
    

    /**/
    $idUser = urldecode($_POST['idUser']);
    $idRecord = urldecode($_POST['idRecord']);
    $idStation = urldecode($_POST['idStation']);
    $nameStation= urldecode( $_POST['nameStation']);
    $timeStart = urldecode($_POST['timeStart']);
    $timeStop = urldecode($_POST['timeStop']);
    $longitude = urldecode($_POST['longitude']);
    $latitude = urldecode($_POST['latitude']);
    $sendToServer = urldecode($_POST['sendToServer']);
//*/
    require 'db_connect.php';

    $db = new DB_CONNECT();

    $result = mysql_query("INSERT INTO records(idUser, idRecord, idStation, nameStation, timeStart, timeStop, longitude, latitude, sendToServer ) VALUES('$idUser', '$idRecord', '$idStation', '$nameStation', '$timeStart', '$timeStop', '$longitude', '$latitude','$sendToServer')");

    if ($result) {
        $response["success"] = 1;
        $response["message"] = "Record successfully created.";

        echo json_encode($response);
    } else {
        $response["success"] = 0;
        $response["message"] = "Oops! An error occurred.";

        echo json_encode($response);
    }
} else {
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";

    echo json_encode($response);
}
?>
