<?php

$title = "Add House";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$dashboard = new Dashboard();
$dHid = Check_Get_Param($_GET['id']);
$dashboard->DeleteHouse(check_Get_Param($dHid));
require_once ("../layout/footer.php");
?>