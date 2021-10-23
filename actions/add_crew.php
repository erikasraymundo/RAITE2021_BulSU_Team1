<?php
require_once "../db_connection.php";

if (isset($_POST)) {

    $crew_id = getCrewID();
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $sex = $_POST["sex"];
    $bdate = $_POST["bdate"];
    $email = $_POST["email"];
    $contact_no = $_POST["contact_no"];
    $rank = $_POST["rank"];
    $ship_id = $_POST["ship_id"];

    $sql = "INSERT INTO crew (crew_id, fname, lname, gender, bdate, email, contact_no, `rank`, ship_id) 
    VALUES ($fname, $lname, $gender, $bdate, $email, $contact_no, $rank, $ship_id)";

    if ($conn->query($sql) == TRUE) {
        echo "OK";
    } else {
        echo "Error: " . $conn->error;
    }
}


function getCrewID()
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $quizCode = 'CREW-';

    for ($i = 0; $i < 6; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $quizCode .= $characters[$index];
    }

    return $quizCode;
}
