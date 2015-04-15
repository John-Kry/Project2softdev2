<?php
session_start();
//Starts a session so we can record their choices and their information accross pages.
require "sql.php";
if ($_SESSION["Residency"] == "noSelection")
    //checks if there was no selection if so put their choice into the session variable.
    {
        $_SESSION["Residency"] = $_POST["Residency"];
    }
//Displays users information
    echo ('Name: '. $_SESSION["fullName"].'<br>');
    echo ('CWID: '. $_SESSION["CWID"]. '<br>');
    echo ('Residential Life Selection: '. $_SESSION["Residency"]. '<br>');
//Confirmation button
    echo ('Confirm your selection!
            <Form Name ="toConfirm2Page" Method ="POST" ACTION = "page4.php">
            <INPUT TYPE = "Submit" Name = "Submit3" VALUE = "Submit">
            </Form>');
?>