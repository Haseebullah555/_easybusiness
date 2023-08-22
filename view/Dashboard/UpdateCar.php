<?php

$title = "Update Car";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$dashboard = new Dashboard();
$UpdateCarID=  Check_Get_Param($_GET['id']);
$dashboard->UpdateCar(Check_Get_Param($UpdateCarID));

?>