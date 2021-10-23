<?php

    require_once "../db_connection.php";
    $sql = "SELECT ship_id, ship_name, speed_class, eta, distance, route_id FROM ship";
    $result = $conn->query($sql);
    
    echo "<table>
            <tr>
                <th>Ship ID</th>
                <th>Ship Name</th>
                <th>Speed Class</th>
                <th>Eta</th>
                <th>Distance</th>
                <th>Route Name</th>
            </tr>
    ";

    if($result->num_rows > 0) {
        while($row =  $result->fetch_assoc()) {

            $ship_id = $row["ship_id"];
            $ship_name = $row["ship_name"];
            $speed_class = $row["speed_class"];
            $eta = $row["eta"];
            $distance = $row["distance"];
            $route_id = $row["route_id"];
            $route_name;

            $sql = "SELECT location1, location2 FROM `route` WHERE route_id = '$route_id'";

            $route_result = $conn->query($sql);
            if($route_result->num_rows > 0) {
                $route_row =  $route_result->fetch_assoc();
                $route_name = $route_row["location1"] . " - " . $route_row["location2"];
            }

            echo "<tr>";
            echo "<td>$ship_id</td>";
            echo "<td>$ship_name</td>";
            echo "<td>$speed_class</td>";
            echo "<td>$eta</td>";
            echo "<td>$distance</td>";
            echo "<td>$route_name</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

?>