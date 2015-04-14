<?php 
session_start();
require "sql.php";
insert($_SESSION["CWID"],$_SESSION["fullName"],$_SESSION["Residency"]);
//Success?!
?>