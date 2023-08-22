<?php

$title = "Home";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$PDReports = new Reports();
$PDReports->Index();
?>