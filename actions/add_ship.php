<?php
require_once "../db_connection.php";

if (isset($_POST)) {

    $ship_id = getShipID();
    $ship_name = $_POST["ship_name"];
    $speed_class = $_POST["speed_class"];
    $eta = $_POST["eta"];
    $route = $_POST["route"];

    $sql = "INSERT INTO ship (ship_id, ship_name, speed_class, eta, `route_id`) 
    VALUES ('$ship_id', '$ship_name', '$speed_class', $eta, $route)";

    if ($conn->query($sql)) {
        echo "ok";
    } else {
        echo "Error: " . $conn->error;
    }
}

function getShipID()
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $quizCode = 'SHIP-';

    for ($i = 0; $i < 6; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $quizCode .= $characters[$index];
    }

    return $quizCode;
}
