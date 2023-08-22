<?php

$title = "Add House";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$dashboard = new Dashboard();
$uHid = Check_Get_Param($_GET['id']);
$dashboard->UpdateHouse(check_Get_Param($uHid));
?>