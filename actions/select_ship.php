<?php

    require_once "../db_connection.php";
    $sql = "SELECT ship_id, ship_name FROM ship";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        while($row =  $result->fetch_assoc()) {

            $ship_id = $row["ship_id"];
            $ship_name = $row["ship_name"];
            echo "<option value='$ship_id'>$ship_name</option>";
        }
    }

?>