<?php
require_once "../db_connection.php";

if (isset($_POST)) {

    $location1 = $_POST["location1"];
    $geo_point_lat1 = $_POST["loc1_point_lat1"];
    $geo_point_long1 = $_POST["loc1_point_long2"];
    $location2 = $_POST["location2"];
    $geo_point_lat2 = $_POST["loc2_point_lat1"];
    $geo_point_long2 = $_POST["loc2_point_long2"];
    $distance = $_POST["distance"];

    $sql = "INSERT INTO route (location1, geo_point_lat1, geo_point_long1, location2, geo_point_lat2, geo_point_long2, distance) 
    VALUES ('$location1', '$geo_point_lat1', '$geo_point_long1', '$location2', '$geo_point_lat2', '$geo_point_long2', '$distance')";

    if ($conn->query($sql)) {
        echo "ok";
    } else {
        echo "Error: " . $conn->error;
    }
}