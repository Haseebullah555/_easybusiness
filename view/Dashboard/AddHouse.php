<?php

$title = "Add House";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$dashboard = new Dashboard();
$Hid = Check_Get_Param($_GET['id']);
$dashboard->AddHouse(check_Get_Param($Hid));

?>