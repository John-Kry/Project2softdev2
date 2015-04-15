<?php 
session_start();
//Starts a session so we can record their choices and their information accross pages.
require "sql.php";
//Needed for insert function
    echo ('Name: '. $_SESSION["fullName"].'<br>');
    echo ('CWID: '. $_SESSION["CWID"]. '<br>');
    echo ('Residential Life Selection: '. $_SESSION["Residency"]. '<br>');
//Inserts the users choices and data into the database.
insert($_SESSION["CWID"],$_SESSION["fullName"],$_SESSION["Residency"]);

?>