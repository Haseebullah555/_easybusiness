<?php

$title = "Add House";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$dashboard = new Dashboard();
$delcid = Check_Get_Param($_GET['id']);
$dashboard->DeleteCar(check_Get_Param($delcid));
require_once ("../layout/footer.php");
?>