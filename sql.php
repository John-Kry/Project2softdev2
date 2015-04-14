<?php

function checkAv($var){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "project2";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
        $query = "SELECT CWID FROM $var";
        if ($stmt = $conn->prepare($query)) {

    /* execute query */
    $stmt->execute();

    /* store result */
    $stmt->store_result();

    $availability = 5 - $stmt->num_rows;
    print " ($availability)";

    /* close statement */
    $stmt->close();
}
}

function insert($CWID, $name, $RA){
        $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "project2";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
        $query = "INSERT INTO $RA (`CWID`, `Name`) VALUES ($CWID, $Name);";
        if ($stmt = $conn->prepare($query)) {

    /* execute query */
    $stmt->execute();

    /* store result */
    $stmt->store_result();

    $availability = 5 - $stmt->num_rows;
    print " ($availability)";

    /* close statement */
    $stmt->close();
}
}

?>