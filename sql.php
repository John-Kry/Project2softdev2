<?php
/* 
BONUS:
This function checks the availabilty of the housing options. What it does is creates a connection first. If it can't connect it will print connection failed with the error stated. if it is sucessful it will execute the query which will select all the rows in the specified table. The table is given through the parameter with $var holding its value. After this we use num_rows to calculate the amount of spots left in the table. We use 5-x to detrmine the spots left with x being the amount of rows currently occupied. This is passed to the avvailability variable which holds the spots left. This data is put into the first page and shows the spots left.
*/9
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
    print " Spots left: ($availability)";
    return $availability;
    /* close statement */
    $stmt->close();
}
}


/* 
BONUS:
This function takes the parameters of residence area ($RA), CWID, and the name of the student via $_Session. A fail safe was added to the insert function which prevents the user from adding themselves to a filled residence area by checking if it is full first with the help of the checkAV function. This if statement functions by checking if the ammount of slots remaning is a non zero value; if the value is non zero it allows the user to apply for that residence area. The function will tell the user if they were successfully added to the system and if the residence area is full it will inform them of this and say that "area is full." 
*/

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
    if (checkAv($RA)!=0){
        $query = "INSERT INTO $RA (CWID, Name) VALUES ('$CWID', '$name')";
        if ($conn->query($query) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
    }else{
    echo "<br> Error: Area is full!";
    }
    $conn->close();
}
?>