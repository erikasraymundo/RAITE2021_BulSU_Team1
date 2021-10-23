<?php

    require_once "../db_connection.php";
    $sql = "SELECT crew_id, fname, lname, gender, `address`, email, contact_no, `rank`, ship_id FROM crew";
    $result = $conn->query($sql);


    
    echo "<table>
            <tr>
                <th>Crew ID</th>
                <th>Name</th>
                <th>Rank</th>
                <th>Ship</th>
                <th>Sex</th>
                <th>Address</th>
                <th>Email</th>
                <th>Contact No</th>
            </tr>
    ";

    if($result->num_rows > 0) {
        while($row =  $result->fetch_assoc()) {

            $crew_id = $row["fname"];
            $name = $row["lname"] . ", " . $row["fname"];
            $gender = $row["gender"];
            $address = $row["address"];
            $email = $row["email"];
            $contact_no = $row["contact_no"];
            $rank = [];
            $rank = explode("_", $row["rank"]);
            $rank_imploded = implode(" ", $rank);
            $ship_id = $row["ship_id"];
            $ship_name;

            $sql = "SELECT ship_name FROM ship WHERE ship_id = '$ship_id'";

            $ship_result = $conn->query($sql);
            if($ship_result->num_rows > 0) {
                $ship_row =  $ship_result->fetch_assoc();
                $ship_name = $ship_row["ship_name"];
            }

            echo "<tr>";
            echo "<td>$crew_id</td>";
            echo "<td>$name</td>";
            echo "<td>$gender</td>";
            echo "<td>$address</td>";
            echo "<td>$email</td>";
            echo "<td>$contact_no</td>";
            echo "<td>$rank_imploded</td>";
            echo "<td>$ship_name</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

?>