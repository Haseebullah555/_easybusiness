<?php

$title = "Add House";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$dashboard = new Dashboard();
$own_car_id = Check_Get_Param($_GET['id']);
$dashboard->AddCar(check_Get_Param($own_car_id));

?>