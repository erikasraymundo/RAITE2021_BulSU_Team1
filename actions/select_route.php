<?php

    require_once "../db_connection.php";
    $sql = "SELECT route_id, location1, location2 FROM route";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        while($row =  $result->fetch_assoc()) {

            $route_id = $row["route_id"];
            $location1 = $row["location1"];
            $location2 = $row["location2"];
            echo "<option value='$route_id'>$location1 - $location2</option>";
        }
    }

?>