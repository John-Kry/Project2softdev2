<?php
session_start();
require "sql.php";
if ($_SESSION["Residency"] == "noSelection")
    {
        $_SESSION["Residency"] = $_POST["Residency"];
    }
    echo ('Name: '. $_SESSION["fullName"].'<br>');
    echo ('CWID: '. $_SESSION["CWID"]. '<br>');
    echo ('Residential Life Selection: '. $_SESSION["Residency"]. '<br>');

    echo ('<button>Confirm</button>');
    
?>